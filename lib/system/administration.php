<?php

// Login Configuration

/** Login Title **/
function fn_login_title($login_header_title) {
    return get_bloginfo('title');
}
add_filter( 'login_headertext', 'fn_login_title' );

/** Login Redirect **/
function fn_login_redirect($login_header_url) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'fn_login_redirect' );

// Make theme available for translation
add_action( 'after_setup_theme', 'fn_lang_setup' );
function fn_lang_setup(){
  load_theme_textdomain( 'fn', get_template_directory() . '/lang' );
}

/**
  * Adds theme support for custom header, feed links, title tag, post formats, HTML5 and post thumbnails
*/
function fn_add_theme_support() {
  add_theme_support( 'html5', array(
    'comment-list',
    'comment-form',
    'search-form',
    'gallery',
    'caption',
  ) );
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'fn_add_theme_support' );

/**
 * Disable the emoji's
*/
function fn_disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'fn_disable_emojis_tinymce' );
  add_filter( 'wp_resource_hints', 'fn_disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'fn_disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */

function fn_disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */

function fn_disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
  if ( 'dns-prefetch' == $relation_type ) {
    /** This filter is documented in wp-includes/formatting.php */
    $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
    $urls = array_diff( $urls, array( $emoji_svg_url ) );
 }
 return $urls;
}

/**
 * Register a custom menu page.
 */
function fn_register_fn_settings() {
    $menu = add_menu_page(
        __( 'firmennest Theme', 'fn-theme' ),
        'Theme',
        'manage_options',
        'fn_theme',
        'fn_theme_menu_page',
        get_template_directory_uri() . '/assets/admin/fn_theme_icon.svg',
        99
    );
    add_action( 'admin_print_styles-' . $menu, 'fn_theme_admin_css' );

    // Add Custom Options Pages
    if( function_exists('acf_add_options_page') ) {

      // Add Sub Page
      acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Einstellungen',
        'menu_title' 	=> 'Einstellungen',
        'parent_slug' 	=> 'fn_theme',
        'menu_slug'  => 'theme',
      ));

    	// Add Sub Page
    	acf_add_options_sub_page(array(
    		'page_title' 	=> 'Unternehmen',
    		'menu_title' 	=> 'Unternehmen',
    		'parent_slug' 	=> 'fn_theme',
        'menu_slug'  => 'unternehmen',
    	));


    }
}
add_action( 'admin_menu', 'fn_register_fn_settings' );

/**
 * Display a custom menu page
 */
function fn_theme_menu_page(){
  ?><div id="fn-admin-content">
    <header>
      <div class="uk-flex uk-flex-middle" uk-grid>
        <div class="uk-width-2-3">
          <h3 class="uk-margin-remove">Willkommen</h3>
          <h1 class="uk-margin-remove">firmennest Theme</h1>
        </div>
        <div class="uk-width-1-3 uk-text-right">
          <a class="logo" target="_blank" rel="noopener" href="https://www.firmennest.de"><img src="<?php echo get_template_directory_uri() . '/assets/admin/firmennest_Logo.svg'; ?>" alt=""></a>
        </div>
      </div>
    </header>
    <main>
      <hr>

      <hr>
    </main>
  </div><?php
}

function fn_theme_admin_css() {
  $dirPath = get_template_directory() . '/assets/admin/css/';
  $dirURL = get_template_directory_uri() . '/assets/admin/css/';
  wp_enqueue_style( 'fn-theme-admin-css', $dirURL . 'main.css', array(), filemtime( $dirPath . 'main.css'), false);
}

function fn_admin_menu_icon_style() {
  $dirPath = get_template_directory() . '/assets/admin/css/';
  $dirURL = get_template_directory_uri() . '/assets/admin/css/';
  wp_enqueue_style( 'fn-theme-admin-menu-icon-css', $dirURL . 'menu-icon.css', array(), filemtime( $dirPath . 'menu-icon.css'), false);
}

add_action('admin_enqueue_scripts', 'fn_admin_menu_icon_style');

