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

add_shortcode('firmenname','fn_option_name'); // 1. Ausgabe in Klammern, 2. Funktionsname, gleich dem Namen darunter.
function fn_option_name()
{
  ob_start();

  echo read_option('option-name');

  return ob_get_clean();
}

add_shortcode('strasse','fn_option_strasse'); // 1. Ausgabe in Klammern, 2. Funktionsname, gleich dem Namen darunter.
function fn_option_strasse()
{
  ob_start();

  echo read_option('option-street');

  return ob_get_clean();
}

add_shortcode('plz-ort','fn_option_city'); // 1. Ausgabe in Klammern, 2. Funktionsname, gleich dem Namen darunter.
function fn_option_city()
{
  ob_start();

  echo read_option('option-city');

  return ob_get_clean();
}

add_shortcode('telefon','fn_option_tel'); // 1. Ausgabe in Klammern, 2. Funktionsname, gleich dem Namen darunter.
function fn_option_tel()
{
  ob_start();

  echo read_option('option-tel');

  return ob_get_clean();
}

add_shortcode('fax','fn_option_fax'); // 1. Ausgabe in Klammern, 2. Funktionsname, gleich dem Namen darunter.
function fn_option_fax()
{
  ob_start();

  echo read_option('option-fax');

  return ob_get_clean();
}

add_shortcode('mail','fn_option_mail'); // 1. Ausgabe in Klammern, 2. Funktionsname, gleich dem Namen darunter.
function fn_option_mail()
{
  ob_start();

  echo read_option('option-mail');

  return ob_get_clean();
}
