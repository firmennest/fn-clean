<?php

?><header>
  <div class="uk-container">
      <div uk-grid class="uk-flex uk-flex-middle">
        <div class="uk-width-2-3 uk-width-1-4@m logo">
          <a class="uk-display-inline-block" href="<?php bloginfo('url'); ?>"><?php
            echo do_shortcode('[logo]');
          ?></a>
        </div>
        <div class="uk-width-1-3 uk-width-3-4@m">
          <nav>
            <ul class="uk-subnav main-menu uk-margin-remove-bottom uk-flex-right uk-visible@m"><?php
              wp_nav_menu( array( 'fallback_cb' => 'fn_menu_fallback', 'menu' => 'menu', 'container' => false, 'theme_location'=>'main', 'items_wrap' => '%3$s' ) );
            ?></ul>
            <div class="uk-text-right main-menu-mobile uk-margin-bottom-remove uk-hidden@m">
              <a href="#offcanvas" uk-toggle><span></span></a>
            </div>
          </nav>
        </div>
      </div>
  </div>
</header><?php

// Offcanvas Menu

?><div id="offcanvas" uk-offcanvas>
  <div class="uk-offcanvas-bar">
    <nav class="uk-margin-large-top">
      <ul class="uk-nav uk-nav-primary main-menu-mobile"><?php
        wp_nav_menu( array( 'fallback_cb' => 'fn_menu_fallback', 'menu' => 'menu', 'container' => false, 'theme_location'=>'main', 'items_wrap' => '%3$s' ) );
      ?></ul>
    </nav>
  </div>
</div>
