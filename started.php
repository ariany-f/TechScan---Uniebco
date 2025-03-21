<?php

/**
 * started
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');

// user access (simple)
if (!$user->_logged_in) {
  user_login();
}

try {

  // check registration type
  if ($system['registration_type'] == "paid" && !$user->_data['user_subscribed']) {
   redirect('/comunidade/packages');
  }

  // check if already getted started
  if (!$system['getting_started'] || $user->_data['user_started']) {
    redirect();
  }

  // get countries
  $countries = $user->get_countries();
  /* assign variables */
  $smarty->assign('countries', $countries);

  // get suggested peopel
  $new_people = $user->get_new_people(0, true);
  /* assign variables */
  $smarty->assign('new_people', $new_people);
} catch (Exception $e) {
  _error(__("Error"), $e->getMessage());
}

// page header
page_header(__($system['system_title']) . " &rsaquo; " . __("Getting Started"));

// page footer
page_footer("started");
