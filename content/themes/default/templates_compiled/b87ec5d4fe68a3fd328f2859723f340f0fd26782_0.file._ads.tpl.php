<?php
/* Smarty version 4.2.0, created on 2023-02-01 22:25:18
  from '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/_ads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63dae6ceee9ea3_78071921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b87ec5d4fe68a3fd328f2859723f340f0fd26782' => 
    array (
      0 => '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/_ads.tpl',
      1 => 1673035460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dae6ceee9ea3_78071921 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_master']->value) {?>

  <?php if ($_smarty_tpl->tpl_vars['_ads']->value && !in_array($_smarty_tpl->tpl_vars['page']->value,array("static","settings","admin"))) {?>
    <div class="container mtb20">
      <!-- ads -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_ads']->value, 'ads_unit');
$_smarty_tpl->tpl_vars['ads_unit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ads_unit']->value) {
$_smarty_tpl->tpl_vars['ads_unit']->do_else = false;
?>
        <div class="card">
          <div class="card-header bg-transparent">
            <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo __("Sponsored");?>

          </div>
          <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['ads_unit']->value['code'];?>
</div>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <!-- ads -->
    </div>
  <?php }?>

<?php } else { ?>

  <?php if ($_smarty_tpl->tpl_vars['ads']->value) {?>
    <!-- ads -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads']->value, 'ads_unit');
$_smarty_tpl->tpl_vars['ads_unit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ads_unit']->value) {
$_smarty_tpl->tpl_vars['ads_unit']->do_else = false;
?>
      <div class="card">
        <div class="card-header bg-transparent">
          <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo __("Sponsored");?>

        </div>
        <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['ads_unit']->value['code'];?>
</div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!-- ads -->
  <?php }?>

<?php }
}
}
