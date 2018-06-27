<div class="uk-width-1-1 footer-bottom uk-background-muted uk-padding">

  <?php
    $logo = get_field('company_logo', 'option');
    $logo_src = wp_get_attachment_image_src( $logo , '' );
    $logo_url = $logo_src[0];
    $name = get_field('company_name', 'option');
    $street = get_field('address_street', 'option');
    $postal = get_field('address_postal', 'option');
    $city = get_field('address_city', 'option');
    $country = get_field('address_country', 'option');
    $mail = get_field('company_mail', 'option');
    $phone = get_field('company_phone', 'option');
    $fax = get_field('company_fax', 'option');
  ?>

  <div class="uk-container">
    <div uk-grid>

      <div class="uk-width-1-1 uk-width-1-4@m">
        <a class="logo" href="<?php bloginfo('url'); ?>">
          <img src="<?php echo $logo_url; ?>" alt="">
        </a>
      </div>

      <div class="uk-width-1-1 uk-width-1-2@m">

        <ul class="uk-list uk-column-1-2@m info">
          <li>
            <?php echo $name; ?>
          </li>
          <li>
            <?php echo $street; ?>
          </li>
          <li>
            <?php echo $postal .' '. $city; ?>
          </li>
          <li>
            <i class="fal fa-phone"></i> <?php echo $phone; ?>
          </li>
          <li>
            <i class="fal fa-fax"></i> <?php echo $fax; ?>
          </li>
          <li>
            <i class="fal fa-envelope"></i> <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
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
