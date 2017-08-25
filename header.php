<!DOCTYPE html>
<html class="uk-height-1-1">
<head>
    
  <meta charset="UTF-8">
  <title><?php wp_title( '|', true, 'right' ); ?> <?php echo read_option('option-seo_title')?></title>
  <meta name="description" content="<?php echo read_option('option-seo_desc')?>">
  <meta name="author" content="firmennest">
  <meta name="keywords" content="<?php echo read_option('option-seo_keywords')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  <?php wp_head(); ?>
    
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXXXXX', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('send', 'pageview');

  </script>
    
</head>

<body <?php body_class($start); ?>>

<?php get_template_part('template/header/top'); ?>
<?php get_template_part('template/header/center'); ?>
<?php get_template_part('template/header/bottom'); ?>
