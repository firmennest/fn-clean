<?php

// Options
add_action( 'tf_create_options', 'fn_theme_options' );
function fn_theme_options() {
    
    // Create Pages
    $titan = TitanFramework::getInstance( 'theme' );
    
    // Create Admin Page
    $panel = $titan->createAdminPanel( array(
        'name' => 'Theme Settings',
        'position' => 54,
        'icon' => 'dashicons-admin-settings',
    ) );
    
    
    // Company Settings
    $tab = $panel->createTab( array(
        'name' => 'Firmeninfos',
    ) );
    // Social Media Settings
    $tab2 = $panel->createTab( array(
        'name' => 'Social Media',
    ) );
    // SEO Settings
    $tab3 = $panel->createTab( array(
        'name' => 'SEO',
    ) );
    // Blog
    $tab4 = $panel->createTab( array(
        'name' => 'Blog',
    ) );
    
    
    // Options
    
    //// Generall Options
    $tab->createOption( array(
      'name' => 'Firmenname',
      'id' => 'option-name',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab->createOption( array(
      'name' => 'Straße',
      'id' => 'option-street',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab->createOption( array(
      'name' => 'PLZ & Ort',
      'id' => 'option-city',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab->createOption( array(
      'name' => 'Telefon',
      'id' => 'option-tel',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab->createOption( array(
      'name' => 'Fax',
      'id' => 'option-fax',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab->createOption( array(
      'name' => 'Mail',
      'id' => 'option-mail',
      'type' => 'text',
      'desc' => ''
    ) );
    
     // Logo
    $tab->createOption( array(
        'name' => 'Logo',
        'id' => 'option-logo',
        'type' => 'upload',
        'desc' => ''
    ) );
    $tab->createOption( array(
        'name' => 'Logo Kontrast',
        'id' => 'option-logo_contrast',
        'type' => 'upload',
        'desc' => ''
    ) );
    
    
    // Social
    $tab2->createOption( array(
      'name' => 'Facebook',
      'id' => 'option-facebook',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab2->createOption( array(
      'name' => 'Instagram',
      'id' => 'option-instagram',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab2->createOption( array(
      'name' => 'Twitter',
      'id' => 'option-twitter',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab2->createOption( array(
      'name' => 'YouTube',
      'id' => 'option-youtube',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab2->createOption( array(
      'name' => 'Xing',
      'id' => 'option-xing',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab2->createOption( array(
      'name' => 'LinkedIN',
      'id' => 'option-linkedin',
      'type' => 'text',
      'desc' => ''
    ) );
    $tab2->createOption( array(
      'name' => 'Google Plus',
      'id' => 'option-googleplus',
      'type' => 'text',
      'desc' => ''
    ) );
  
    // SEO
    $tab3->createOption( array(
      'name' => 'Title',
      'id' => 'option-seo_title',
      'type' => 'text',
      'desc' => 'Allgemeiner Title für die Webseite.'
    ) );
    $tab3->createOption( array(
      'name' => 'Metabeschreibung',
      'id' => 'option-seo_desc',
      'type' => 'text',
      'desc' => 'Allgemeine Metabeschreibung für die Webseite.'
    ) );
    $tab3->createOption( array(
      'name' => 'Keywords',
      'id' => 'option-seo_keywords',
      'type' => 'text',
      'desc' => 'Allgemeine Keywords für die Webseite.'
    ) );
    $tab3->createOption( array(
      'name' => 'Google Analytics',
      'id' => 'option-seo_analytics',
      'type' => 'text',
      'desc' => 'Google Analytics Tracking Code'
    ) );
  
    // Blog
    $tab4->createOption( array(
      'name' => 'Beitragsbild',
      'id' => 'option-blog',
      'type' => 'upload',
      'desc' => 'Fallback-Beitragsbild'
    ) );
    
    //// Save Button
    $panel->createOption( array(
        'type' => 'save',
        'use_reset' => false,
    ) );
    
}

// Get Theme Options -  Use: echo read_option('option-id');
function read_option($id){
  $titan = TitanFramework::getInstance( 'theme' );
  return $titan->getOption($id);
}