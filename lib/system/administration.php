<?php

// Login Configuration

/** Login Title **/
function fn_login_title($login_header_title) {
    return get_bloginfo('title');
}
add_filter( 'login_headertitle', 'fn_login_title' );

/** Login Redirect **/
function fn_login_redirect($login_header_url) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'fn_login_redirect' );

// Add Custom Options Pages
if( function_exists('acf_add_options_page') ) {

	// Add Sub Page
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Unternehmen',
		'menu_title' 	=> 'Unternehmen',
		'parent_slug' 	=> 'options-general.php',
    'menu_slug'  => 'unternehmen',
	));

  // Add Sub Page
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Einstellungen',
		'menu_title' 	=> 'Theme',
		'parent_slug' 	=> 'options-general.php',
    'menu_slug'  => 'theme',
	));

}
