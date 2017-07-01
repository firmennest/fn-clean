<?php

// Shortcodes

add_shortcode('fn-shortcode','fn_shortcode'); // 1. Ausgabe in Klammern, 2. Funktionsname, gleich dem Namen darunter.
function fn_shortcode()
{
  ob_start(); ?>

  <p>Shortcode Inhalte</p>

  <?php 
  return ob_get_clean();
}
