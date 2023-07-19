<div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-flag mr10" style="color: #2196f3;"></i>{__("Create New User")}
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
        <input name="first_name" type="text" class="form-control" placeholder='{__("First name")}' required>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
        </div>
        <input name="last_name" type="text" class="form-control" placeholder='{__("Last name")}' required>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-globe fa-fw"></i></span>
        </div>
        <input name="username" type="text" class="form-control" placeholder='{__("Username")}' required>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
        </div>
        <input name="email" type="email" class="form-control" placeholder='{__("Email")}' required>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
            </div>
            <input name="password" type="password" class="form-control" placeholder='{__("Password")}' required>
        </div>
        </div>
    </div>
    <!-- custom fields -->
    {if $custom_fields}
        {include file='__custom_fields.tpl' _custom_fields=$custom_fields _registration=true}
    {/if}
    <!-- custom fields -->
    <div class="js_hidden-section x-hidden">
        <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-venus-mars fa-fw"></i></span>
            </div>
            <select name="gender" id="gender" class="form-control" required>
            <option value="none">{__("Select Sex")}:</option>
            {foreach $genders as $gender}
                <option value="{$gender['gender_id']}">{__($gender['gender_name'])}</option>
            {/foreach}
            </select>
        </div>
        </div>
        {if $system['age_restriction']}
        <div class="form-group">
            <label class="form-control-label">{__("Birthdate")}</label>
            <div class="form-row">
            <div class="col">
                <select class="form-control" name="birth_month">
                <option value="none">{__("Month")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '1'}selected{/if} value="1">{__("Jan")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '2'}selected{/if} value="2">{__("Feb")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '3'}selected{/if} value="3">{__("Mar")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '4'}selected{/if} value="4">{__("Apr")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '5'}selected{/if} value="5">{__("May")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '6'}selected{/if} value="6">{__("Jun")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '7'}selected{/if} value="7">{__("Jul")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '8'}selected{/if} value="8">{__("Aug")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '9'}selected{/if} value="9">{__("Sep")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '10'}selected{/if} value="10">{__("Oct")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '11'}selected{/if} value="11">{__("Nov")}</option>
                <option {if $user->_data['user_birthdate_parsed']['month'] == '12'}selected{/if} value="12">{__("Dec")}</option>
                </select>
            </div>
            <div class="col">
                <select class="form-control" name="birth_day">
                <option value="none">{__("Day")}</option>
                {for $i=1 to 31}
                    <option {if $user->_data['user_birthdate_parsed']['day'] == $i}selected{/if} value="{$i}">{$i}</option>
                {/for}
                </select>
            </div>
            <div class="col">
                <select class="form-control" name="birth_year">
                <option value="none">{__("Year")}</option>
                {for $i=1905 to 2017}
                    <option {if $user->_data['user_birthdate_parsed']['year'] == $i}selected{/if} value="{$i}">{$i}</option>
                {/for}
                </select>
            </div>
            </div>
        </div>
        {/if}
        {* Honeypot *}
        <input type="text" name="field1" style="display:none !important" tabindex="-1" autocomplete="off">
        {* Honeypot *}
        <!-- newsletter consent -->
        {if $system['newsletter_consent']}
        <div class="custom-control custom-checkbox mb10">
            <input type="checkbox" class="custom-control-input" name="newsletter_agree" id="newsletter_agree">
            <label class="custom-control-label" for="newsletter_agree">
            {__("I expressly agree to receive the newsletter")}
            </label>
        </div>
        {/if}
        <!-- newsletter consent -->
        <!-- privacy & terms consent -->
        <div class="custom-control custom-checkbox mb10">
        <input type="checkbox" class="custom-control-input" name="privacy_agree" id="privacy_agree">
        <label class="custom-control-label" for="privacy_agree">
            {__("By creating your account, you agree to our")} <a href="{$system['system_url']}/comunidade/static/terms" target="_blank">{__("Terms")}</a> & <a href="{$system['system_url']}/comunidade/static/privacy" target="_blank">{__("Privacy Policy")}</a>
        </label>
        </div>
        <!-- privacy & terms consent -->
    </div>
    <!-- error -->
    <div class="alert alert-danger mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal">{__("Cancel")}</button>
    <button type="submit" class="btn btn-primary">{__("Create")}</button>
  </div>
</form>