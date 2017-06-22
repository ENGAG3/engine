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
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<?php
  // Check if boxed layout is enabled
  $boxed_layout         = get_theme_mod( 'boxed_layout', 0);
  $slideout_menu        = get_theme_mod( 'slideout_menu', 'mobile');
  $slideout_menu_style  = get_theme_mod( 'slideout_menu_style', 'off-canvas-left');
  $header_template_toggle = get_theme_mod( 'header_template_toggle', 0 );

  // Page
  $abar_toggle  = get_theme_mod( 'abar_toggle', 0 );
  $abar_positon = get_theme_mod( 'abar_positon', 'top' );

  if ($boxed_layout == 1) {
    $site_layout = 'boxed-layout';
    $site_layout_container = 'container';
  } else {
    $site_layout = 'full-layout';
    $site_layout_container = '';
  }


?>


<body <?php body_class(); ?>>

<div id="page" class="site <?php echo $site_layout_container; ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'engine' ); ?></a>

  <?php if ( !is_page_template( 'templates/blank.php' ) ) { ?>

    <?php
    if ( $abar_toggle == 1 && $abar_positon == "top") {
      do_action( 'engine_abar' );
    } ?>

    <?php do_action( 'engine_before_header' ); ?>

    <header id="masthead" class="site-header" role="banner">

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

    <?php } ?>

    <?php do_action( 'engine_before_content' ); ?>


	<div id="content-wrap" class="site-content-wrap">

    <?php if ( $abar_toggle == 1 && $abar_positon == "menu") {
      do_action( 'engine_abar' );
    } ?>

		<div id="content" class="site-content">
