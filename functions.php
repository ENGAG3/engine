<?php
/**
 * engine functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package engine
 */
if ( ! function_exists( 'engine_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function engine_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on engine, use a find and replace
	 * to change 'engine' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'engine', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'engine' ),
		'slideout' => esc_html__( 'Slideout Menu', 'engine' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	// // Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'engine_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif;
add_action( 'after_setup_theme', 'engine_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function engine_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'engine_content_width', 900 );
}
add_action( 'after_setup_theme', 'engine_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function engine_scripts() {

  wp_enqueue_style( 'engine-style',  get_template_directory_uri() . '/style.css?v=101' );

	wp_enqueue_script( 'engine-script', get_template_directory_uri() . '/assets/js/script-dist.js', array('jquery'), '20151215', true );

  wp_enqueue_style( 'animsition-style',  get_template_directory_uri() . '/assets/css/animsition.min.css?v=101' );

	wp_enqueue_script( 'animsition-script', get_template_directory_uri() . '/assets/js/animsition.min.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'engine_scripts' );

require get_template_directory() . '/inc/customizer/font-styles.php';
add_action( 'wp_enqueue_scripts', 'engine_font_styles' );

require get_template_directory() . '/inc/customizer/field-styles.php';
add_action( 'wp_enqueue_scripts', 'engine_field_styles' );


function engine_custom_css() {
  $custom_css  = get_theme_mod( 'css_code', '');
  wp_add_inline_style( 'engine-style', $custom_css );
} add_action( 'wp_enqueue_scripts', 'engine_custom_css' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Recommend the Kirki plugin
 */
require get_template_directory() . '/inc/customizer/include-kirki.php';

/**
 * Load the Kirki Fallback class
 */
require get_template_directory() . '/inc/customizer/kirki-fallback.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/customizer/style.php';
require get_template_directory() . '/inc/customizer/js.php';
require get_template_directory() . '/inc/customizer/classes.php';

/**
 * Load Beaver Builder compatibility file.
 */
require get_template_directory() . '/inc/beaverbuilder/beaverbuilder.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack/jetpack.php';

/**
 * Shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';

require get_template_directory() . '/inc/engine-template-hooks.php';
require get_template_directory() . '/inc/engine-template-fonctions.php';

// WooCommerce
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );

function edit_upload_types($existing_mimes = array()) {
    // allow .woff
    $existing_mimes['woff'] = 'font/woff';
    // add as many as you want with the same syntax
    // disallow .jpg files
    // unset( $existing_mimes['jpg'] );
    return $existing_mimes;
}
add_filter('upload_mimes', 'edit_upload_types');


function engine_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'engine_setup' );

function jk_dequeue_styles( $enqueue_styles ) {
	// unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	// unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
} add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );



// Disable admin access to raguler users
function engine_remove_admin_bar() {
	if( !is_super_admin() )
		add_filter( 'show_admin_bar', '__return_false' );
}
add_action('wp', 'engine_remove_admin_bar');



// Commnets form

// Remove website field
function engine_disable_comment_url($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','engine_disable_comment_url');
