<!DOCTYPE html>
<html class="uk-height-1-1">
<head>
  <?php
    $seo_title = get_field('seo_title', 'option');
    $seo_desc = get_field('seo_desc', 'option');
    $seo_keywords = get_field('seo_keywords', 'option');
    $analytics = get_field('seo_analytics', 'option');

    $cookie_active = get_field('cookie_aktiv', 'option');
    $cookie_notice = get_field('cookie_text', 'option');
    $cookie_site_id = get_field('cookie_link', 'option', false, false);
    $cookie_button = get_field('cookie_button', 'option');
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title( '|', true, 'right' ); ?> <?php echo $seo_title; ?></title>
  <meta name="description" content="<?php echo $seo_desc; ?>">
  <meta name="author" content="firmennest">
  <meta name="keywords" content="<?php echo $seo_keywords; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon https://realfavicongenerator.net/ -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1c497a">
  <meta name="msapplication-TileColor" content="#1c497a">
  <meta name="theme-color" content="#1c497a">

  <?php wp_head(); ?>

  <?php if( $analytics ): ?>
    <script> 
      var gaProperty = '<?php echo $analytics; ?>'; 
      var disableStr = 'ga-disable-' + gaProperty; 
      if (document.cookie.indexOf(disableStr + '=true') > -1) { 
        window[disableStr] = true;
      } 
      function gaOptout() { 
        document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/'; 
        window[disableStr] = true; 
        alert('Das Tracking ist jetzt deaktiviert'); 
      } 
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ 
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), 
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) 
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); 

      ga('create', '<?php echo $analytics; ?>', 'auto'); 
      ga('set', 'anonymizeIp', true); 
      ga('send', 'pageview'); 
    </script>
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
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


<?php get_template_part('template/header/top'); ?>
<?php get_template_part('template/header/center'); ?>
<?php get_template_part('template/header/bottom'); ?>
