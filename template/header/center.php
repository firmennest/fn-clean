<?php
  $logo = get_field('company_logo', 'option');
  $logo_src = wp_get_attachment_image_src( $logo , '' );
  $logo_url = $logo_src[0];
?>

<header class="uk-width-1-1">
  <div class="uk-container uk-margin-top uk-margin-bottom">
      <div uk-grid class="uk-flex uk-flex-bottom">
        <div class="uk-width-2-3 uk-width-1-4@m logo">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php echo $logo_url; ?>" alt="">
          </a>
        </div>
        <div class="uk-width-1-3 uk-width-3-4@m">
          <nav>
            <ul class="uk-subnav main-menu uk-margin-remove-bottom uk-flex-right uk-visible@m">
              <?php wp_nav_menu( array( 'fallback_cb' => 'fn_menu_fallback', 'menu' => 'menu', 'container' => false, 'theme_location'=>'main', 'items_wrap' => '%3$s' ) ); ?>
            </ul>
            <div class="uk-text-right main-menu-mobile uk-margin-bottom-remove uk-hidden@m">
              <button class="uk-button uk-button-text" uk-toggle="target: #offcanvas" type="button"><i class="fal fa-bars fa-2x"></i></button>
            </div>
          </nav>
        </div>
      </div>
  </div>
</header>

<?php // Offcanvas Menu ?>

<div id="offcanvas" uk-offcanvas>
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close uk-close-large" type="button" uk-close></button>
    <nav class="uk-margin-large-top">
      <ul class="uk-nav uk-nav-primary main-menu-mobile">
        <?php wp_nav_menu( array( 'fallback_cb' => 'fn_menu_fallback', 'menu' => 'menu', 'container' => false, 'theme_location'=>'main', 'items_wrap' => '%3$s' ) ); ?>
      </ul>
    </nav>
  </div>
</div>
