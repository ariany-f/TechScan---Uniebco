<?php
/* Smarty version 4.2.0, created on 2023-08-01 03:53:08
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\__feeds_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64c881a4ae2c72_88981249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460310a546915c7297dc5df3704d675a589223be' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\__feeds_photo.tpl',
      1 => 1690861972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c881a4ae2c72_88981249 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>col-4<?php } else { ?>col-6 col-md-4 col-lg-2<?php }?> <?php if ($_smarty_tpl->tpl_vars['photo']->value['blur']) {?>x-blured<?php }?>">
  <a class="pg_photo <?php if (!$_smarty_tpl->tpl_vars['_small']->value) {?>large<?php }?> js_lightbox" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" data-context="<?php echo $_smarty_tpl->tpl_vars['_context']->value;?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
);">
    <?php if (!$_smarty_tpl->tpl_vars['_small']->value && ($_smarty_tpl->tpl_vars['_manage']->value || $_smarty_tpl->tpl_vars['photo']->value['manage'])) {?>
      <div class="pg_photo-btn">
        <button type="button" class="close js_delete-photo" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
'>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php }?>
  </a>
</div><?php }
}
