<?php
/* Smarty version 4.2.0, created on 2023-03-06 18:34:11
  from 'E:\httpdocs\www\uniebco\comunidade\content\themes\default\templates\__feeds_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64063223e34683_81328651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12aa7f93fa3a7407c1aae3fd7bc696adef966c0e' => 
    array (
      0 => 'E:\\httpdocs\\www\\uniebco\\comunidade\\content\\themes\\default\\templates\\__feeds_page.tpl',
      1 => 1678120605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64063223e34683_81328651 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_tpl']->value == "box") {?>
  <li class="col-md-6 col-lg-3">
    <div class="ui-box">
      <div class="img">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
          <img alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" />
        </a>
      </div>
      <div class="mt10">
        <span class="js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
" data-type="page">
          <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</a>
        </span>
        <?php if ($_smarty_tpl->tpl_vars['_page']->value['page_verified']) {?>
          <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
        <?php }?>
        <div><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_likes'];?>
 <?php echo __("Likes");?>
</div>
      </div>
      <div class="mt10">
        <?php if ($_smarty_tpl->tpl_vars['_page']->value['i_like']) {?>
          <button type="button" class="btn btn-sm btn-primary js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
            <i class="fa fa-heart mr5"></i><?php echo __("Unlike");?>

          </button>
        <?php } else { ?>
          <button type="button" class="btn btn-sm btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
            <i class="fa fa-heart mr5"></i><?php echo __("Like");?>

          </button>
        <?php }?>
      </div>
    </div>
  </li>
<?php } elseif ($_smarty_tpl->tpl_vars['_tpl']->value == "list") {?>
  <li class="feeds-item">
    <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
      <a class="data-avatar" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
">
      </a>
      <div class="data-content">
        <div class="float-right">
          <?php if ($_smarty_tpl->tpl_vars['_page']->value['i_like']) {?>
            <button type="button" class="btn btn-sm btn-primary js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
              <i class="fa fa-heart mr5"></i><?php echo __("Unlike");?>

            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
              <i class="fa fa-heart mr5"></i><?php echo __("Like");?>

            </button>
          <?php }?>
        </div>
        <div>
          <span class="name js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
" data-type="page">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</a>
          </span>
          <?php if ($_smarty_tpl->tpl_vars['_page']->value['page_verified']) {?>
            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
          <?php }?>
          <div><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_likes'];?>
 <?php echo __("Likes");?>
</div>
        </div>
      </div>
    </div>
  </li>
<?php }
}
}
