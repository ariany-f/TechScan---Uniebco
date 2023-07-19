<?php
/* Smarty version 4.2.0, created on 2023-03-06 18:18:56
  from 'E:\httpdocs\www\uniebco\comunidade\content\themes\default\templates\emails\forget_password_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64062e90208a64_66167920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad2539d50a98aa423e651ad8430992b81961364' => 
    array (
      0 => 'E:\\httpdocs\\www\\uniebco\\comunidade\\content\\themes\\default\\templates\\emails\\forget_password_email.txt',
      1 => 1678120608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64062e90208a64_66167920 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>


<?php echo __("To complete the reset password process, please copy this token");?>
:

<?php echo __("Token");?>
: <?php echo $_smarty_tpl->tpl_vars['reset_key']->value;?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
