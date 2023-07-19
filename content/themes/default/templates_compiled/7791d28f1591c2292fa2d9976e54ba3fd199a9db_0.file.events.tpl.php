<?php
/* Smarty version 4.2.0, created on 2023-03-30 22:10:43
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642608e3865f46_45356692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7791d28f1591c2292fa2d9976e54ba3fd199a9db' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\events.tpl',
      1 => 1678128926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_642608e3865f46_45356692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-md-4 col-lg-2 offcanvas-sidebar js_sticky-sidebar">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-md-8 col-lg-10 offcanvas-mainbar">

      <!-- tabs -->
      <div class="content-tabs rounded-sm shadow-sm clearfix">
        <ul>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/events"><?php echo __("Discover");?>
</a>
          </li>
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "going") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/events/going"><?php echo __("Going");?>
</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "interested") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/events/interested"><?php echo __("Interested");?>
</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "invited") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/events/invited"><?php echo __("Invited");?>
</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "manage") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/events/manage"><?php echo __("My Events");?>
</a>
            </li>
          <?php }?>
        </ul>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_events']) {?>
          <div class="mt10 float-right">
            <button class="btn btn-sm btn-success d-none d-lg-block" data-toggle="modal" data-url="pages_groups_events/add.php?type=event">
              <i class="fa fa-plus-circle mr5"></i><?php echo __("Create Event");?>

            </button>
            <button class="btn btn-sm btn-icon btn-success d-block d-lg-none" data-toggle="modal" data-url="pages_groups_events/add.php?type=event">
              <i class="fa fa-plus-circle"></i>
            </button>
          </div>
        <?php }?>
      </div>
      <!-- tabs -->

      <!-- content -->
      <div>
        <?php if ($_smarty_tpl->tpl_vars['events']->value) {?>
          <ul class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, '_event');
$_smarty_tpl->tpl_vars['_event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
$_smarty_tpl->tpl_vars['_event']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>'box'), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>

          <!-- see-more -->
          <?php if (count($_smarty_tpl->tpl_vars['events']->value) >= $_smarty_tpl->tpl_vars['system']->value['events_results']) {?>
            <div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
">
              <span><?php echo __("See More");?>
</span>
              <div class="loader loader_small x-hidden"></div>
            </div>
          <?php }?>
          <!-- see-more -->
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
      </div>
      <!-- content -->

    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
