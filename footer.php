    <?php get_template_part('template/footer/top'); ?>
    <?php get_template_part('template/footer/center'); ?>
    <?php get_template_part('template/footer/bottom'); ?>

    <?php wp_footer();

    $cookie_active = get_field('cookie_aktiv', 'option');
    $cookie_notice = get_field('cookie_text', 'option');
    $cookie_site_id = get_field('cookie_link', 'option', false, false);
    $cookie_button = get_field('cookie_button', 'option'); ?>

    <script>
      function fn_setCookie() {
        var d = new Date();
        d.setTime(d.getTime() + (90*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = "cookie-notice=cookie-success;" + expires + ";path=/";
        jQuery('#cookie').remove();
        jQuery('body').css('padding-bottom', '0px');
      }
      jQuery(document).ready(function($){
         $('body').css('padding-bottom',$('#cookie').outerHeight());
      });
    </script>

    <?php if( $cookie_active ):
      if($_COOKIE['cookie-notice'] != 'cookie-success') { ?>
        <div id="cookie" class="uk-card uk-card-default uk-card-body uk-position-bottom uk-position-fixed">
          <div class="uk-container uk-container-large">
            <div class="uk-flex uk-flex-middle" uk-grid>
              <div class="uk-width-1-1 uk-width-3-4@m">
                <p><?php echo $cookie_notice; ?> <a href="<?php echo get_the_permalink($cookie_site_id); ?>"><?php echo get_the_title($cookie_site_id); ?></a></p>
              </div>
              <div class="uk-width-1-1 uk-width-1-4@m uk-text-center">
                <a class="uk-button uk-button-primary" href="javascript:fn_setCookie();"><?php echo $cookie_button; ?></a>
              </div>
            </div>
          </div>
        </div><?php
      }
    endif; ?>

  </body>
</html>
