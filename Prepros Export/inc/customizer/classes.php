<?php


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function engine_body_customizer_classes( $classes ) {


  // Check if boxed layout is enabled
  $boxed_layout         = get_theme_mod( 'boxed_layout', 0);
  $content_layout_style = get_theme_mod( 'content_layout_style', 'content-layout-single');
  $header_layout        = get_theme_mod( 'header_layout', 'header-top');
  $sticky_header        = get_theme_mod( 'sticky_header', 'disabled');
  $sticky_header_style  = get_theme_mod( 'sticky_header_style', 'fixed');
  $slideout_menu        = get_theme_mod( 'slideout_menu', 'mobile');
  $slideout_menu_style  = get_theme_mod( 'slideout_menu_style', 'off-canvas-left');
  $site_logo        = get_theme_mod( 'site_logo', '');
  $header_template_toggle = get_theme_mod( 'header_template_toggle', 0 );

  if ($header_template_toggle == 0) {
    $header_template_is = "default-layout";
  } else {
    $header_template_is = "custom-layout";
  }

  // Page
  $abar_toggle  = get_theme_mod( 'abar_toggle', 0 );
  $abar_positon = get_theme_mod( 'abar_positon', 'top' );

  // Add post status to body
  $post_status = get_post_status();


  if ($boxed_layout == 1) {
    $site_layout = 'boxed-layout';
    $site_layout_container = 'container';
  } else {
    $site_layout = 'full-layout';
    $site_layout_container = '';
  }
  // Add all classes to single string
  $body_classes = $post_status . ' ' .  $site_layout . ' ' . $content_layout_style . ' ' . $header_layout . ' sticky-header-' . $sticky_header . ' sticky-header-style-' . $sticky_header_style . ' slideout-menu-' . $slideout_menu . ' slideout-menu-' . $slideout_menu_style;



	$classes[] = $body_classes;
	return $classes;
}
add_filter( 'body_class', 'engine_body_customizer_classes' );

 ?>
