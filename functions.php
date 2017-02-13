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
	$GLOBALS['content_width'] = apply_filters( 'engine_content_width', 640 );
}
add_action( 'after_setup_theme', 'engine_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function engine_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'engine' ),
		'id'            => 'main',
		'description'   => esc_html__( 'Add widgets here.', 'engine' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 2', 'engine' ),
		'id'            => 'secondary',
		'description'   => esc_html__( 'Add widgets here.', 'engine' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'engine_widgets_init' );
//
// //Making jQuery to load from Google Library
// function replace_jquery() {
// 	if (!is_admin()) {
// 		// comment out the next two lines to load the local copy of jQuery
// 		wp_deregister_script('jquery');
// 		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '1.11.3');
// 		wp_enqueue_script('jquery');
// 	}
// }
// add_action('init', 'replace_jquery');
/**
 * Enqueue scripts and styles.
 */
function engine_scripts() {
	wp_enqueue_style( 'engine-style', get_stylesheet_uri() );
	// wp_enqueue_script( 'smoothstate-js', get_template_directory_uri() . '/assets/js/smoothstate.min.js', array( 'jquery' ), '0.5.2' );
	wp_enqueue_script( 'engine-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'engine-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'engine-headroom', get_template_directory_uri() . '/assets/js/headroom.min.js', array('jquery'), '20151215', true );
	wp_enqueue_style( 'engine-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
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
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';
function theme_prefix_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
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
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
function edit_upload_types($existing_mimes = array()) {
    // allow .woff
    $existing_mimes['woff'] = 'font/woff';
    // add as many as you want with the same syntax
    // disallow .jpg files
    // unset( $existing_mimes['jpg'] );
    return $existing_mimes;
}
add_filter('upload_mimes', 'edit_upload_types');



// Diable admin access to raguler users
function splen_remove_admin_bar() {
	if( !is_super_admin() )
		add_filter( 'show_admin_bar', '__return_false' );
}
add_action('wp', 'splen_remove_admin_bar');



// Commnets form

// Remove website field
function crunchify_disable_comment_url($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','crunchify_disable_comment_url');

//
//
//
// add_action("gform_user_registered", "autologin", 10, 4);
// function autologin($user_id, $config, $entry, $password) {
//         wp_set_auth_cookie($user_id, false, '');
// }







// Add Image Sizes

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'blog_thumbnail', 450, 250, true ); //(cropped)
	add_image_size( 'blog_featured', 950, 500, true ); //(cropped)
}
add_filter('image_size_names_choose', 'my_image_sizes');

function my_image_sizes($sizes) {
$addsizes = array(
	"blog_thumbnail" => __( "Blog Thumbnail"),
	"blog_featured" => __( "Blog Featured")
);
$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}


// UAB
add_filter('uabb_blog_posts_featured_image_sizes', 'myfilter');

function myfilter( $arr ){
    $arr['blog_thumbnail'] = __('Blog Thumbnail', 'uabb');
    return $arr;
}
