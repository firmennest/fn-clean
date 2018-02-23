<div class="uk-width-1-1" id="footer-center-wrapper">
  
  <?php
    $logo = read_option('option-logo');
    $name = read_option('option-name');
    $street = read_option('option-street');
    $city = read_option('option-city');
    $phone = read_option('option-tel');
    $fax = read_option('option-fax');
    $mail = read_option('option-mail');
  ?>

  <div class="uk-container uk-container-center">
    <div class="uk-grid">

      <div class="uk-width-small-1-1 uk-width-medium-1-4">

        <?php
          $imageAttachment = wp_get_attachment_image_src( $logo, 'full' );
          $imageSrc = $imageAttachment[0];

          if(empty($logo)){
        ?>
        <a class="logo" href="<?php bloginfo('url'); ?>">
          <?php bloginfo('name'); ?>
        </a>
        <?php
          } else {
        ?>
        <a class="logo" href="<?php bloginfo('url'); ?>">
          <img src="<?php echo $imageSrc?>" alt="">
        </a>
        <?php
          }
        ?>

      </div>
      
      <div class="uk-width-small-1-1 uk-width-medium-2-4">

        <ul class="uk-list uk-column-small-1-1 uk-column-medium-1-2 info">
          <li>
            <?php echo $name; ?>
          </li>
          <li>
            <?php echo $street; ?>
          </li>
          <li>
            <?php echo $city; ?>
          </li>
          <li>
            <i class="uk-icon-phone"></i> <?php echo $phone; ?>
          </li>
          <li>
            <i class="uk-icon-fax"></i> <?php echo $fax; ?>
          </li>
          <li>
            <i class="uk-icon-envelope"></i> <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
          </li>
        </ul>

      </div>
      
      <div class="uk-width-small-1-1 uk-width-medium-1-4">
        <ul class="uk-list footer-menu">
          <?php wp_nav_menu( array( 'fallback_cb' => 'fn_menu_fallback', 'menu' => 'menu', 'container' => false, 'theme_location'=>'footer', 'items_wrap' => '%3$s' ) ); ?>
        </ul>
      </div>

    </div>
  </div>

</div>
