<?php

// Wordpress Menu Configuration

// Register Menu
function fn_theme_menus() {
  register_nav_menus(
    array(
      'main' => __( 'Hauptmenü' ),
      'footer' => __( 'Fußzeile' ),
    )
  );
}
add_action( 'init', 'fn_theme_menus' );

// Menu Fallback
function fn_menu_fallback() { ?>
    <li>
      <a href="/wp-admin/nav-menus.php">Menü erstellen</a>
    </li> <?php
}
