<?php
/* Smarty version 4.2.0, created on 2023-03-27 15:50:07
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\ajax.people.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6421bb2f9e56c6_87867784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5820120132929323c5f49dd455f73fbe8ab82131' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\ajax.people.form.tpl',
      1 => 1678128926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_6421bb2f9e56c6_87867784 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-flag mr10" style="color: #2196f3;"></i><?php echo __("Create New User");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="users/create.php?do=create">
  <div class="modal-body">
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
        </div>
        <input name="first_name" type="text" class="form-control" placeholder='<?php echo __("First name");?>
' required>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
        </div>
        <input name="last_name" type="text" class="form-control" placeholder='<?php echo __("Last name");?>
' required>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-globe fa-fw"></i></span>
        </div>
        <input name="username" type="text" class="form-control" placeholder='<?php echo __("Username");?>
' required>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
        </div>
        <input name="email" type="email" class="form-control" placeholder='<?php echo __("Email");?>
' required>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
            </div>
            <input name="password" type="password" class="form-control" placeholder='<?php echo __("Password");?>
' required>
        </div>
        </div>
    </div>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
    <?php }?>
    <!-- custom fields -->
    <div class="js_hidden-section x-hidden">
        <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-venus-mars fa-fw"></i></span>
            </div>
            <select name="gender" id="gender" class="form-control" required>
            <option value="none"><?php echo __("Select Sex");?>
:</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['gender']->value['gender_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['gender']->value['gender_name']);?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['age_restriction']) {?>
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Birthdate");?>
</label>
            <div class="form-row">
            <div class="col">
                <select class="form-control" name="birth_month">
                <option value="none"><?php echo __("Month");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>
                </select>
            </div>
            <div class="col">
                <select class="form-control" name="birth_day">
                <option value="none"><?php echo __("Day");?>
</option>
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                <?php }
}
?>
                </select>
            </div>
            <div class="col">
                <select class="form-control" name="birth_year">
                <option value="none"><?php echo __("Year");?>
</option>
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2017+1 - (1905) : 1905-(2017)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                <?php }
}
?>
                </select>
            </div>
            </div>
        </div>
        <?php }?>
                <input type="text" name="field1" style="display:none !important" tabindex="-1" autocomplete="off">
                <!-- newsletter consent -->
        <?php if ($_smarty_tpl->tpl_vars['system']->value['newsletter_consent']) {?>
        <div class="custom-control custom-checkbox mb10">
            <input type="checkbox" class="custom-control-input" name="newsletter_agree" id="newsletter_agree">
            <label class="custom-control-label" for="newsletter_agree">
            <?php echo __("I expressly agree to receive the newsletter");?>

            </label>
        </div>
        <?php }?>
        <!-- newsletter consent -->
        <!-- privacy & terms consent -->
        <div class="custom-control custom-checkbox mb10">
        <input type="checkbox" class="custom-control-input" name="privacy_agree" id="privacy_agree">
        <label class="custom-control-label" for="privacy_agree">
            <?php echo __("By creating your account, you agree to our");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/static/terms" target="_blank"><?php echo __("Terms");?>
</a> & <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/static/privacy" target="_blank"><?php echo __("Privacy Policy");?>
</a>
        </label>
        </div>
        <!-- privacy & terms consent -->
    </div>
    <!-- error -->
    <div class="alert alert-danger mb0 x-hidden"></div>
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
