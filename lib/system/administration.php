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
