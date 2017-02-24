<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package engine
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>


<?php
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
  $page_sidebar = get_theme_mod( 'page_sidebar', 1 );
  $abar_toggle  = get_theme_mod( 'abar_toggle', 0 );
  $abar_positon = get_theme_mod( 'abar_positon', 'top' );


  // Blog

  $blog_desktop_columns = get_theme_mod( 'blog_desktop_columns', 'column-1' );
  $blog_tablet_columns  = get_theme_mod( 'blog_tablet_columns', 'column-1' );
  $blog_phone_columns   = get_theme_mod( 'blog_phone_columns', 'column-1' );

  $blog_sidebar = get_theme_mod( 'blog_sidebar', 0 );

  // Main Sidebar
  if ($page_sidebar == 1) {
    $sidebar_layout = get_theme_mod( 'page_sidebar_layout', 'content-sidebar' );
  } else {
    $sidebar_layout = 'sidebar-disabled';
  }


  // Blog Sidebar
  if ($blog_sidebar == 1) {
    $blog_sidebar_layout = get_theme_mod( 'blog_sidebar_layout', 'content-sidebar' );
  } else {
    $blog_sidebar_layout = 'sidebar-disabled';
  }



  if ($boxed_layout == 1) {
    $site_layout = 'boxed-layout';
    $site_layout_container = 'container';
  } else {
    $site_layout = 'full-layout';
    $site_layout_container = '';
  }
  // Add all classes to single string
  $body_classes = $site_layout . ' ' . $content_layout_style . ' ' . $header_layout . ' sticky-header-' . $sticky_header . ' sticky-header-style-' . $sticky_header_style . ' slideout-menu-' . $slideout_menu . ' slideout-menu-' . $slideout_menu_style . ' ' . $sidebar_layout . ' blog-desktop-' . $blog_desktop_columns . ' blog-tablet-' . $blog_tablet_columns . ' blog-phone-' . $blog_phone_columns . ' blog-' . $blog_sidebar_layout;
?>


<body <?php body_class($body_classes); ?>>

<div id="page" class="site <?php echo $site_layout_container; ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'engine' ); ?></a>

  <?php  // Check if abar is innabled
  if ( $abar_toggle == 1 && $abar_positon == "top") {
    do_action( 'engine_abar' );
  } ?>

  <?php do_action( 'engine_before_header' ); ?>

    <header id="masthead" class="site-header <?php echo $header_template_is; ?>" role="banner">

      <?php do_action( 'engine_header' ); ?>

      <!-- Check if raguler (not swipe) Menu is enabled -->
      <?php  if (  $slideout_menu != 'disabled' && $slideout_menu_style == 'dropdown' ) { ?>
        <div class="dropdown-menu-wrap container">
          <?php do_action( 'engine_slideout_menu' ); ?>
        </div>
      <?php } ?>

    </header>

  <?php do_action( 'engine_after_header' ); ?>

    <!-- Check if raguler (not swipe) Menu is enabled -->
    <?php  if (  $slideout_menu != 'disabled' && $slideout_menu_style != 'dropdown') {
      do_action( 'engine_slideout_menu' );
    } ?>

    <?php do_action( 'engine_before_content' ); ?>


	<div id="content-wrap" class="site-content-wrap">

    <?php // Check if abar is innabled
    if ( $abar_toggle == 1 && $abar_positon == "menu") {
      do_action( 'engine_abar' );
    } ?>

		<div id="content" class="site-content">
