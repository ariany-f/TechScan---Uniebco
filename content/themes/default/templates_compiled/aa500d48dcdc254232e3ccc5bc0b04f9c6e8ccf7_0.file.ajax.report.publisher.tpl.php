<?php
/* Smarty version 4.2.0, created on 2023-07-08 09:37:58
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\ajax.report.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64a92e76dfc499_86504586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa500d48dcdc254232e3ccc5bc0b04f9c6e8ccf7' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\ajax.report.publisher.tpl',
      1 => 1678120606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 1,
  ),
),false)) {
function content_64a92e76dfc499_86504586 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-flag mr5"></i><?php echo __("Report");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="data/report.php?do=submit&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&handle=<?php echo $_smarty_tpl->tpl_vars['handle']->value;?>
">
  <div class="modal-body">

    <div class="form-group">
      <label class="form-control-label"><?php echo __("Why you want to report this?");?>
</label>
      <select class="form-control" name="category" id="category">
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

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label class="form-control-label"><?php echo __("Reason");?>
</label>
          <textarea name="reason" rows="3" dir="auto" class="form-control"></textarea>
        </div>
      </div>
    </div>

    <!-- error -->
    <div class="alert alert-danger mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><?php echo __("Report");?>
</button>
  </div>
</form><?php }
}
