<?php
/* Smarty version 4.2.0, created on 2023-01-06 21:23:47
  from '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/_pinned_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63b891634f2535_65911343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20ed70288816f1984a4abac2d75c3a3853a0ad9d' => 
    array (
      0 => '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/_pinned_post.tpl',
      1 => 1673035462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_63b891634f2535_65911343 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo __("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), 0, false);
}
}
