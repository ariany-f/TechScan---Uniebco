<?php
/* Smarty version 4.2.0, created on 2023-03-30 17:42:42
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\_pinned_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6425ca12de39e5_19489011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caa0d3a1c7cb3b24ed9d9303bf97ffc65f8fb454' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\_pinned_post.tpl',
      1 => 1678120604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_6425ca12de39e5_19489011 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo __("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), 0, false);
}
}
