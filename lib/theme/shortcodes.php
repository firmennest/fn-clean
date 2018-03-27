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

// Theme Option Ausgabe Shortcodes

add_shortcode('firmenname','fn_option_name');
function fn_option_name()
{
  ob_start();

  echo the_field('company_name', 'option');

  return ob_get_clean();
}

add_shortcode('strasse','fn_option_strasse');
function fn_option_strasse()
{
  ob_start();

  echo the_field('address_street', 'option');

  return ob_get_clean();
}

add_shortcode('plz-ort','fn_option_city');
function fn_option_city()
{
  ob_start();

  $postal = get_field('address_postal', 'option');
  $city = get_field('address_city', 'option');

  echo $postal . ' ' . $city;

  return ob_get_clean();
}

add_shortcode('telefon','fn_option_tel');
function fn_option_tel()
{
  ob_start();

  echo get_field('company_phone', 'option');

  return ob_get_clean();
}

add_shortcode('fax','fn_option_fax');
function fn_option_fax()
{
  ob_start();

  echo get_field('company_fax', 'option');

  return ob_get_clean();
}

add_shortcode('mail','fn_option_mail');
function fn_option_mail()
{
  ob_start();

  echo get_field('company_mail', 'option');

  return ob_get_clean();
}
