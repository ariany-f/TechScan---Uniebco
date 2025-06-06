<?php
/* Smarty version 4.2.0, created on 2023-01-06 20:06:49
  from '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/__feeds_post.comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63b87f5949e7d6_13075370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07e851d0bcd97337d259993171abab3efb8fb7cb' => 
    array (
      0 => '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/__feeds_post.comments.tpl',
      1 => 1673035459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.form.tpl' => 2,
    'file:__feeds_comment.tpl' => 2,
  ),
),false)) {
function content_63b87f5949e7d6_13075370 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="post-comments">
  <?php if ($_smarty_tpl->tpl_vars['_is_photo']->value) {?>

    <!-- sort comments -->
    <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] > 0) {?>
      <div class="comments-filter">
        <div class="btn-group btn-group-sm js_comments-filter" data-value="photo_comments">
          <button type="button" class="btn dropdown-toggle ptb0 plr0" data-toggle="dropdown" data-display="static">
            <span class="btn-group-text"><?php echo __("Most Recent");?>
</span>
          </button>
          <div class="dropdown-menu dropdown-menu-left">
            <div class="dropdown-item pointer" data-value="photo_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
"><?php echo __("Most Recent");?>
</div>
            <div class="dropdown-item pointer" data-value="photo_comments_top" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
"><?php echo __("Top Comments");?>
</div>
            <div class="dropdown-item pointer" data-value="photo_comments_all" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
"><?php echo __("All Comments");?>
</div>
          </div>
        </div>
      </div>
    <?php }?>
    <!-- sort comments -->

    <!-- post comment -->
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'photo','_id'=>$_smarty_tpl->tpl_vars['photo']->value['photo_id']), 0, false);
?>
    <!-- post comment -->

    <!-- comments loader -->
    <div class="text-center x-hidden js_comments-filter-loader">
      <div class="loader loader_large"></div>
    </div>
    <!-- comments loader -->

    <!-- comments -->
    <ul class="js_comments <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] > 0) {?>pt10<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photo']->value['photo_comments'], 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
          <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
    </ul>
    <!-- comments -->

    <!-- previous comments -->
    <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
      <div class="pb10 text-center js_see-more" data-get="photo_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-remove="true" data-target-stream=".js_comments">
        <span class="text-link">
          <i class="fa fa-comment"></i>
          <?php echo __("View previous comments");?>

        </span>
        <div class="loader loader_small x-hidden"></div>
      </div>
    <?php }?>
    <!-- previous comments -->

  <?php } else { ?>

    <!-- sort comments -->
    <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] > 0) {?>
      <div class="comments-filter">
        <div class="btn-group btn-group-sm js_comments-filter" data-value="post_comments">
          <button type="button" class="btn dropdown-toggle ptb0 plr0" data-toggle="dropdown" data-display="static">
            <span class="btn-group-text"><?php echo __("Most Recent");?>
</span>
          </button>
          <div class="dropdown-menu dropdown-menu-left">
            <div class="dropdown-item pointer" data-value="post_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
"><?php echo __("Most Recent");?>
</div>
            <div class="dropdown-item pointer" data-value="post_comments_top" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
"><?php echo __("Top Comments");?>
</div>
            <div class="dropdown-item pointer" data-value="post_comments_all" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
"><?php echo __("All Comments");?>
</div>
          </div>
        </div>
      </div>
    <?php }?>
    <!-- sort comments -->

    <!-- post comment -->
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'post','_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id']), 0, true);
?>
    <!-- post comment -->

    <!-- comments loader -->
    <div class="text-center x-hidden js_comments-filter-loader">
      <div class="loader loader_large"></div>
    </div>
    <!-- comments loader -->

    <!-- comments -->
    <ul class="js_comments <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] > 0) {?>pt10<?php }?> <?php if ($_smarty_tpl->tpl_vars['_live_comments']->value) {?>js_live-comments<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['post_comments'], 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
          <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
    </ul>
    <!-- comments -->

    <!-- previous comments -->
    <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
      <div class="ptb10 text-center js_see-more" data-get="post_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" data-remove="true" data-target-stream=".js_comments">
        <span class="text-link">
          <i class="fa fa-comment"></i>
          <?php echo __("View previous comments");?>

        </span>
        <div class="loader loader_small x-hidden"></div>
      </div>
    <?php }?>
    <!-- previous comments -->

  <?php }?>
</div><?php }
}
