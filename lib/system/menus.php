<?php

// Wordpress Menu Configuration

// Register Menu
function fn_theme_menus() {
  register_nav_menus(
    array(
      'main' => __( 'Main Menu' ),
      'footer' => __( 'Footer Menu' ),
    )
  );
}
add_action( 'init', 'fn_theme_menus' );