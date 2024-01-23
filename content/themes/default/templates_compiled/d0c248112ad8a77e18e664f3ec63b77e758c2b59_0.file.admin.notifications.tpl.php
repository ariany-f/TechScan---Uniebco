<?php
/* Smarty version 4.2.0, created on 2024-01-17 16:14:39
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\admin.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a7fcefb8ace9_40138715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0c248112ad8a77e18e664f3ec63b77e758c2b59' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\admin.notifications.tpl',
      1 => 1678120607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a7fcefb8ace9_40138715 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-bell mr10"></i><?php echo __("Mass Notifications");?>

  </div>

  <!-- Mass Notifications -->
  <form class="js_ajax-forms" data-url="admin/notifications.php">
    <div class="card-body">
      <div class="alert alert-primary">
        <div class="icon">
          <i class="fa fa-bell fa-2x"></i>
        </div>
        <div class="text">
          <strong><?php echo __("Mass Notifications");?>
</strong><br>
          <?php echo __("Enable you to send notifications to all site users");?>
.<br>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("URL");?>

        </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="url">
          <span class="form-text">
            <?php echo __("Notification link used when user clicks on the notification");?>

          </span>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Message");?>

        </label>
        <div class="col-sm-9">
          <textarea class="form-control" rows="3" name="message"></textarea>
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-right">
      <button type="submit" class="btn btn-danger">
        <i class="fa fa-paper-plane mr10"></i><?php echo __("Send");?>

      </button>
    </div>
  </form>
  <!-- Mass Notifications -->

</div><?php }
}
