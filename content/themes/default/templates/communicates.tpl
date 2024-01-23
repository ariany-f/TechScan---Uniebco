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

                <!-- publisher -->
                {include file='_communicates_publisher.tpl' _handle="me" _privacy=true}
                <!-- publisher -->

              {/if}

              <!-- posts -->
              {include file='_posts.tpl' _get="newsfeed" _filter="communicates" _title=__("Communicates")}
              <!-- posts -->
             
            {elseif $view == "boosted_pages"}
             

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