<?php
/* Smarty version 4.2.0, created on 2023-01-06 20:06:29
  from '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/admin.currencies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63b87f4532e0c6_22197584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2642aa366976bf49f15a8dd69b22ba887132e5e2' => 
    array (
      0 => '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/admin.currencies.tpl',
      1 => 1673035464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b87f4532e0c6_22197584 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/currencies/add" class="btn btn-sm btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo __("Add New Currency");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/currencies" class="btn btn-sm btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-money-bill-alt mr10"></i><?php echo __("Currencies");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Currency");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Name");?>
</th>
              <th><?php echo __("Code");?>
</th>
              <th><?php echo __("Symbol");?>
</th>
              <th><?php echo __("Dir");?>
</th>
              <th><?php echo __("Default");?>
</th>
              <th><?php echo __("Enabled");?>
</th>
              <th><?php echo __("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['currency_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['symbol'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dir'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['default']) {?>
                    <span class="badge badge-pill badge-lg badge-success"><?php echo __("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge badge-pill badge-lg badge-danger"><?php echo __("No");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['enabled']) {?>
                    <span class="badge badge-pill badge-lg badge-success"><?php echo __("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge badge-pill badge-lg badge-danger"><?php echo __("No");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/currencies/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['currency_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="currency" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['currency_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/currencies.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['currency_id'];?>
">
      <div class="card-body">
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="enabled">
              <input type="checkbox" name="enabled" id="enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Make it enbaled so the user can select it");?>

            </span>
          </div>
        </div>
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Currency Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
            <span class="form-text">
              <?php echo __("Currency name, For Example: U.S. Dollar, Euro or Pound Sterling");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Currency Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="code" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
">
            <span class="form-text">
              <?php echo __("Currency code, For Example: USD, EUR or GBP");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Currency Symbol");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="symbol" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['symbol'];?>
">
            <span class="form-text">
              <?php echo __("Currency symbol, For Example: "."$".", € or £");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Currency Symbol Direction");?>

          </label>
          <div class="col-md-9">
            <select class="form-control" name="dir">
              <option value="left" <?php if ($_smarty_tpl->tpl_vars['data']->value["dir"] == "left") {?>selected<?php }?>><?php echo __("Left");?>
</option>
              <option value="right" <?php if ($_smarty_tpl->tpl_vars['data']->value["dir"] == "right") {?>selected<?php }?>><?php echo __("Right");?>
</option>
            </select>
            <div class="form-text">
              <?php echo __("Where to add the currency symbol relative to the money value");?>

            </div>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

    <form class="js_ajax-forms" data-url="admin/currencies.php?do=add">
      <div class="card-body">
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="enabled">
              <input type="checkbox" name="enabled" id="enabled">
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Make it enbaled so the user can select it");?>

            </span>
          </div>
        </div>
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Currency Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name">
            <span class="form-text">
              <?php echo __("Currency name, For Example: U.S. Dollar, Euro or Pound Sterling");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Currency Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="code">
            <span class="form-text">
              <?php echo __("Currency code, For Example: USD, EUR or GBP");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Currency Symbol");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="symbol">
            <span class="form-text">
              <?php echo __("Currency symbol, For Example: "."$".", € or £");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Currency Symbol Direction");?>

          </label>
          <div class="col-md-9">
            <select class="form-control" name="dir">
              <option value="left"><?php echo __("Left");?>
</option>
              <option value="right"><?php echo __("Right");?>
</option>
            </select>
            <div class="form-text">
              <?php echo __("Where to add the currency symbol relative to the money value");?>

            </div>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
      </div>
    </form>

  <?php }?>
</div><?php }
}
