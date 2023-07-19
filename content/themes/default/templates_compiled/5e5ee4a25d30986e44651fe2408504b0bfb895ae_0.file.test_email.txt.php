<?php
/* Smarty version 4.2.0, created on 2022-12-30 12:09:50
  from 'E:\httpdocs\www\uniebco\content\themes\default\templates\emails\test_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63aed50e4080e0_49231696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e5ee4a25d30986e44651fe2408504b0bfb895ae' => 
    array (
      0 => 'E:\\httpdocs\\www\\uniebco\\content\\themes\\default\\templates\\emails\\test_email.txt',
      1 => 1672401337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aed50e4080e0_49231696 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
,

<?php echo __("This is a test email");?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
