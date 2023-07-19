<?php

/**
 * ajax -> pages_groups_events -> add
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

// check demo account
if ($user->_data['user_demo']) {
  modal("ERROR", __("Demo Restriction"), __("You can't do this with demo account"));
}

try {

  // initialize the return array
  $return = array();

   // get custom fields
    $smarty->assign('custom_fields', $user->get_custom_fields(array("for" => "user")));
    
    $smarty->assign('genders', $user->get_genders());

   // return
   $return['template'] = $smarty->fetch("ajax.people.form.tpl");
   $return['callback'] = "$('#modal').modal('show'); $('.modal-content:last').html(response.template); initialize_modal();";

  // return & exit
  return_json($return);
} catch (Exception $e) {
  modal("ERROR", __("Error"), $e->getMessage());
}
