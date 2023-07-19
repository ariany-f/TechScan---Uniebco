<?php
    // fetch bootstrap
    require('../bootstrap.php');
    require_once('config.php');
    require_once('functions.php');
	
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $stmt = $connection->prepare("SELECT * FROM users");
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    $stmt->close();
    $error = [];
    $success = [];
    $i = 0;
    while($obj = $stmt_result->fetch_object()){
      $i++;
      $email = $obj->user_email;
      $first_name = $obj->user_firstname;
        
      /* prepare activation email */
      $subject = "Bem vindo(a) ao Portal UniEbco";
      $body = get_email_template("welcome_email", $subject, ["first_name" => $first_name, "email" => $email]);
      /* send email */
      if (!_email($email, $subject, $body['html'], $body['plain'])) {
        $error[$i] = $email . " não pode ser enviado\r";
        //throw new Exception("Activation email could not be sent" . ", " . "But you can login now");
      }
      else
      {
        $success[$i] = $email;
      }
    }
    print_r($error);
    echo '<br>';
    print_r($success);die;
