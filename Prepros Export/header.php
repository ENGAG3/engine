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

  $header_template_toggle = get_theme_mod( 'header_template_toggle', 0 );
  $header_template        = get_theme_mod( 'header_template', 0 );

// Check if boxed layout is enabled
  $boxed_layout         = get_theme_mod( 'boxed_layout', 0);
  $content_layout_style = get_theme_mod( 'content_layout_style', 'content-layout-single');
  $header_layout        = get_theme_mod( 'header_layout', 'header-top');
  $sticky_header        = get_theme_mod( 'sticky_header', 'disabled');
  $sticky_header_style  = get_theme_mod( 'sticky_header_style', 'fixed');
  $slideout_menu        = get_theme_mod( 'slideout_menu', 'mobile');
  $slideout_menu_style  = get_theme_mod( 'slideout_menu_style', 'off-canvas-left');

  $site_logo        = get_theme_mod( 'site_logo', '');

  // Page
  $page_sidebar = get_theme_mod( 'page_sidebar', 1 );

  if ($page_sidebar == 1) {

    $sidebar_layout = get_theme_mod( 'page_sidebar_layout', 'content-sidebar' );

  } else {

    $sidebar_layout = 'sidebar-disabled';

  }


  if ($boxed_layout == 1) {

    $site_layout = 'boxed-layout';

    $site_layout_container = 'container';

  } else {

    $site_layout = 'full-layout';

    $site_layout_container = '';

  }

  // Add all classes to single string
  $body_classes = $site_layout . ' ' . $content_layout_style . ' ' . $header_layout . ' sticky-header-' . $sticky_header . ' sticky-header-style-' . $sticky_header_style . ' slideout-menu-' . $slideout_menu . ' slideout-menu-' . $slideout_menu_style . ' ' . $sidebar_layout;
?>


<body <?php body_class($body_classes); ?>>



<!-- Swipe Menu -->

<?php  if (  $slideout_menu != 'disabled' && $slideout_menu_style == 'swipe-left' ) {

  do_action( 'engine_slideout_menu' );

} ?>


<div id="page" class="site <?php echo $site_layout_container; ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'engine' ); ?></a>

		<?php  // Check if "use template for header" is set in the customizer
			if ( $header_template_toggle == 1 ) { ?>

      <header id="masthead" class="site-header custom-layout" role="banner">

        <?php echo do_shortcode( "[fl_builder_insert_layout id=\"$header_template\"]" );

			} else { ?>

      <header id="masthead" class="site-header default-layout" role="banner">

        <div class="site-header-wrap container">

          <div class="site-branding">

            <h1 class="site-title h2">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

                <?php // No Custom Logo, just display the site's name
                if (!has_custom_logo()) { ?>

                  <?php bloginfo('name'); ?>

                <?php } else {

                  the_custom_logo();

                } ?>

              </a>
            </h1>



          </div><!-- .site-branding -->

          <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
              Menu
              <div class="menu-icon">
                <span class="bar-1"></span>
                <span class="bar-2"></span>
                <span class="bar-3"></span>
              </div>

            </button>
          </nav><!-- #site-navigation -->

        </div>

			<?php };?>

      <!-- Check if raguler (not swipe) Menu is enabled -->
      <?php  if (  $slideout_menu != 'disabled' && $slideout_menu_style == 'dropdown' ) { ?>
        <div class="dropdown-menu-wrap container">
          <?php do_action( 'engine_slideout_menu' ); ?>
        </div>
      <?php } ?>

    	</header><!-- #masthead -->

      <!-- Check if raguler (not swipe) Menu is enabled -->
      <?php  if (  $slideout_menu != 'disabled' && $slideout_menu_style != 'swipe-left' && $slideout_menu_style != 'dropdown') {

        do_action( 'engine_slideout_menu' );

      } ?>





	<div id="content-wrap" class="site-content-wrap">


		<div id="content" class="site-content container">
