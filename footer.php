<?php
    get_template_part('template/footer/top');
    get_template_part('template/footer/center');
    get_template_part('template/footer/bottom');

    wp_footer();

    $fn_cookie_active = get_field('fn_cookie_bool', 'option');
    $fn_cookie_notice = get_field('fn_cookie_text', 'option');
    $fn_cookie_site_id = get_field('fn_cookie_link', 'option', false, false);
    $fn_cookie_button = get_field('fn_cookie_button', 'option');

    if( $fn_cookie_active ):
      if(@$_COOKIE['fn-cookie-notice'] != 'cookie-success') {
        ?><div id="fn-cookie-notice" class="uk-position-bottom uk-position-fixed" style="display: none;">
          <div class="uk-container uk-container-large">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse" uk-grid>
              <div class="uk-width-1-1 uk-width-expand@m">
                <p><?php echo $fn_cookie_notice; ?> <a class="uk-text-primary" href="<?php echo get_the_permalink($fn_cookie_site_id); ?>"><?php _e('Mehr Infos', 'fn-theme'); ?></a></p>
              </div>
              <div class="uk-width-1-1 uk-width-auto@m uk-text-center uk-padding-small">
                <a class="uk-button uk-button-primary" href="javascript:fn_setCookie();"><?php echo $fn_cookie_button; ?></a>
              </div>
            </div>
          </div>
        </div>
        <script>
        function fn_setCookie() {
          var d = new Date();
          d.setTime(d.getTime() + (90*24*60*60*1000));
          var expires = "expires="+ d.toUTCString();
          document.cookie = "fn-cookie-notice=cookie-success;" + expires + ";path=/";
          jQuery('#fn-cookie-notice').slideToggle();
          jQuery('body').css('padding-bottom', '0px');
        }
        jQuery(document).ready(function($){
          if (fnGetCookie("fn-cookie-notice") != 'cookie-success') {
            jQuery('#fn-cookie-notice').slideToggle('fast', function(){
              $('body').css('padding-bottom',$('#fn-cookie-notice').outerHeight());
            });
            $(window).resize(function(){
              if(!jQuery('#fn-cookie-notice').is(':visible')) return;
              setTimeout(function(){
                $('body').css('padding-bottom',$('#fn-cookie-notice').outerHeight());
              }, 200);
            });
          }
        });
        </script><?php
      }
    endif;

  ?></body>
</html>
