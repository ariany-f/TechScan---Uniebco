<?php
/* Smarty version 4.2.0, created on 2023-04-10 10:33:12
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\emails\two_factor_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6433e5e8338205_29018893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd32e6bead1746723f84c23858a9a8d8c4d465f' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\emails\\two_factor_email.txt',
      1 => 1678120608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6433e5e8338205_29018893 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
,

<?php echo __("To complete the sign-in process, please use the following 6-digit key");?>


<?php echo __("Two-factor authentication key");?>
: <?php echo $_smarty_tpl->tpl_vars['two_factor_key']->value;?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
