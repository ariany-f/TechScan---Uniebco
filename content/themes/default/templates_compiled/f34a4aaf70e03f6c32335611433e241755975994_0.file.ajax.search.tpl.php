<?php
/* Smarty version 4.2.0, created on 2023-07-17 18:28:42
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\ajax.search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64b5885a7a7f95_63418743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f34a4aaf70e03f6c32335611433e241755975994' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\ajax.search.tpl',
      1 => 1689618438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
  ),
),false)) {
function content_64b5885a7a7f95_63418743 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="js_scroller">
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['result']->value['type'] == "user") {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_user'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['result']->value['connection'],'_search'=>true), 0, true);
?>

      <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "page") {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_page'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_search'=>true), 0, true);
?>

      <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "group") {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_group'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_search'=>true), 0, true);
?>

      <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "event") {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_event'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_search'=>true), 0, true);
?>

      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div><?php }
}
