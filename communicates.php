<?php

/**
 * index
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');

// communicates enabled
if (!$system['communicates_enabled']) {
  _error(404);
}

try {

  // check user logged in
  if (!$user->_logged_in) {

    // page header
    page_header(__("Welcome to") . ' ' . __($system['system_title']));

    if (!$system['newsfeed_public']) {

      // get genders
      $smarty->assign('genders', $user->get_genders());

      // get countries
      $smarty->assign('countries', $user->get_countries());

      // get custom fields
      $smarty->assign('custom_fields', $user->get_custom_fields());
    } else {

      // newsfeed location filter
      if ($system['newsfeed_location_filter_enabled']) {
        // get countries
        $smarty->assign('countries', $user->get_countries());
        // get selected country
        if (isset($_GET['country'])) {
          $selected_country = $user->get_country_by_name($_GET['country']);
          /* assign variables */
          $smarty->assign('selected_country', $selected_country);
        }
      }

      // get posts (newsfeed)
      $posts = ($selected_country) ? $user->get_posts(['country' => $selected_country['country_id']]) : $user->get_posts();
      /* assign variables */
      $smarty->assign('posts', $posts);
    }
  } else {

    // user access
    user_access();

    // get announcements
    $announcements = $user->announcements();
    /* assign variables */
    $smarty->assign('announcements', $announcements);

    // page header
    page_header(__($system['system_title']));

    // get stories
    if ($system['stories_enabled']) {
        $smarty->assign('stories', $user->get_stories());
        $smarty->assign('has_story', $user->get_my_story());
    }

    // prepare publisher
    $smarty->assign('feelings', get_feelings());
    $smarty->assign('feelings_types', get_feelings_types());
    if ($system['colored_posts_enabled']) {
        $smarty->assign('colored_patterns', $user->get_posts_colored_patterns());
    }

    // check daytime messages
    $daytime_msg_enabled = (isset($_COOKIE['dt_msg'])) ? false : $system['daytime_msg_enabled'];
    $smarty->assign('daytime_msg_enabled', $daytime_msg_enabled);

    // newsfeed location filter
    if ($system['newsfeed_location_filter_enabled']) {
        // get selected country
        if (isset($_GET['country'])) {
        $selected_country = $user->get_country_by_name($_GET['country']);
        /* assign variables */
        $smarty->assign('selected_country', $selected_country);
        }
    }

    // get posts (communicates)
    $posts = $user->get_posts(array('get' => 'newsfeed', 'filter' => 'communicates'));
    /* assign variables */
    $smarty->assign('posts', $posts);
    
    /* assign variables */
    $smarty->assign('view', $_GET['view']);

    // get suggested peopel
    $new_people = $user->get_new_people(0, true);
    /* assign variables */
    $smarty->assign('new_people', $new_people);

    // get suggested pages
    if ($system['pages_enabled']) {
      $new_pages = $user->get_pages(array('suggested' => true, 'random' => 'true', 'results' => 5));
      /* assign variables */
      $smarty->assign('new_pages', $new_pages);
    }

    // get suggested groups
    if ($system['groups_enabled']) {
      $new_groups = $user->get_groups(array('suggested' => true, 'random' => 'true', 'results' => 5));
      /* assign variables */
      $smarty->assign('new_groups', $new_groups);
    }

    // get suggested events
    if ($system['events_enabled']) {
      $new_events = $user->get_events(array('suggested' => true, 'random' => 'true', 'results' => 5));
      /* assign variables */
      $smarty->assign('new_events', $new_events);
    }

    // get ads campaigns
    $ads_campaigns = $user->ads_campaigns();
    /* assign variables */
    $smarty->assign('ads_campaigns', $ads_campaigns);
  }

  // get trending hashtags
  if ($system['trending_hashtags_enabled']) {
    $trending_hashtags = $user->get_trending_hashtags();
    /* assign variables */
    $smarty->assign('trending_hashtags', $trending_hashtags);
  }

  // get ads
  $ads = $user->ads('home');
  /* assign variables */
  $smarty->assign('ads', $ads);

  // get widgets
  $widgets = $user->widgets('home');
  /* assign variables */
  $smarty->assign('widgets', $widgets);
} catch (Exception $e) {
  _error(__("Error"), $e->getMessage());
}

// page footer
page_footer("communicates");
