<div class="uk-width-1-1 footer-bottom uk-background-muted uk-padding">

  <div class="uk-container">
    <div uk-grid>

      <div class="uk-width-1-1 uk-width-1-4@m logo">
        <a href="<?php bloginfo('url'); ?>">
          <?php echo do_shortcode('[logo]'); ?>
        </a>
      </div>

      <div class="uk-width-1-1 uk-width-1-2@m">

        <ul class="uk-list uk-column-1-2@m info">
          <li>
            <?php echo do_shortcode('[firmenname]'); ?>
          </li>
          <li>
            <?php echo do_shortcode('[strasse]'); ?>
          </li>
          <li>
            <?php echo do_shortcode('[plz-ort]'); ?>
          </li>
          <li>
            <i class="fal fa-phone fa-flip-horizontal fa-fw"></i> <?php echo do_shortcode('[telefon]'); ?>
          </li>
          <li>
            <i class="fal fa-fax fa-fw"></i> <?php echo do_shortcode('[fax]'); ?>
          </li>
          <li>
            <i class="fal fa-envelope fa-fw"></i> <?php echo do_shortcode('[mail]'); ?></a>
          </li>
        </ul>

      </div>

      <div class="uk-width-1-1 uk-width-1-4@m">
        <ul class="uk-list footer-menu">
          <?php wp_nav_menu( array( 'fallback_cb' => 'fn_menu_fallback', 'menu' => 'menu', 'container' => false, 'theme_location'=>'footer', 'items_wrap' => '%3$s' ) ); ?>
        </ul>
      </div>

    </div>
  </div>

</div>
