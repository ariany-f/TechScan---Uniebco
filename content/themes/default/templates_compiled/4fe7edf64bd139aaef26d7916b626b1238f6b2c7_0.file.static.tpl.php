<?php
/* Smarty version 4.2.0, created on 2023-01-13 18:30:38
  from '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/static.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63c1a34e923ea7_86427067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fe7edf64bd139aaef26d7916b626b1238f6b2c7' => 
    array (
      0 => '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/static.tpl',
      1 => 1673035474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_63c1a34e923ea7_86427067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __($_smarty_tpl->tpl_vars['static']->value['page_title']);?>
</h2>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container offcanvas" style="margin-top: -25px;">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none offcanvas-sidebar mt20">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 offcanvas-mainbar">
      <div class="card shadow">
        <div class="card-body page-content text-xlg text-with-list">
          <?php echo $_smarty_tpl->tpl_vars['static']->value['page_text'];?>

        </div>
      </div>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
