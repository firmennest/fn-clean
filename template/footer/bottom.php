<div class="uk-width-1-1" id="footer-bottom-wrapper">

  <?php
    $name = get_field('company_name', 'option');
    $facebook = get_field('social_facebook', 'option');
    $twitter = get_field('social_twitter', 'option');
    $instagram = get_field('social_instagram', 'option');
    $pinterest = get_field('social_pinterest', 'option');
    $youtube = get_field('social_youtube', 'option');
    $googleplus = get_field('social_googleplus', 'option');
    $xing = get_field('social_xing', 'option');
    $linkedin = get_field('social_linkedin', 'option');
  ?>

  <div class="uk-container uk-container-center">
    <div class="uk-grid">

      <div class="uk-width-small-1-1 uk-width-medium-1-2 copyright">

        <a href="<?php bloginfo('url') ?>">
          &copy; <?php echo date('Y') .'&ensp;'. $name; ?>
        </a>

      </div>

      <div class="uk-width-small-1-1 uk-width-medium-1-2">

        <ul class="uk-list social uk-text-right">
          <?php
            if(!empty($facebook)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $facebook; ?>">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <?php
            }
          ?>
          <?php
            if(!empty($twitter)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $twitter; ?>">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <?php
            }
          ?>
          <?php
            if(!empty($instagram)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $instagram; ?>">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <?php
            }
          ?>
          <?php
            if(!empty($pinterest)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $pinterest; ?>">
              <i class="fab fa-pinterest-p"></i>
            </a>
          </li>
          <?php
            }
          ?>
          <?php
            if(!empty($youtube)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $youtube; ?>">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          <?php
            }
          ?>
          <?php
            if(!empty($googleplus)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $googleplus; ?>">
              <i class="fab fa-google-plus-g"></i>
            </a>
          </li>
          <?php
            }
          ?>
          <?php
            if(!empty($xing)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $xing; ?>">
              <i class="fab fa-xing"></i>
            </a>
          </li>
          <?php
            }
          ?>
          <?php
            if(!empty($linkedin)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $linkedin; ?>">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
          <?php
            }
          ?>
        </ul>

      </div>

    </div>
  </div>

</div>
</footer>
