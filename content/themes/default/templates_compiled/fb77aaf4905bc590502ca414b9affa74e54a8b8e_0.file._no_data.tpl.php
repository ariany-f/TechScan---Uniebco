<?php
/* Smarty version 4.2.0, created on 2022-12-30 12:08:57
  from 'E:\httpdocs\www\uniebco\content\themes\default\templates\_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63aed4d9dffcf3_72035577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb77aaf4905bc590502ca414b9affa74e54a8b8e' => 
    array (
      0 => 'E:\\httpdocs\\www\\uniebco\\content\\themes\\default\\templates\\_no_data.tpl',
      1 => 1672401335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_63aed4d9dffcf3_72035577 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no data -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"96px",'height'=>"96px"), 0, false);
?>
  <div class="text-md">
    <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold;"><?php echo __("No data to show");?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
