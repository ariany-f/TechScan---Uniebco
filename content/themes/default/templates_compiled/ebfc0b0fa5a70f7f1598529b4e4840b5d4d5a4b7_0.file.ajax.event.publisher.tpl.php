<?php
/* Smarty version 4.2.0, created on 2024-09-12 18:27:00
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\ajax.event.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66e3327419f200_96898573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebfc0b0fa5a70f7f1598529b4e4840b5d4d5a4b7' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\ajax.event.publisher.tpl',
      1 => 1678120605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_66e3327419f200_96898573 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-calendar-plus mr10" style="color: #f79f58;"></i><?php echo __("Create New Event");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=event&do=create">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-control-label" for="title"><?php echo __("Name Your Event");?>
</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
      <label class="form-control-label" for="location"><?php echo __("Location");?>
</label>
      <input type="text" class="form-control js_geocomplete" name="location" id="location">
    </div>
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Start Date");?>
</label>
      <div class="input-group date js_datetimepicker" id="start_date" data-target-input="nearest">
        <input type='text' class="form-control datetimepicker-input" data-target="#start_date" name="start_date" />
        <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="form-control-label"><?php echo __("End Date");?>
</label>
      <div class="input-group date js_datetimepicker" id="end_date" data-target-input="nearest">
        <input type='text' class="form-control datetimepicker-input" data-target="#end_date" name="end_date" />
        <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="privacy"><?php echo __("Select Privacy");?>
</label>
      <select class="form-control selectpicker" name="privacy">
        <option value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Event");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Anyone can see the event, its users and posts");?>
.</span>
                </div></div>"><?php echo __("Public Event");?>
</option>
        <option value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Event");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only event users can see posts");?>
.</span>
                </div></div>"><?php echo __("Closed Event");?>
</option>
        <option value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Event");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only invited users and event users can find the event");?>
.</span>
                </div></div>"><?php echo __("Secret Event");?>
</option>
      </select>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="category"><?php echo __("Category");?>
</label>
      <select class="form-control" name="category" id="category">
        <option><?php echo __("Select Category");?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
          <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="description"><?php echo __("About");?>
</label>
      <textarea class="form-control" name="description"></textarea>
    </div>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- error -->
    <div class="alert alert-danger mb0 mt10 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
    <button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button>
  </div>
</form><?php }
}
