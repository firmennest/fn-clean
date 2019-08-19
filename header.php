<!DOCTYPE html>
<html class="uk-height-1-1" <?php language_attributes(); ?>>
<head>
  <?php
    $seo_title = get_field('seo_title', 'option');
    $seo_desc = get_field('seo_desc', 'option');
    $seo_keywords = get_field('seo_keywords', 'option');
    $analytics = get_field('seo_analytics', 'option');
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

<?php get_template_part('template/header/top'); ?>
<?php get_template_part('template/header/center'); ?>
<?php get_template_part('template/header/bottom'); ?>
