<?php

if (!function_exists('mercury_theme_setup')) {

	function mercury_theme_setup()
	{
		// Registrerar platser för våra fasta menyer. Visas i temat med wp_nav_menu()
		register_nav_menus(
			[
				'primary' => esc_html__('Main navigation', 'mercurytheme'),
				'footer'  => esc_html__('Footer navigation', 'mercurytheme'),
			]
		);

		/**
		 * Add post-formats support.
		 */
		add_theme_support('post-formats', [
			'gallery',
			'image',
			'quote',
			'video',
		]);
		// Add theme support for Automatic Feed Links
		add_theme_support('automatic-feed-links');

		// Add theme support for Featured Images
		add_theme_support('post-thumbnails');

		// Add theme support for Custom Background
		$background_args = [
			'default-color'          => 'FFFFFF',
			'default-image'          => '',
			'default-repeat'         => '',
			'default-position-x'     => '',
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		];
		//add_theme_support( 'custom-background', $background_args );

		// Add theme support for Custom Header
		$header_args = [
			'default-image'      => '',
			'width'              => 0,
			'height'             => 0,
			'flex-width'         => true,
			'flex-height'        => true,
			'uploads'            => true,
			'random-default'     => false,
			'header-text'        => true,
			'default-text-color' => 'Detta är mitt tema',
			'video'              => true,
		];
		add_theme_support('custom-header', $header_args);

		// Add theme support for HTML5 Semantic Markup
		add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

		// Add theme support for document Title tag
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		// Add theme support for Translation
		//load_theme_textdomain( 'wcmtheme', get_template_directory() . '/language' );

		add_image_size('wcm-gallery', '500', '300', true);
	}
}
add_action('after_setup_theme', 'mercury_theme_setup');

/**
 * Här laddar vi in alla våra styles och scripts.
 *
 * @return void
 */
function add_theme_scripts()
{
	wp_enqueue_style('style', get_theme_file_uri('dist/main.css'),);

	wp_enqueue_script('my-scripts', get_theme_file_uri('dist/script.js'), null);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function social_link_classes($classes, $item, $args)
{
	if ('footer' === $args->theme_location) {
		$classes[] = "social-link";
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'social_link_classes', 10, 4);

/**
 * Registrera en Custom Post Type
 * https://developer.wordpress.org/plugins/post-types/
 *
 * Läs mer om funktionen register_post_type och dess argument nedan.
 * https://developer.wordpress.org/reference/functions/register_post_type/
 *
 */
function my_custom_post_type()
{
	register_post_type('wcm_travel', [
		'labels'      => [
			'name'          => __('wcm travels'),
			'singular_name' => __('wcm travel'),
		],
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => [],
		'menu_icon'   => '',
		'supports'    => [],
	]);

	register_post_type('travel_matches', [
		'labels'      => [
			'name'          => __('travel matches'),
			'singular_name' => __('travel match'),
		],
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => [],
		'menu_icon'   => '',
		'supports'    => [],
	]);

	register_post_type('travel_cup', [
		'labels'      => [
			'name'          => __('travel cups'),
			'singular_name' => __('travel cup'),
		],
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => [],
		'menu_icon'   => '',
		'supports'    => [],
	]);

	register_post_type('travel_camp', [
		'labels'      => [
			'name'          => __('travel camps'),
			'singular_name' => __('travel camp'),
		],
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => [],
		'menu_icon'   => '',
		'supports'    => [],
	]);

	register_post_type('travel_soccer', [
		'labels'      => [
			'name'          => __('travel soccer'),
			'singular_name' => __('travel soccer'),
		],
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => [],
		'menu_icon'   => '',
		'supports'    => [],
	]);

	register_post_type('netr_team', [
		'labels'      => [
			'name'          => __('netr teams'),
			'singular_name' => __('netr team'),
		],
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => [],
		'menu_icon'   => '',
		'supports'    => [],
	]);
}

add_action('init', 'my_custom_post_type',);

/**
 * Registrera Custom Taxonomies
 * https://developer.wordpress.org/plugins/taxonomies/
 *
 * Mer information kring funktionen register_taxonomy
 * https://developer.wordpress.org/reference/functions/register_taxonomy/
 */

// Bättre namn på funktionen....
function my_custom_tax()
{
	$labels = [
		'name'              => _x('travel ages', 'taxonomy general name'),
		'singular_name'     => _x('travel age', 'taxonomy singular name'),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'labels' => $labels,
		'hierarchical' => false,
	];
	register_taxonomy('travel_age', ['wcm_travel', 'travel_camp', 'travel_cup', 'page'], $args);

	//--
	$labels = [
		'name'              => _x('travel countries', 'taxonomy general name'),
		'singular_name'     => _x('travel country', 'taxonomy singular name'),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'labels' => $labels,
		'hierarchical' => false,
	];
	register_taxonomy('travel_country', ['wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'page'], $args);

	//--
	$labels = [
		'name'              => _x('travel sport leagues', 'taxonomy general name'),
		'singular_name'     => _x('travel sport league', 'taxonomy singular name'),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'labels' => $labels,
		'hierarchical' => false,
	];
	register_taxonomy('travel_sport_league', ['wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'page'], $args);

	//--
	$labels = [
		'name'              => _x('travel sport types', 'taxonomy general name'),
		'singular_name'     => _x('travel sport type', 'taxonomy singular name'),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'labels' => $labels,
		'hierarchical' => false,
	];
	register_taxonomy('travel_sport_type', ['wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'travel_matches', 'page'], $args);

	$labels = [
		'name'              => _x('travel types', 'taxonomy general name'),
		'singular_name'     => _x('travel type', 'taxonomy singular name'),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'labels' => $labels,
		'hierarchical' => false,
	];
	register_taxonomy('travel_type', ['wcm_travel', 'travel_camp', 'travel_cup', 'travel_matches', 'page'], $args);
}
add_action('init', 'my_custom_tax');

/**
 * Custom Meta Boxes
 *
 * För att jobba med custom innehåll, "formulär fält", på olika post types.
 *
 * Läs och förstår hur de fungerar. Testa gärna att lägga till något manuellt.
 * https://developer.wordpress.org/plugins/metadata/
 *
 * Advanced Custom Fields är ett plugin som vanligen användas för att skapa sådana här meta-fält.
 * https://www.advancedcustomfields.com/
 */
