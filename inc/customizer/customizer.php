<?php
/**
 * engine Theme Customizer.
 *
 * @package engine
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function engine_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'engine_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function engine_customize_preview_js() {
	wp_enqueue_script( 'engine_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'engine_customize_preview_js' );



// Check if Kirki plugin is active
if ( class_exists( 'kirki' ) ) {

	/**
	 * Add the theme configuration
	 */
	engine_Kirki::add_config( 'engine_theme', array(
		'option_type' => 'theme_mod',
		'capability'  => 'edit_theme_options',
	) );

	// Sections
	require get_template_directory() . '/inc/customizer/sections.php';

	// Controles
	require get_template_directory() . '/inc/customizer/controles/header-controles.php';
	require get_template_directory() . '/inc/customizer/controles/slideout-menu-controles.php';
	require get_template_directory() . '/inc/customizer/controles/content-controles.php';
	require get_template_directory() . '/inc/customizer/controles/typography-controles.php';
	require get_template_directory() . '/inc/customizer/controles/color-controles.php';
	require get_template_directory() . '/inc/customizer/controles/abar-controles.php';
	require get_template_directory() . '/inc/customizer/controles/social-controles.php';
	require get_template_directory() . '/inc/customizer/controles/blog-controles.php';
	require get_template_directory() . '/inc/customizer/controles/buddypress-controles.php';
	require get_template_directory() . '/inc/customizer/controles/footer-controles.php';
	require get_template_directory() . '/inc/customizer/controles/advanced-controles.php';

}
 /**
  * Enqueue the stylesheet.
  */
 function my_enqueue_customizer_stylesheet() {

 	wp_register_style( 'my-customizer-css', get_template_directory_uri() . '/assets/css/admin/customizer.css', 'all' );
 	wp_enqueue_style( 'my-customizer-css' );

	// Font Awesome
	wp_enqueue_style( 'engine-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

 }
 add_action( 'customize_controls_print_styles', 'my_enqueue_customizer_stylesheet' );







 /**
  * This is a simple function that replaces the preview notice with an image.
  * This example uses an image from http://domain.com/image.png so please add your own.
  */
 function custom_add_logo_to_customizer() { ?>
 	<script>
	jQuery(document).ready(function( $ ) {

		jQuery("#accordion-section-themes").append("<div class='customizer-toggle'><div id='toggle-sections'class='is-active'>Sections</div> <div id='toggle-general'>General</div> <div id='toggle-advanced'>Advanced</div></div>");

		$('#customize-theme-controls').addClass("show-sections"); //you can list several class names

		// Slideout Menu toggle(s)
		$('#toggle-sections').on('click', function(e) {
	      $('#toggle-sections').addClass("is-active"); //you can list several class names
	      $('#toggle-general').removeClass("is-active"); //you can list several class names
				$('#toggle-advanced').removeClass("is-active"); //you can list several class names
	      $('#customize-theme-controls').addClass("show-sections"); //you can list several class names
	      $('#customize-theme-controls').removeClass("show-general"); //you can list several class names
	      $('#customize-theme-controls').removeClass("show-advanced"); //you can list several class names
	      e.preventDefault();
	  });

		// Slideout Menu toggle(s)
		$('#toggle-general').on('click', function(e) {
	      $('#toggle-general').addClass("is-active"); //you can list several class names
	      $('#toggle-sections').removeClass("is-active"); //you can list several class names
				$('#toggle-advanced').removeClass("is-active"); //you can list several class names
				$('#customize-theme-controls').removeClass("show-sections"); //you can list several class names
				$('#customize-theme-controls').addClass("show-general"); //you can list several class names
				$('#customize-theme-controls').removeClass("show-advanced"); //you can list several class names

	      e.preventDefault();
	  });

		// Slideout Menu toggle(s)
		$('#toggle-advanced').on('click', function(e) {
	      $('#toggle-advanced').addClass("is-active"); //you can list several class names
	      $('#toggle-sections').removeClass("is-active"); //you can list several class names
				$('#toggle-general').removeClass("is-active"); //you can list several class names
				$('#customize-theme-controls').removeClass("show-sections"); //you can list several class names
				$('#customize-theme-controls').removeClass("show-general"); //you can list several class names
				$('#customize-theme-controls').addClass("show-advanced"); //you can list several class names

	      e.preventDefault();
	  });

	});
 // 	jQuery(document).ready(function($) {
 // 		"use strict";
 // 		$('div#customize-info .preview-notice').replaceWith(
  //            '<img src="https://www.engag3.media/wp-content/uploads/2016/06/cropped-engag3-logo-copy.png">'
  //        );
 // 	});
 	</script>
<?php }
add_action( 'customize_controls_print_scripts', 'custom_add_logo_to_customizer' );
