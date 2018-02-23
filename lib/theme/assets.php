<?php

// CSS Files
function add_theme_css() {
  if ( !is_admin() ) {
    $theme_name = get_template();
    $directory = "wp-content/themes/" . $theme_name . "/assets/theme/css/";

    //get all image files with a .css extension.
    $files = glob($directory . "*.css");
    sort($files);

    if ( !is_admin() ) {
      //print each file name
      foreach($files as $file) {
        wp_register_style( 'theme-'.$file , '/'. $file, array(), null, false);
        wp_enqueue_style( 'theme-'.$file);
      }
    }
  }
}
add_action( 'wp_enqueue_styles', 'add_theme_css' );
add_action('init', 'add_theme_css');

// JS Files
function add_theme_js() {
  if ( !is_admin() ) {
    wp_register_script( 'theme-js', get_template_directory_uri() . '/assets/theme/js/theme-min.js', array(), null, false);
    wp_enqueue_script( 'theme-js');
  }
}
add_action( 'wp_enqueue_scripts ', 'add_theme_js' );
add_action('init', 'add_theme_js');
