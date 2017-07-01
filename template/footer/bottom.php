<div class="uk-width-1-1" id="footer-bottom-wrapper">
  
  <?php
    $fb = read_option('option-facebook');
    $instagram = read_option('option-instagram');
    $twitter = read_option('option-twitter');
    $youtube = read_option('option-youtube');
    $xing = read_option('option-xing');
    $linkedin = read_option('option-linkedin');
    $gplus = read_option('option-googleplus');
  ?>
  
  <div class="uk-container uk-container-center">
    <div class="uk-grid">

      <div class="uk-width-small-1-1 uk-width-medium-1-2 copyright">

        <a href="<?php bloginfo('url') ?>">
          &copy; <?php echo date('Y'); echo ' '.read_option('option_name'); ?>
        </a>

      </div>

      <div class="uk-width-small-1-1 uk-width-medium-1-2">
        
        <ul class="uk-list social uk-text-right">
          <?php
            if(!empty($fb)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $fb; ?>">
              <i class="uk-icon-facebook"></i>
            </a>
          </li>
          <?php
            }
          ?>
          <?php
            if(!empty($instagram)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $insta; ?>">
              <i class="uk-icon-instagram"></i>
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
              <i class="uk-icon-twitter"></i>
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
              <i class="uk-icon-youtube"></i>
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
              <i class="uk-icon-xing"></i>
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
              <i class="uk-icon-linkedin"></i>
            </a>
          </li>
          <?php
            }
          ?>
          <?php
            if(!empty($gplus)){
          ?>
          <li>
            <a target="_blank" href="<?php echo $gplus; ?>">
              <i class="uk-icon-google-plus"></i>
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