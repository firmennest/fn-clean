<?php

// Logo

add_shortcode('logo','fn_option_logo');
function fn_option_logo()
{
  ob_start();

  $logo = get_field('fn_company_logo', 'option');
  echo wp_get_attachment_image( $logo , 'full' );

  return ob_get_clean();
}

// Firmenname

add_shortcode('firmenname','fn_option_name');
function fn_option_name()
{
  ob_start();

  echo the_field('fn_company_name', 'option');

  return ob_get_clean();
}

// Inhaber

add_shortcode('inhaber','fn_option_owner');
function fn_option_owner()
{
  ob_start();

  echo the_field('fn_company_owner', 'option');

  return ob_get_clean();
}

// Straße

add_shortcode('strasse','fn_option_strasse');
function fn_option_strasse()
{
  ob_start();

  echo the_field('fn_address_street', 'option');

  return ob_get_clean();
}

// Stadt

add_shortcode('plz-ort','fn_option_city');
function fn_option_city()
{
  ob_start();

  $postal = get_field('fn_address_postal', 'option');
  $city = get_field('fn_address_city', 'option');

  echo $postal . ' ' . $city;

  return ob_get_clean();
}

// Telefon

add_shortcode('telefon','fn_option_tel');
function fn_option_tel()
{
  ob_start();

  echo get_field('fn_company_phone', 'option');

  return ob_get_clean();
}

// Mobil

add_shortcode('mobil','fn_option_mobile');
function fn_option_mobile()
{
  ob_start();

  echo get_field('fn_company_mobile', 'option');

  return ob_get_clean();
}

// Fax

add_shortcode('fax','fn_option_fax');
function fn_option_fax()
{
  ob_start();

  echo get_field('fn_company_fax', 'option');

  return ob_get_clean();
}

// Mail

add_shortcode('mail','fn_option_mail');
function fn_option_mail()
{
  ob_start();

  $mail = get_field('fn_company_mail', 'option');
  echo '<a href="mailto:' . antispambot( $mail ) . '">' . antispambot( $mail ) . '</a>';

  return ob_get_clean();
}

// Land

add_shortcode('land','fn_option_country');
function fn_option_country()
{
  ob_start();

  echo get_field('fn_address_country', 'option');

  return ob_get_clean();
}

// Analytics deaktivieren

add_shortcode('deactivate-ga','fn_deactivate_ga');
function fn_deactivate_ga()
{
  ob_start();
    echo '<a href="javascript:gaOptout()" class="google-analytics">' . _('Google Analytics deaktivieren') . '</a>';
  return ob_get_clean();
}

// Font Awesome 5 Shortcode

add_shortcode( 'icon','fn_icon' );
function fn_icon( $atts )
{
  ob_start();
  $atts = shortcode_atts( array(
    'type' => 'fal',
    'name' => '',
    'size' => '',
    'cls' => '',
  ), $atts,'fn_icon' );

  if ( $atts['name'] ) {
    $name = ' fa-' . $atts['name'];
  }

  $type = $atts['type'];
  if ( $type == 'regular' || $type == 'medium' || $type == 'md' ) {
    $type = 'far';
  } elseif ( $type == 'strong' || $type == 'bold' || $type == 'solid' ) {
    $type = 'fas';
  } elseif ( $type == 'brands' || $type == 'brand' ) {
    $type = 'fab';
  }

  if ( $atts['size'] ) {
    $size = ' fa-' . $atts['size'];
  }

  if ( $atts['cls'] ) {
    $class = ' ' . $atts['cls'];
  }

  echo '<i class="' . $type . $name . $size . $class . '"></i>';

  return ob_get_clean();
}
