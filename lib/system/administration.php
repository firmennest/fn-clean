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

/** Custom Header **/
function fn_login_header() {
    echo '<style type="text/css"> h1 a { background-image:url('.get_bloginfo('template_directory').'/assets/images/logo.jpg) !important; } </style>';
}
add_action('login_head', 'fn_login_header');