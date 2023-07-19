<?php
/* Smarty version 4.2.0, created on 2023-03-06 18:18:48
  from 'E:\httpdocs\www\uniebco\comunidade\content\themes\default\templates\reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64062e888fb4d6_33594547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a643471987d6a35feeb3591c0ea7618568835a2f' => 
    array (
      0 => 'E:\\httpdocs\\www\\uniebco\\comunidade\\content\\themes\\default\\templates\\reset.tpl',
      1 => 1678120607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_64062e888fb4d6_33594547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_message_sent_1030.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __("Reset Password");?>
</h2>
    <p class="text-xlg"><?php echo __("Enter the email address you signed up with and we'll email you a reset link");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container" style="margin-top: -25px;">
  <div class="row">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5 mx-md-auto">
      <div class="card px-4 py-4 shadow">
        <div class="card-body">
          <form class="js_ajax-forms" data-url="core/forget_password.php">
            <div class="form-group">
              <label class="form-control-label"><?php echo __("Email");?>
</label>
              <input name="email" id="email" type="text" class="form-control" required autofocus>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
              <div class="form-group">
                <!-- reCAPTCHA -->
                <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js' async defer><?php echo '</script'; ?>
>
                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                <!-- reCAPTCHA -->
              </div>
            <?php }?>

            <div class="form-group">
              <button type="submit" class="btn btn-md btn-block rounded-pill btn-primary">
                <i class="far fa-envelope-open mr10"></i><?php echo __("Send");?>

              </button>
            </div>

            <!-- error -->
            <div class="alert alert-danger x-hidden"></div>
            <!-- error -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
