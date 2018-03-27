<?php
  $logo = get_field('company_logo', 'option');
  $logo_src = wp_get_attachment_image_src( $logo , '' );
  $logo_url = $logo_src[0];
?>

<div class="uk-width-1-1" id="header-wrapper">
  <div class="uk-container uk-container-center uk-margin-small-top uk-margin-small-bottom">
    <header class="header-content">
      <div class="uk-grid">
        <div class="uk-width-small-1-2 uk-width-medium-1-4">
          <a class="logo" href="<?php bloginfo('url'); ?>">
            <img src="<?php echo $logo_url; ?>" alt="">
          </a>
        </div>
        <div class="uk-width-small-1-2 uk-width-medium-3-4 uk-text-right">
          <nav class="main-nav-wrapper">
            <ul class="uk-list main-menu uk-margin-bottom-remove uk-hidden-small">
              <?php wp_nav_menu( array( 'fallback_cb' => 'fn_menu_fallback', 'menu' => 'menu', 'container' => false, 'theme_location'=>'main', 'items_wrap' => '%3$s' ) ); ?>
            </ul>
            <ul class="uk-list main-menu-mobile uk-margin-bottom-remove uk-visible-small">
              <li>
                <a href="#menu" id="offcanvas" data-uk-offcanvas><i class="fal fa-bars "></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  </div>
</div>

<?php // Offcanvas Menu ?>

<div id="menu" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <a class="uk-close uk-offcanvas-close" uk-close></a>
    <nav>
      <ul class="uk-list main-menu-mobile uk-margin-large-top">
        <?php wp_nav_menu( array( 'fallback_cb' => 'fn_menu_fallback', 'menu' => 'menu', 'container' => false, 'theme_location'=>'main', 'items_wrap' => '%3$s' ) ); ?>
      </ul>
    </nav>
  </div>
</div>
