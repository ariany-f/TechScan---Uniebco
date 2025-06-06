<?php

/**
 * ajax -> payments -> razorpay
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true, true);

// check if Razorpay enabled
if (!$system['creditcard_enabled'] && !$system['alipay_enabled']) {
  modal("MESSAGE", __("Error"), __("This feature has been disabled by the admin"));
}

try {

  switch ($_POST['handle']) {
    case 'packages':
      // valid inputs
      if (!isset($_POST['razorpay_payment_id'])) {
        _error(400);
      }
      if (!isset($_POST['package_id']) || !is_numeric($_POST['package_id'])) {
        _error(400);
      }

      // check package
      $package = $user->get_package($_POST['package_id']);
      if (!$package) {
        _error(400);
      }
      /* check if user already subscribed to this package */
      if ($user->_data['user_subscribed'] && $user->_data['user_package'] == $package['package_id']) {
        modal("SUCCESS", __("Subscribed"), __("You already subscribed to this package, Please select different package"));
      }

      // check payment
      $payment = razorpay_check($_POST['razorpay_payment_id'], $package['price']);
      if ($payment) {
        /* update user package */
        $user->update_user_package($package['package_id'], $package['name'], $package['price'], $package['verification_badge_enabled']);
        /* return */
        return_json(array('callback' => 'window.location.href = "' . $system['system_url'] . '/comunidade/upgraded";'));
      }
      break;

    case 'wallet':
      // valid inputs
      if (!isset($_POST['razorpay_payment_id'])) {
        _error(400);
      }
      if (!isset($_POST['price']) || !is_numeric($_POST['price'])) {
        _error(400);
      }

      // check payment
      $payment = razorpay_check($_POST['razorpay_payment_id'], $_POST['price']);
      if ($payment) {
        /* update user wallet balance */
        $_SESSION['wallet_replenish_amount'] = $_POST['price'];
        $db->query(sprintf("UPDATE users SET user_wallet_balance = user_wallet_balance + %s WHERE user_id = %s", secure($_SESSION['wallet_replenish_amount']), secure($user->_data['user_id'], 'int'))) or _error("SQL_ERROR_THROWEN");
        /* wallet transaction */
        $user->wallet_set_transaction($user->_data['user_id'], 'recharge', 0, $_SESSION['wallet_replenish_amount'], 'in');
        /* redirect*/
        return_json(array('callback' => 'window.location.href = "' . $system['system_url'] . '/comunidade/wallet?replenish_succeed";'));
      }
      break;

    case 'donate':
      // valid inputs
      if (!isset($_POST['razorpay_payment_id'])) {
        _error(400);
      }
      if (!isset($_POST['post_id']) || !is_numeric($_POST['post_id'])) {
        _error(400);
      }
      if (!isset($_POST['price']) || !is_numeric($_POST['price'])) {
        _error(400);
      }

      // check payment
      $payment = razorpay_check($_POST['razorpay_payment_id'], $_POST['price']);
      if ($payment) {
        /* funding donation */
        $user->funding_donation($_POST['post_id'], $_POST['price']);
        /* redirect */
        return_json(array('callback' => 'window.location.href = "' . $system['system_url'] . '/comunidade/posts/' . $_POST['post_id'] . '";'));
      }
      break;

    default:
      _error(400);
      break;
  }
} catch (Exception $e) {
  modal("ERROR", __("Error"), $e->getMessage());
}
