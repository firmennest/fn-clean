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

// Add fields to those pages
// To edit these fields, use the import file in our cloud (firmennest/wordpress/acf-export...)

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5aba39763fc30',
	'title' => 'Theme-Einstellungen',
	'fields' => array(
		array(
			'key' => 'field_5aba3983b6afa',
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
			'key' => 'field_5aba39d7b6afb',
			'label' => 'Title',
			'name' => 'seo_title',
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
			'key' => 'field_5aba3a02b6afc',
			'label' => 'Description',
			'name' => 'seo_desc',
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
			'key' => 'field_5aba3a1bb6afd',
			'label' => 'Keywords',
			'name' => 'seo_keywords',
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
			'key' => 'field_5aba3a31b6afe',
			'label' => 'Analytics-ID',
			'name' => 'seo_analytics',
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
			'key' => 'field_5aba3a4bb6aff',
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
			'key' => 'field_5aba3a63b6b00',
			'label' => 'Standard-Beitragsbild',
			'name' => 'blog_std_img',
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
			'key' => 'field_5ae2fcc5fd194',
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
			'key' => 'field_5ae2fcecfd195',
			'label' => 'Inhalt',
			'name' => '404_inhalt',
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
			'key' => 'field_5b0813096b36e',
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
			'key' => 'field_5b0813226b36f',
			'label' => 'Textmeldung',
			'name' => 'cookie_text',
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
			'key' => 'field_5b0815766b370',
			'label' => 'Aktiv?',
			'name' => 'cookie_aktiv',
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
			'key' => 'field_5b08159b6b371',
			'label' => 'Link',
			'name' => 'cookie_link',
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
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'allow_archives' => 0,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5b0818ab6b372',
			'label' => 'Button-Text',
			'name' => 'cookie_button',
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
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_598d5bca6dda6',
	'title' => 'Unternehmensinformationen',
	'fields' => array(
		array(
			'key' => 'field_598d6f037a92f',
			'label' => 'Logo',
			'name' => 'company_logo',
			'type' => 'image',
			'instructions' => 'Optimale Größe: 151x151',
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
			'key' => 'field_598db0fa1cef7',
			'label' => 'Gebäude',
			'name' => 'company_image',
			'type' => 'image',
			'instructions' => 'Optimale Größe: 200x200',
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
			'preview_size' => 'schema_company_image',
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
			'key' => 'field_598d75e8b22e6',
			'label' => 'Schema Typ',
			'name' => 'schema_type',
			'type' => 'select',
			'instructions' => 'Wähle, welche Art von strukturierten Daten du hier pflegen möchtest.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '30',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Organisation' => 'Organisation',
				'Store' => 'Store',
				'LocalBusiness' => 'Lokales Unternehmen',
				'Person' => 'Person',
				'Restaurant' => 'Restaurant',
			),
			'default_value' => array(
				0 => 'LocalBusiness',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_598d5fe753374',
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
			'key' => 'field_5ab53b30ce0ca',
			'label' => 'Name',
			'name' => 'company_name',
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
			'key' => 'field_598d5bfc3cc2a',
			'label' => 'Straße',
			'name' => 'address_street',
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
			'key' => 'field_598d5c233cc2b',
			'label' => 'PLZ',
			'name' => 'address_postal',
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
			'key' => 'field_598d5c933cc2c',
			'label' => 'Stadt',
			'name' => 'address_city',
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
			'key' => 'field_598d793f20d4a',
			'label' => 'Land',
			'name' => 'address_country',
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
			'key' => 'field_5ab53073b8616',
			'label' => 'Mail',
			'name' => 'company_mail',
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
			'key' => 'field_598da40b04a1e',
			'label' => 'Telefon',
			'name' => 'company_phone',
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
			'key' => 'field_5ab53a3bd7533',
			'label' => 'Fax',
			'name' => 'company_fax',
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
			'key' => 'field_598d600553375',
			'label' => 'Öffnungszeiten',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_598d75e8b22e6',
						'operator' => '!=',
						'value' => 'Organisation',
					),
					array(
						'field' => 'field_598d75e8b22e6',
						'operator' => '!=',
						'value' => 'Person',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_598d63d35337c',
			'label' => 'Öffnungszeiten',
			'name' => 'opening_hours',
			'type' => 'repeater',
			'instructions' => 'Täglich geöffnet: 00:00–23:59',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_598d63f15337d',
			'min' => 0,
			'max' => 7,
			'layout' => 'table',
			'button_label' => 'Tag hinzufügen',
			'sub_fields' => array(
				array(
					'key' => 'field_598d63f15337d',
					'label' => 'Tage',
					'name' => 'days',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '40',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'Mo' => 'Mo',
						'Tu' => 'Di',
						'We' => 'Mi',
						'Th' => 'Do',
						'Fr' => 'Fr',
						'Sa' => 'Sa',
						'Su' => 'So',
					),
					'default_value' => array(
					),
					'allow_null' => 0,
					'multiple' => 1,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_598d64205337e',
					'label' => 'Von',
					'name' => 'from',
					'type' => 'time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_598d96b160bcc',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'H:i',
					'return_format' => 'H:i',
				),
				array(
					'key' => 'field_598d64bd59579',
					'label' => 'bis',
					'name' => 'to',
					'type' => 'time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_598d96b160bcc',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'H:i',
					'return_format' => 'H:i',
				),
				array(
					'key' => 'field_598d96b160bcc',
					'label' => 'Geschlossen',
					'name' => 'closed',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
			),
		),
		array(
			'key' => 'field_598d6692d5ea5',
			'label' => 'Sonderöffnungs- oder -schließzeiten',
			'name' => 'special_days',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Date',
			'sub_fields' => array(
				array(
					'key' => 'field_598d6692d5ea7',
					'label' => 'Datum: von',
					'name' => 'date_from',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'd.m.Y',
					'return_format' => 'Y-m-d',
					'first_day' => 1,
				),
				array(
					'key' => 'field_598d9b07ccb41',
					'label' => 'Datum: bis',
					'name' => 'date_to',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'd.m.Y',
					'return_format' => 'Y-m-d',
					'first_day' => 1,
				),
				array(
					'key' => 'field_598d9b14ccb42',
					'label' => 'Zeit: von',
					'name' => 'time_from',
					'type' => 'time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_598d9b53ccb43',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'H:i',
					'return_format' => 'H:i',
				),
				array(
					'key' => 'field_598d6692d5ea8',
					'label' => 'Zeit bis',
					'name' => 'time_to',
					'type' => 'time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_598d9b53ccb43',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'H:i',
					'return_format' => 'H:i',
				),
				array(
					'key' => 'field_598d9b53ccb43',
					'label' => 'Geschlossen?',
					'name' => 'closed',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => 'Ja',
					'ui_off_text' => 'Nein',
				),
			),
		),
		array(
			'key' => 'field_598d6cb0f5324',
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
			'key' => 'field_5aba300134fc1',
			'label' => 'Facebook',
			'name' => 'social_facebook',
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
			'key' => 'field_5aba302b34fc2',
			'label' => 'Twitter',
			'name' => 'social_twitter',
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
			'key' => 'field_5aba303634fc3',
			'label' => 'Instagram',
			'name' => 'social_instagram',
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
			'key' => 'field_5aba304234fc4',
			'label' => 'Pinterest',
			'name' => 'social_pinterest',
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
			'key' => 'field_5aba306d34fc7',
			'label' => 'YouTube',
			'name' => 'social_youtube',
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
			'key' => 'field_5aba309b34fc8',
			'label' => 'Google+',
			'name' => 'social_googleplus',
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
			'key' => 'field_5aba305334fc5',
			'label' => 'Xing',
			'name' => 'social_xing',
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
			'key' => 'field_5aba306034fc6',
			'label' => 'Linkedin',
			'name' => 'social_linkedin',
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
	'active' => 1,
	'description' => '',
));

endif;
