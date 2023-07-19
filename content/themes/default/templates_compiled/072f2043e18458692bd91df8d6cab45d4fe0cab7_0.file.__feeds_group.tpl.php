<?php
/* Smarty version 4.2.0, created on 2023-02-08 11:02:14
  from '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/__feeds_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63e381366710b2_89388597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072f2043e18458692bd91df8d6cab45d4fe0cab7' => 
    array (
      0 => '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/__feeds_group.tpl',
      1 => 1673035459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e381366710b2_89388597 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_tpl']->value == "box") {?>
  <li class="col-md-6 col-lg-3">
    <div class="ui-box">
      <div class="img">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
          <img alt="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
" />
        </a>
      </div>
      <div class="mt10">
        <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
</a>
        <div><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_members'];?>
 <?php echo __("Members");?>
</div>
      </div>
      <div class="mt10">
        <?php if ($_smarty_tpl->tpl_vars['_group']->value['i_joined'] == "approved") {?>
          <button type="button" class="btn btn-sm btn-success <?php if (!$_smarty_tpl->tpl_vars['_no_action']->value) {?>btn-delete<?php }?> js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];?>
">
            <i class="fa fa-check mr5"></i><?php echo __("Joined");?>

          </button>
        <?php } elseif ($_smarty_tpl->tpl_vars['_group']->value['i_joined'] == "pending") {?>
          <button type="button" class="btn btn-sm btn-warning js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];?>
">
            <i class="fa fa-clock mr5"></i><?php echo __("Pending");?>

          </button>
        <?php } else { ?>
          <button type="button" class="btn btn-sm btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['_group']->value['group_admin']) {?>public<?php } else {
echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];
}?>">
            <i class="fa fa-user-plus mr5"></i><?php echo __("Join");?>

          </button>
        <?php }?>
      </div>
    </div>
  </li>
<?php } elseif ($_smarty_tpl->tpl_vars['_tpl']->value == "list") {?>
  <li class="feeds-item">
    <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
      <a class="data-avatar" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
">
      </a>
      <div class="data-content">
        <div class="float-right">
          <?php if ($_smarty_tpl->tpl_vars['_group']->value['i_joined'] == "approved") {?>
            <button type="button" class="btn btn-sm btn-success <?php if (!$_smarty_tpl->tpl_vars['_no_action']->value) {?>btn-delete<?php }?> js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];?>
">
              <i class="fa fa-check mr5"></i><?php echo __("Joined");?>

            </button>
          <?php } elseif ($_smarty_tpl->tpl_vars['_group']->value['i_joined'] == "pending") {?>
            <button type="button" class="btn btn-sm btn-warning js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];?>
">
              <i class="fa fa-clock mr5"></i><?php echo __("Pending");?>

            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
" data-privacy="<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['_group']->value['group_admin']) {?>public<?php } else {
echo $_smarty_tpl->tpl_vars['_group']->value['group_privacy'];
}?>">
              <i class="fa fa-user-plus mr5"></i><?php echo __("Join");?>

            </button>
          <?php }?>
        </div>
        <div>
          <span class="name">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
</a>
          </span>
          <div><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_members'];?>
 <?php echo __("Members");?>
</div>
        </div>
      </div>
    </div>
  </li>
<?php }
}
}
