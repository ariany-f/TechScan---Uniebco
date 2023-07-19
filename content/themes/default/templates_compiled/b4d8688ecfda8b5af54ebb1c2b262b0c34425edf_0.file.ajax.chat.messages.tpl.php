<?php
/* Smarty version 4.2.0, created on 2023-03-06 18:30:24
  from 'E:\httpdocs\www\uniebco\comunidade\content\themes\default\templates\ajax.chat.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64063140884b41_42177468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4d8688ecfda8b5af54ebb1c2b262b0c34425edf' => 
    array (
      0 => 'E:\\httpdocs\\www\\uniebco\\comunidade\\content\\themes\\default\\templates\\ajax.chat.messages.tpl',
      1 => 1678120608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_message.tpl' => 1,
  ),
),false)) {
function content_64063140884b41_42177468 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
