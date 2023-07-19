<?php
/* Smarty version 4.2.0, created on 2023-03-20 12:03:00
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\emails\forget_password_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64184b746a5224_94076663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6295b4f5e97aac3e85d746533a2048abf26dcc27' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\emails\\forget_password_email.txt',
      1 => 1678120608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64184b746a5224_94076663 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>


<?php echo __("To complete the reset password process, please copy this token");?>
:

<?php echo __("Token");?>
: <?php echo $_smarty_tpl->tpl_vars['reset_key']->value;?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
