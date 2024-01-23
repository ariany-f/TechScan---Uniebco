<?php
/* Smarty version 4.2.0, created on 2024-01-22 14:06:01
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\admin.forums.recursive_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65ae7649779e03_91162814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a032e71c7816e16e45e69511e10714c795d8ac' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\admin.forums.recursive_options.tpl',
      1 => 1678120608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin.forums.recursive_options.tpl' => 2,
  ),
),false)) {
function content_65ae7649779e03_91162814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\httpdocs\\www\\comunidade\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<option <?php if ($_smarty_tpl->tpl_vars['data']->value['forum_section'] == $_smarty_tpl->tpl_vars['forum']->value['forum_id']) {?>selected style="font-weight: 600;" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['forum']->value['iteration']) {?>class="bg-info" <?php }?>>
  <?php echo str_repeat("- - ",$_smarty_tpl->tpl_vars['forum']->value['iteration']);
echo __(smarty_modifier_truncate($_smarty_tpl->tpl_vars['forum']->value['forum_name'],30));?>

</option>
<?php if ($_smarty_tpl->tpl_vars['forum']->value['childs']) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forum']->value['childs'], '_forum');
$_smarty_tpl->tpl_vars['_forum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_forum']->value) {
$_smarty_tpl->tpl_vars['_forum']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('forum'=>$_smarty_tpl->tpl_vars['_forum']->value), 0, true);
?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
