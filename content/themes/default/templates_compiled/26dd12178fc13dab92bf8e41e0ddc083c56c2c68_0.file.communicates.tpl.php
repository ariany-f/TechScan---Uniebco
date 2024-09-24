<?php
/* Smarty version 4.2.0, created on 2024-09-19 16:42:09
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\communicates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66ec546114dac0_11735210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26dd12178fc13dab92bf8e41e0ddc083c56c2c68' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\communicates.tpl',
      1 => 1726764046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:__svg_icons.tpl' => 3,
    'file:_footer.links.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_announcements.tpl' => 1,
    'file:_communicates_publisher.tpl' => 1,
    'file:_posts.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_66ec546114dac0_11735210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && !$_smarty_tpl->tpl_vars['system']->value['newsfeed_public']) {?>

  <div class="container pt30">
    <div class="index-intro">
      <p>
        <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_description']);?>

      </p>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-7">
        <img style="width: 100%; max-height: 500px;" class="d-none d-md-block">
      </div>

      <div class="col-md-6 col-lg-5">
        <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('do'=>"in"), 0, false);
?>
        <div class="text-center">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['play_store_badge_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['play_store_link'];?>
" target="_blank">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"playstore_badge",'height'=>"58px"), 0, false);
?>
            </a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['appgallery_badge_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['appgallery_store_link'];?>
" target="_blank">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appgallery_badge",'height'=>"40px",'class'=>"mr10"), 0, true);
?>
            </a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['app_store_badge_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['app_store_link'];?>
" target="_blank">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appstore_badge",'height'=>"40px"), 0, true);
?>
            </a>
          <?php }?>
        </div>
      </div>
    </div>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
} else { ?>

  <div class="container offcanvas">
    <div class="row">

      <!-- side panel -->
      <div class="col-md-4 col-lg-2 offcanvas-sidebar js_sticky-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- mini footer -->
        <!--div class="mini-footer mt10 plr10">
          <div class="copyrights dropdown">
            <a href="#" class="language-dropdown" data-toggle="dropdown">
              <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['flag'];?>
">
              <span><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="js_scroller">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                  <a class="dropdown-item" href="?lang=<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
">
                    <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['language']->value['flag'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>

                  </a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          </div>
          <ul class="links">
            <?php if ($_smarty_tpl->tpl_vars['static_pages']->value) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page');
$_smarty_tpl->tpl_vars['static_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->do_else = false;
?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
                    <?php echo __($_smarty_tpl->tpl_vars['static_page']->value['page_title']);?>

                  </a>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
              <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/contacts">
                  <?php echo __("Contact Us");?>

                </a>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
              <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/directory">
                  <?php echo __("Directory");?>

                </a>
              </li>
            <?php }?>
          </ul>
        </div-->
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-md-8 col-lg-10 mt20 offcanvas-mainbar">
        <div class="row">
          <!-- center panel -->
          <div class="col-lg-12">

            <!-- announcments -->
            <?php $_smarty_tpl->_subTemplateRender('file:_announcements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- announcments -->

            <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

              <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>               

                <!-- publisher -->
                <?php $_smarty_tpl->_subTemplateRender('file:_communicates_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_privacy'=>true), 0, false);
?>
                <!-- publisher -->

              <?php }?>

              <!-- posts -->
              <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed",'_filter'=>"communicates",'_title'=>__("Communicates")), 0, false);
?>
              <!-- posts -->
             
            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "boosted_pages") {?>
             

            <?php }?>
          </div>
          <!-- center panel -->
        </div>
      </div>
      <!-- content panel -->

    </div>
  </div>

<?php }?>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