// Add fields to those pages
// To edit these fields, use the import file in our cloud (firmennest/wordpress/acf-export...)

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'fn_key_group_theme_settings',
	'title' => 'Theme-Einstellungen',
	'fields' => array(
		array(
			'key' => 'fn_key_tab_seo',
			'label' => 'SEO',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'fn_key_seo_title',
			'label' => 'Title',
			'name' => 'fn_seo_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_seo_desc',
			'label' => 'Description',
			'name' => 'fn_seo_desc',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'fn_key_seo_keywords',
			'label' => 'Keywords',
			'name' => 'fn_seo_keywords',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_seo_analytics',
			'label' => 'Analytics-ID',
			'name' => 'fn_seo_analytics',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_tab_blog',
			'label' => 'Blog',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'fn_key_blog_std_img',
			'label' => 'Standard-Beitragsbild',
			'name' => 'fn_blog_std_img',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'fn_key_tab_404',
			'label' => '404-Seite',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'fn_key_404_content',
			'label' => 'Inhalt',
			'name' => 'fn_404_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<h1>Hier wurde nichts gefunden.</h1>
<p>Gründe dafür könnten sein, dass Sie eine falsche oder veraltete URL aufgerufen haben.<br> Unter Umständen wurde die betreffende Seite auch verschoben oder gelöscht.</p>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'fn_key_tab_cookie',
			'label' => 'Cookie-Hinweis',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'fn_key_cookie_text',
			'label' => 'Textmeldung',
			'name' => 'fn_cookie_text',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Um unsere Webseite für Sie optimal zu gestalten und fortlaufend verbessern zu können, verwenden wir Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu. Weitere Informationen zu Cookies erhalten Sie hier:',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'fn_key_cookie_bool',
			'label' => 'Aktiv?',
			'name' => 'fn_cookie_bool',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33.333',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'fn_key_cookie_link',
			'label' => 'Link',
			'name' => 'fn_cookie_link',
			'type' => 'page_link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33.333',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'allow_archives' => 0,
			'multiple' => 0,
		),
		array(
			'key' => 'fn_key_cookie_button',
			'label' => 'Button-Text',
			'name' => 'fn_cookie_button',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33.333',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Akzeptieren',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'fn_key_group_company',
	'title' => 'Unternehmensinformationen',
	'fields' => array(
		array(
			'key' => 'fn_key_company_logo',
			'label' => 'Logo',
			'name' => 'fn_company_logo',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_598d75e8b22e6',
						'operator' => '!=',
						'value' => 'Person',
					),
				),
			),
			'wrapper' => array(
				'width' => '35',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'schema_company_logo',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'jpg, png, svg',
		),
		array(
			'key' => 'fn_key_company_logo_inverted',
			'label' => 'Logo (Invertiert)',
			'name' => 'fn_company_logo_inverted',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_598d75e8b22e6',
						'operator' => '!=',
						'value' => 'Person',
					),
				),
			),
			'wrapper' => array(
				'width' => '35',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'uploadedTo',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'jpg, png',
		),
		array(
			'key' => 'fn_key_tab_address',
			'label' => 'Adresse',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'fn_key_company_name',
			'label' => 'Name',
			'name' => 'fn_company_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_address_street',
			'label' => 'Straße',
			'name' => 'fn_address_street',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_address_postal',
			'label' => 'PLZ',
			'name' => 'fn_address_postal',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '30',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_address_city',
			'label' => 'Stadt',
			'name' => 'fn_address_city',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '35',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_address_country',
			'label' => 'Land',
			'name' => 'fn_address_country',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '35',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_company_mail',
			'label' => 'Mail',
			'name' => 'fn_company_mail',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_company_phone',
			'label' => 'Telefon',
			'name' => 'fn_company_phone',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '30',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_company_fax',
			'label' => 'Fax',
			'name' => 'fn_company_fax',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '30',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'fn_key_tab_social',
			'label' => 'Social Media',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'fn_key_social_facebook',
			'label' => 'Facebook',
			'name' => 'fn_social_facebook',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'fn_key_social_twitter',
			'label' => 'Twitter',
			'name' => 'fn_social_twitter',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'fn_key_social_instagram',
			'label' => 'Instagram',
			'name' => 'fn_social_instagram',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'fn_key_social_pinterest',
			'label' => 'Pinterest',
			'name' => 'fn_social_pinterest',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'fn_key_social_youtube',
			'label' => 'YouTube',
			'name' => 'fn_social_youtube',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'fn_key_social_googleplus',
			'label' => 'Google+',
			'name' => 'fn_social_googleplus',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'fn_key_social_xing',
			'label' => 'Xing',
			'name' => 'fn_social_xing',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'fn_key_social_linkedin',
			'label' => 'Linkedin',
			'name' => 'fn_social_linkedin',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'unternehmen',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
