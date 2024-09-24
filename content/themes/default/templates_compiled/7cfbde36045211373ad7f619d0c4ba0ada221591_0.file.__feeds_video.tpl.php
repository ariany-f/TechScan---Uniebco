<?php
/* Smarty version 4.2.0, created on 2024-09-06 02:27:56
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\__feeds_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66da68ac8bc6e6_32993626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cfbde36045211373ad7f619d0c4ba0ada221591' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\__feeds_video.tpl',
      1 => 1678128926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66da68ac8bc6e6_32993626 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-6 col-md-4 col-lg-3">
  <a class="pg_video" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/posts/<?php echo $_smarty_tpl->tpl_vars['video']->value['post_id'];?>
">
    <video>
      <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source'];?>
" type="video/mp4">
      <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source'];?>
" type="video/webm">
    </video>
    <div class="play-button"><i class="fa fa-play fa-2x"></i></div>
  </a>
</div><?php }
}
