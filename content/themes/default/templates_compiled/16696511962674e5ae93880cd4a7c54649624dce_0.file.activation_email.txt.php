<?php
/* Smarty version 4.2.0, created on 2022-12-30 12:11:49
  from 'E:\httpdocs\www\uniebco\content\themes\default\templates\emails\activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63aed58599f166_30737788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16696511962674e5ae93880cd4a7c54649624dce' => 
    array (
      0 => 'E:\\httpdocs\\www\\uniebco\\content\\themes\\default\\templates\\emails\\activation_email.txt',
      1 => 1672401337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aed58599f166_30737788 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,

<?php echo __("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/activation/<?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo __("Welcome to");?>
 <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
