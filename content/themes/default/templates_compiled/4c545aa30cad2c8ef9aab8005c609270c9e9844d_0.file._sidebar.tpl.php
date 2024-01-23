<?php
/* Smarty version 4.2.0, created on 2023-07-19 13:26:14
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64b7e4761fd6f6_48529747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c545aa30cad2c8ef9aab8005c609270c9e9844d' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\_sidebar.tpl',
      1 => 1689773126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 28,
  ),
),false)) {
function content_64b7e4761fd6f6_48529747 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card main-side-nav-card">
  <div class="card-body with-nav">
    <ul class="main-side-nav">

      <!-- basic -->
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
            <img class="rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="">
            <span><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</span>
          </a>
        </li>

        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/messages">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
            <?php echo __("Messages");?>

          </a>
        </li>
      <?php }?>
      <!-- basic -->

      <!-- favorites -->

      <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>class="active" <?php }?>>
        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in || (!$_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled'] && !$_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled'])) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("News Feed");?>

          </a>
        <?php } else { ?>
          <a href="#newsfeed" data-toggle="collapse" <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>aria-expanded="true" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("News Feed");?>

          </a>
          <div class='collapse <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>show<?php }?>' id="newsfeed">
            <ul>
              <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_recent",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Recent Updates");?>

                </a>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "popular") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/popular">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"popularity",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Popular Posts");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "discover") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/discover">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_discover",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Discover Posts");?>

                  </a>
                </li>
              <?php }?>
            </ul>
          </div>
        <?php }?>
      </li>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "articles") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/articles">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"articles",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("My Articles");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "products") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/products">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("My Products");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "funding_requests") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/funding_requests">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"money-bag",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("My Funding");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['memories_enabled']) {?>
          <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "saved") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/saved">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"saved",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Saved Posts");?>

            </a>
          </li>
        <?php }?>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['memories_enabled']) {?>
          <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "memories") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/memories">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"memories",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Memories");?>

            </a>
          </li>
        <?php }?>
      <?php }?>
      <!-- favorites -->

      <!-- advertising -->
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['can_create_ads'] || $_smarty_tpl->tpl_vars['system']->value['wallet_enabled'] || $_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>

          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_ads']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "ads") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/ads">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Ads Manager");?>

              </a>
            </li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_enabled']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "wallet") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/wallet">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Wallet");?>

              </a>
            </li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "boosted_posts") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/boosted/posts">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"boosted_posts",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Boosted Posts");?>

              </a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
              <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "boosted_pages") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/boosted/pages">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"boosted_pages",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Boosted Pages");?>

                </a>
              </li>
            <?php }?>
          <?php }?>
        <?php }?>
      <?php }?>
      <!-- advertising -->

      <!-- explore -->

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "people") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/people">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"find_people",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("People");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "pages") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/pages">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Pages");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['communicates_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "communicates") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/communicates">
            <i class="fa fa-bullhorn mr10" width="24px" height="24px"></i>
            <?php echo __("communicates");?>

          </a>
        </li>
      <?php }?>


      <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "groups") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/groups">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Groups");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "events") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/events">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Events");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "blogs") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/blogs">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Blogs");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/market">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Marketplace");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "funding") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/funding">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Funding");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['offers_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "offers") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/offers">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Offers");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['jobs_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "jobs") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/jobs">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Jobs");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "forums") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/forums">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Forums");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['movies_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "movies") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/movies">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Movies");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "games") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/games">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Games");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled'] || $_smarty_tpl->tpl_vars['system']->value['developers_share_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "developers") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/developers<?php if (!$_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled']) {?>/share<?php }?>">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"developers",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Developers");?>

          </a>
        </li>
      <?php }?>
      <!-- explore -->
    </ul>
  </div>
</div><?php }
}
