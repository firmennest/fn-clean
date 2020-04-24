  <div class="fn-footer-bottom uk-light uk-background-secondary uk-text-center"><?php

    $name = get_field('fn_company_name', 'option');
    $facebook = get_field('fn_social_facebook', 'option');
    $twitter = get_field('fn_social_twitter', 'option');
    $instagram = get_field('fn_social_instagram', 'option');
    $pinterest = get_field('fn_social_pinterest', 'option');
    $youtube = get_field('fn_social_youtube', 'option');
    $xing = get_field('fn_social_xing', 'option');
    $linkedin = get_field('fn_social_linkedin', 'option');

    ?><div class="uk-container">
      <div uk-grid class="uk-margin-small-top uk-margin-small-bottom"><?php
        // Copyright
        ?><div class="uk-width-1-1 uk-width-auto copy uk-text-left@m">
          <a href="<?php bloginfo('url') ?>">
            &copy; <?php echo date('Y') .'&ensp;'. $name; ?>
          </a>
        </div><?php
        // Social
        if( $facebook || $twitter || $instagram || $pinterest || $youtube || $xing || $linkedin ){
          ?><div class="uk-width-1-1 uk-width-auto social">
            <ul class="uk-subnav">
            <?php if ($facebook) {
              echo '<li><a href="' . $facebook . '" target="_blank"><i class="fab fa-facebook-f"></i></a></li>';
            }
            if ($twitter) {
              echo '<li><a href="' . $twitter . '" target="_blank"><i class="fab fa-twitter"></i></a></li>';
            }
            if ($instagram) {
              echo '<li><a href="' . $instagram . '" target="_blank"><i class="fab fa-instagram"></i></a></li>';
            }
            if ($pinterest) {
              echo '<li><a href="' . $pinterest . '" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>';
            }
            if ($youtube) {
              echo '<li><a href="' . $youtube . '" target="_blank"><i class="fab fa-youtube"></i></a></li>';
            }
            if ($xing) {
              echo '<li><a href="' . $xing . '" target="_blank"><i class="fab fa-xing"></i></a></li>';
            }
            if ($linkedin) {
              echo '<li><a href="' . $linkedin . '" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>';
            } ?>
            </ul>
          </div><?php
        }
        // Menu Area
        ?><div class="uk-width-1-1 uk-width-expand menu">
          <ul class="uk-subnav uk-flex-center uk-flex-right@m"><?php
            wp_nav_menu( array( 'fallback_cb' => 'fn_menu_fallback', 'menu' => 'menu', 'container' => false, 'theme_location'=>'footer', 'items_wrap' => '%3$s' ) );
          ?></ul>
        </div>
      </div>
    </div>
  </div>
</footer>
