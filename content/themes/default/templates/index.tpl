{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
{if !$user->_logged_in && !$system['newsfeed_public']}

  <div class="container pt30">
    <div class="index-intro">
      <p>
        {__($system['system_description'])}
      </p>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-7">
        <img style="width: 100%; max-height: 500px;" class="d-none d-md-block">
      </div>

      <div class="col-md-6 col-lg-5">
        {include file='_sign_form.tpl' do="in"}
        <div class="text-center">
          {if $system['play_store_badge_enabled']}
            <a href="{$system['play_store_link']}" target="_blank">
              {include file='__svg_icons.tpl' icon="playstore_badge" height="58px"}
            </a>
          {/if}
          {if $system['appgallery_badge_enabled']}
            <a href="{$system['appgallery_store_link']}" target="_blank">
              {include file='__svg_icons.tpl' icon="appgallery_badge" height="40px" class="mr10"}
            </a>
          {/if}
          {if $system['app_store_badge_enabled']}
            <a href="{$system['app_store_link']}" target="_blank">
              {include file='__svg_icons.tpl' icon="appstore_badge" height="40px"}
            </a>
          {/if}
        </div>
      </div>
    </div>
  </div>

  {if $user->_logged_in}
    {include file='_footer.links.tpl'}
  {/if}
{else}

  <div class="container offcanvas">
    <div class="row">

      <!-- side panel -->
      <div class="col-md-4 col-lg-2 offcanvas-sidebar js_sticky-sidebar">
        {include file='_sidebar.tpl'}
        <!-- mini footer -->
        <!--div class="mini-footer mt10 plr10">
          <div class="copyrights dropdown">
            <a href="#" class="language-dropdown" data-toggle="dropdown">
              <img width="16" height="16" class="mr10" src="{$system['language']['flag']}">
              <span>{$system['language']['title']}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="js_scroller">
                {foreach $system['languages'] as $language}
                  <a class="dropdown-item" href="?lang={$language['code']}">
                    <img width="16" height="16" class="mr10" src="{$language['flag']}">{$language['title']}
                  </a>
                {/foreach}
              </div>
            </div>
          </div>
          <ul class="links">
            {if $static_pages}
              {foreach $static_pages as $static_page}
                <li>
                  <a href="{$system['system_url']}/comunidade/static/{$static_page['page_url']}">
                    {__($static_page['page_title'])}
                  </a>
                </li>
              {/foreach}
            {/if}
            {if $system['contact_enabled']}
              <li>
                <a href="{$system['system_url']}/comunidade/contacts">
                  {__("Contact Us")}
                </a>
              </li>
            {/if}
            {if $system['directory_enabled']}
              <li>
                <a href="{$system['system_url']}/comunidade/directory">
                  {__("Directory")}
                </a>
              </li>
            {/if}
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
            {include file='_announcements.tpl'}
            <!-- announcments -->

            {if $view == ""}

              {if $user->_logged_in}
                <!-- stories -->
                {if $user->_data['can_add_stories'] || ($system['stories_enabled'] && !empty($stories['array']))}
                  <div class="card">
                    <div class="card-header bg-transparent border-bottom-0">
                      <strong class="text-muted">{__("Stories")}</strong>
                      {if $has_story}
                        <div class="float-right">
                          <button data-toggle="tooltip" data-placement="top" title='{__("Delete Your Story")}' class="btn btn-sm btn-icon btn-rounded btn-danger js_story-deleter">
                            <i class="fa fa-trash-alt"></i>
                          </button>
                        </div>
                      {else}
                        <div class="d-none d-sm-block text-muted pointer float-right">
                          <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title='{__("Stories are photos and videos that only last 24 hours")}'></i>
                        </div>
                      {/if}

                    </div>
                    <div class="card-body pt5 stories-wrapper">
                      <div id="stories" data-json='{htmlspecialchars($stories["json"], ENT_QUOTES, 'UTF-8')}'>
                        {if $user->_data['can_add_stories']}
                          <div class="add-story" data-toggle="modal" data-url="posts/story.php?do=create">
                            <div class="img" style="background-image:url({$user->_data['user_picture']});">
                            </div>
                            <div class="add">
                              <i class="fa fa-plus-circle"></i>
                            </div>
                          </div>
                        {/if}
                      </div>
                    </div>
                  </div>
                {/if}
                <!-- stories -->

                <!-- publisher -->
                {include file='_publisher.tpl' _handle="me" _privacy=true}
                <!-- publisher -->

                <!-- boosted post -->
                {if $boosted_post}
                  {include file='_boosted_post.tpl' post=$boosted_post}
                {/if}
                <!-- boosted post -->
              {/if}

              <!-- posts -->
              {include file='_posts.tpl' _get="newsfeed"}
              <!-- posts -->

            {elseif $view == "popular"}
              <!-- popular posts -->
              {include file='_posts.tpl' _get="popular" _title=__("Popular Posts")}
              <!-- popular posts -->

            {elseif $view == "discover"}
              <!-- discover posts -->
              {include file='_posts.tpl' _get="discover" _title=__("Discover Posts")}
              <!-- discover posts -->

            {elseif $view == "saved"}
              <!-- saved posts -->
              {include file='_posts.tpl' _get="saved" _title=__("Saved Posts")}
              <!-- saved posts -->

            {elseif $view == "memories"}
              <!-- page header -->
              <div class="page-header mini rounded mb10">
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div class="inner">
                  <h2>{__("Memories")}</h2>
                  <p class="text-lg">{__("Enjoy looking back on your memories")}</p>
                </div>
              </div>
              <!-- page header -->

              <!-- memories posts -->
              {include file='_posts.tpl' _get="memories" _title=__("ON THIS DAY") _filter="all"}
              <!-- memories posts -->

            {elseif $view == "articles"}
              <!-- articles posts -->
              {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="article" _title=__("My Articles")}
              <!-- articles posts -->

            {elseif $view == "products"}
              <!-- products posts -->
              {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="product" _title=__("My Products")}
              <!-- products posts -->

            {elseif $view == "funding_requests"}
              <!-- funding posts -->
              {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="funding" _title=__("My Funding Requests")}
              <!-- funding posts -->

            {elseif $view == "boosted_posts"}
              {if $user->_is_admin || $user->_data['user_subscribed']}
                <!-- boosted posts -->
                {include file='_posts.tpl' _get="boosted" _title=__("My Boosted Posts")}
                <!-- boosted posts -->
              {else}
                <!-- upgrade -->
                <div class="alert alert-warning">
                  <div class="icon">
                    <i class="fa fa-id-card fa-2x"></i>
                  </div>
                  <div class="text">
                    <strong>{__("Membership")}</strong><br>
                    {__("Choose the Plan That's Right for You")}, {__("Check the package from")} <a href="{$system['system_url']}/comunidade/packages">{__("Here")}</a>
                  </div>
                </div>
                <div class="text-center">
                  <a href="{$system['system_url']}/comunidade/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i>{__("Upgrade to Pro")}</a>
                </div>
                <!-- upgrade -->
              {/if}

            {elseif $view == "boosted_pages"}
              {if $user->_is_admin || $user->_data['user_subscribed']}
                <div class="card">
                  <div class="card-header">
                    <strong>{__("My Boosted Pages")}</strong>
                  </div>
                  <div class="card-body">
                    {if $boosted_pages}
                      <ul>
                        {foreach $boosted_pages as $_page}
                          {include file='__feeds_page.tpl' _tpl="list"}
                        {/foreach}
                      </ul>

                      {if count($boosted_pages) >= $system['max_results_even']}
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="boosted_pages">
                          <span>{__("See More")}</span>
                          <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                      {/if}
                    {else}
                      {include file='_no_data.tpl'}
                    {/if}
                  </div>
                </div>
              {else}
                <!-- upgrade -->
                <div class="alert alert-warning">
                  <div class="icon">
                    <i class="fa fa-id-card fa-2x"></i>
                  </div>
                  <div class="text">
                    <strong>{__("Membership")}</strong><br>
                    {__("Choose the Plan That's Right for You")}, {__("Check the package from")} <a href="{$system['system_url']}/comunidade/packages">{__("Here")}</a>
                  </div>
                </div>
                <div class="text-center">
                  <a href="{$system['system_url']}/comunidade/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i>{__("Upgrade to Pro")}</a>
                </div>
                <!-- upgrade -->
              {/if}

            {/if}
          </div>
          <!-- center panel -->
        </div>
      </div>
      <!-- content panel -->

    </div>
  </div>

{/if}
<!-- page content -->

{include file='_footer.tpl'}