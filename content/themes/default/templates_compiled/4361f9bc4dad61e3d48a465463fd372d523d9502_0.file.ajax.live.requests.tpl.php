<?php
/* Smarty version 4.2.0, created on 2023-03-30 20:13:20
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\ajax.live.requests.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6425ed601422b5_74509350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4361f9bc4dad61e3d48a465463fd372d523d9502' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\ajax.live.requests.tpl',
      1 => 1678120605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_6425ed601422b5_74509350 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requests']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"request"), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
