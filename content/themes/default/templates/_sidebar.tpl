<div class="card main-side-nav-card">
  <div class="card-body with-nav">
    <ul class="main-side-nav">

      <!-- basic -->
      {if $user->_logged_in}
        <li>
          <a href="{$system['system_url']}/comunidade/{$user->_data['user_name']}">
            <img class="rounded-circle" src="{$user->_data.user_picture}" alt="">
            <span>{$user->_data['name']}</span>
          </a>
        </li>

        <li>
          <a href="{$system['system_url']}/comunidade/messages">
            {include file='__svg_icons.tpl' icon="chat" class="mr10" width="24px" height="24px"}
            {__("Messages")}
          </a>
        </li>
      {/if}
      <!-- basic -->

      <!-- favorites -->

      <li {if $page == "index" && ($view == "" || $view == "discover" || $view == "popular")}class="active" {/if}>
        {if !$user->_logged_in || (!$system['popular_posts_enabled'] && !$system['discover_posts_enabled'])}
          <a href="{$system['system_url']}">
            {include file='__svg_icons.tpl' icon="newsfeed" class="mr10" width="24px" height="24px"}
            {__("News Feed")}
          </a>
        {else}
          <a href="#newsfeed" data-toggle="collapse" {if $page == "index" && ($view == "discover" || $view == "popular")}aria-expanded="true" {/if}>
            {include file='__svg_icons.tpl' icon="newsfeed" class="mr10" width="24px" height="24px"}
            {__("News Feed")}
          </a>
          <div class='collapse {if $page == "index" && ($view == "discover" || $view == "popular")}show{/if}' id="newsfeed">
            <ul>
              <li {if $page == "index" && $view == ""}class="active" {/if}>
                <a href="{$system['system_url']}">
                  {include file='__svg_icons.tpl' icon="posts_recent" class="mr10" width="24px" height="24px"}
                  {__("Recent Updates")}
                </a>
              </li>
              {if $system['popular_posts_enabled']}
                <li {if $page == "index" && $view == "popular"}class="active" {/if}>
                  <a href="{$system['system_url']}/comunidade/popular">
                    {include file='__svg_icons.tpl' icon="popularity" class="mr10" width="24px" height="24px"}
                    {__("Popular Posts")}
                  </a>
                </li>
              {/if}
              {if $system['discover_posts_enabled']}
                <li {if $page == "index" && $view == "discover"}class="active" {/if}>
                  <a href="{$system['system_url']}/comunidade/discover">
                    {include file='__svg_icons.tpl' icon="posts_discover" class="mr10" width="24px" height="24px"}
                    {__("Discover Posts")}
                  </a>
                </li>
              {/if}
            </ul>
          </div>
        {/if}
      </li>

      {if $user->_data['can_write_articles']}
        <li {if $page == "index" && $view == "articles"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/articles">
            {include file='__svg_icons.tpl' icon="articles" class="mr10" width="24px" height="24px"}
            {__("My Articles")}
          </a>
        </li>
      {/if}

      {if $user->_data['can_sell_products']}
        <li {if $page == "index" && $view == "products"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/products">
            {include file='__svg_icons.tpl' icon="products" class="mr10" width="24px" height="24px"}
            {__("My Products")}
          </a>
        </li>
      {/if}

      {if $user->_data['can_raise_funding']}
        <li {if $page == "index" && $view == "funding_requests"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/funding_requests">
            {include file='__svg_icons.tpl' icon="money-bag" class="mr10" width="24px" height="24px"}
            {__("My Funding")}
          </a>
        </li>
      {/if}

      {if $user->_logged_in}
        {if $system['memories_enabled']}
          <li {if $page == "index" && $view == "saved"}class="active" {/if}>
            <a href="{$system['system_url']}/comunidade/saved">
              {include file='__svg_icons.tpl' icon="saved" class="mr10" width="24px" height="24px"}
              {__("Saved Posts")}
            </a>
          </li>
        {/if}
      {/if}

      {if $user->_logged_in}
        {if $system['memories_enabled']}
          <li {if $page == "index" && $view == "memories"}class="active" {/if}>
            <a href="{$system['system_url']}/comunidade/memories">
              {include file='__svg_icons.tpl' icon="memories" class="mr10" width="24px" height="24px"}
              {__("Memories")}
            </a>
          </li>
        {/if}
      {/if}
      <!-- favorites -->

      <!-- advertising -->
      {if $user->_logged_in}
        {if $system['can_create_ads'] || $system['wallet_enabled'] || $system['packages_enabled']}

          {if $user->_data['can_create_ads']}
            <li {if $page == "ads"}class="active" {/if}>
              <a href="{$system['system_url']}/comunidade/ads">
                {include file='__svg_icons.tpl' icon="ads" class="mr10" width="24px" height="24px"}
                {__("Ads Manager")}
              </a>
            </li>
          {/if}

          {if $system['wallet_enabled']}
            <li {if $page == "wallet"}class="active" {/if}>
              <a href="{$system['system_url']}/comunidade/wallet">
                {include file='__svg_icons.tpl' icon="wallet" class="mr10" width="24px" height="24px"}
                {__("Wallet")}
              </a>
            </li>
          {/if}

          {if $system['packages_enabled']}
            <li {if $page == "index" && $view == "boosted_posts"}class="active" {/if}>
              <a href="{$system['system_url']}/comunidade/boosted/posts">
                {include file='__svg_icons.tpl' icon="boosted_posts" class="mr10" width="24px" height="24px"}
                {__("Boosted Posts")}
              </a>
            </li>

            {if $system['pages_enabled']}
              <li {if $page == "index" && $view == "boosted_pages"}class="active" {/if}>
                <a href="{$system['system_url']}/comunidade/boosted/pages">
                  {include file='__svg_icons.tpl' icon="boosted_pages" class="mr10" width="24px" height="24px"}
                  {__("Boosted Pages")}
                </a>
              </li>
            {/if}
          {/if}
        {/if}
      {/if}
      <!-- advertising -->

      <!-- explore -->

      {if $user->_logged_in}
        <li {if $page == "people"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/people">
            {include file='__svg_icons.tpl' icon="find_people" class="mr10" width="24px" height="24px"}
            {__("People")}
          </a>
        </li>
      {/if}

      {if $system['pages_enabled']}
        <li {if $page == "pages"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/pages">
            {include file='__svg_icons.tpl' icon="pages" class="mr10" width="24px" height="24px"}
            {__("Pages")}
          </a>
        </li>
      {/if}

      {if $system['groups_enabled']}
        <li {if $page == "groups"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/groups">
            {include file='__svg_icons.tpl' icon="groups" class="mr10" width="24px" height="24px"}
            {__("Groups")}
          </a>
        </li>
      {/if}

      {if $system['events_enabled']}
        <li {if $page == "events"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/events">
            {include file='__svg_icons.tpl' icon="events" class="mr10" width="24px" height="24px"}
            {__("Events")}
          </a>
        </li>
      {/if}

      {if $system['blogs_enabled']}
        <li {if $page == "blogs"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/blogs">
            {include file='__svg_icons.tpl' icon="blogs" class="mr10" width="24px" height="24px"}
            {__("Blogs")}
          </a>
        </li>
      {/if}

      {if $system['market_enabled']}
        <li>
          <a href="{$system['system_url']}/comunidade/market">
            {include file='__svg_icons.tpl' icon="market" class="mr10" width="24px" height="24px"}
            {__("Marketplace")}
          </a>
        </li>
      {/if}

      {if $system['funding_enabled']}
        <li {if $page == "funding"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/funding">
            {include file='__svg_icons.tpl' icon="funding" class="mr10" width="24px" height="24px"}
            {__("Funding")}
          </a>
        </li>
      {/if}

      {if $system['pages_enabled'] && $system['offers_enabled']}
        <li {if $page == "offers"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/offers">
            {include file='__svg_icons.tpl' icon="offers" class="mr10" width="24px" height="24px"}
            {__("Offers")}
          </a>
        </li>
      {/if}

      {if $system['pages_enabled'] && $system['jobs_enabled']}
        <li {if $page == "jobs"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/jobs">
            {include file='__svg_icons.tpl' icon="jobs" class="mr10" width="24px" height="24px"}
            {__("Jobs")}
          </a>
        </li>
      {/if}

      {if $system['forums_enabled']}
        <li {if $page == "forums"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/forums">
            {include file='__svg_icons.tpl' icon="forums" class="mr10" width="24px" height="24px"}
            {__("Forums")}
          </a>
        </li>
      {/if}

      {if $system['movies_enabled']}
        <li {if $page == "movies"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/movies">
            {include file='__svg_icons.tpl' icon="movies" class="mr10" width="24px" height="24px"}
            {__("Movies")}
          </a>
        </li>
      {/if}

      {if $system['games_enabled']}
        <li {if $page == "games"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/games">
            {include file='__svg_icons.tpl' icon="games" class="mr10" width="24px" height="24px"}
            {__("Games")}
          </a>
        </li>
      {/if}

      {if $system['developers_apps_enabled'] || $system['developers_share_enabled']}
        <li {if $page == "developers"}class="active" {/if}>
          <a href="{$system['system_url']}/comunidade/developers{if !$system['developers_apps_enabled']}/share{/if}">
            {include file='__svg_icons.tpl' icon="developers" class="mr10" width="24px" height="24px"}
            {__("Developers")}
          </a>
        </li>
      {/if}
      <!-- explore -->
    </ul>
  </div>
</div>