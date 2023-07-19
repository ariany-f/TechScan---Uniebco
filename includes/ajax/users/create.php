<?php

/**
 * ajax -> pages_groups_events -> create|edit
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

// valid inputs
if (!in_array($_GET['do'], ['create'])) {
  _error(400);
}

try {

  // initialize the return array
  $return = array();
  $return['callback'] = 'window.location.replace(response.path);';

    if ($_GET['do'] == "create") {
        // user create
        $user->add($_POST);

        // return
        $return['path'] = $system['system_url'] . "/comunidade/people";
    }

  // return & exit
  return_json($return);
} catch (Exception $e) {
  return_json(array('error' => true, 'message' => $e->getMessage()));
}
