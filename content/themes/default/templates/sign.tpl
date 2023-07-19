{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container mt30">
  <div class="row">
    <div class="col-md-6 col-lg-5 mx-md-auto">
      <!-- sign in/up form -->
      {include file='_sign_form.tpl'}
      <!-- sign in/up form -->
    </div>
  </div>
</div>
<!-- page content -->

{if $user->_logged_in}
  {include file='_footer.tpl'}
{else}
    {include file='_js_files.tpl'}
{/if}