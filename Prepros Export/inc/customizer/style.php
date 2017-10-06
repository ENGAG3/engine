<?php

function customizer_css() {

// Get Layout Settings
$content_width 		 	 	 = get_theme_mod( 'content_width', 1140 );

// Get typography settings
$body_font_size 		 	 = get_theme_mod( 'body_font_size', 15 );
$body_line_height 		 = get_theme_mod( 'body_line_height', 1.7 );

$h1_font_size		 			 = get_theme_mod( 'header_font_size', 32 );
$header_letter_spacing = get_theme_mod( 'header_letter_spacing', 0 );
$header_line_height 	 = get_theme_mod( 'header_line_height', 1 );
$header_font_style 	 	 = get_theme_mod( 'header_font_style' );

$body_link_color 	 	 	 = get_theme_mod( 'body_link_color', '#2ea3f2' );
$body_text_color 	 	 	 = get_theme_mod( 'body_text_color', '#666666' );
$header_text_color 	 	 = get_theme_mod( 'header_text_color', '#555555' );

// Layout
$body_background_toggle 			= get_theme_mod( 'body_background_toggle', 0 );
$body_background_color 	  		= get_theme_mod( 'body_background_color', '#ffffff' );
$body_background_image    		= get_theme_mod( 'body_background_image', '' );
$content_background_overlay   = get_theme_mod( 'content_background_overlay', 'rgba(0,0,0,0)' );
$body_background_repeat   		= get_theme_mod( 'body_background_repeat', 'cover' );
$body_background_style    		= get_theme_mod( 'body_background_style', 'scroll' );
$content_background_color 	  = get_theme_mod( 'content_background_color', '#ffffff' );


// Sidebar
$main_sidebar_width = get_theme_mod( 'main_slider_width', '20' );
$secondary_sidebar_width = get_theme_mod( 'secondary_slider_width', '20' );

$main_sidebar_width_s 		 = round($main_sidebar_width * ((85-$amount) / 100), 0);
$secondary_sidebar_width_s = round($secondary_sidebar_width * ((85-$amount) / 100), 0);



$sidebar_total_width = $main_sidebar_width + $secondary_sidebar_width;
$sidebar_total_width_s = $main_sidebar_width_s + $secondary_sidebar_width_s;


// Header

$header_width_desktop = get_theme_mod( 'header_width_desktop', 28 );

$header_background_color 	= get_theme_mod( 'header_background_color', '#ffffff' );
$header_link_color 	  		= get_theme_mod( 'header_link_color', '#777777' );
$header_link_color_active = get_theme_mod( 'header_link_color_active', '' );

// Top Bar
$topbar_background_color 	= get_theme_mod( 'topbar_background_color', '#080808' );
$topbar_link_color	  		= get_theme_mod( 'topbar_link_color', '#ffffff' );
$topbar_link_color_active = get_theme_mod( 'topbar_link_color_active', '' );


// Slideout
$slideout_background_color 	= get_theme_mod( 'slideout_background_color', '#222222' );
$slideout_link_color 	  		= get_theme_mod( 'slideout_link_color', '#ffffff' );
$slideout_link_color_active = get_theme_mod( 'slideout_link_color_active', '' );
$slideout_overlay 				  = get_theme_mod( 'slideout_overlay', 'rgba(0,0,0,0.75)' );

// Abar
$abar_background_color = get_theme_mod( 'abar_background_color', '#2ea3f2' );
$abar_text_color 			 = get_theme_mod( 'abar_text_color', '#ffffff' );

// Footer
$footer_background_color 	= get_theme_mod( 'footer_background_color', '#ffffff' );
$footer_link_color 	  		= get_theme_mod( 'footer_link_color', '#777777' );
$footer_link_color_active = get_theme_mod( 'footer_link_color_active', '' );

// Get Sticky Header style
$sticky_header_style = get_theme_mod( 'sticky_header_style', 'fixed' );

// Get Slideout menu style
$slideout_menu_style = get_theme_mod( 'slideout_menu_style', 'off-canvas-left' );

// Get Brakepoints
$small_breakpoint_value = get_theme_mod( 'small_device_breakpoint', 768 );
$medium_breakpoint_value = get_theme_mod( 'medium_device_breakpoint', 992 );

$small_breakpoint =  $small_breakpoint_value . "px";
$medium_breakpoint = $medium_breakpoint_value . "px";
?>

<style>

	body {
		color: <?php echo $body_text_color; ?>;
		background-color: <?php echo $body_background_color; ?>;
		<?php if ($body_background_toggle == 1) { ?>
			background-image: url('<?php echo esc_url( $body_background_image );?>');
			<?php if ($body_background_repeat == 'cover') { ?>
				background-size: <?php echo $body_background_repeat;?>;
			<?php } else {?>
				background-repeat: <?php echo $body_background_repeat;?>;
			<?php } ?>
		<?php } ?>
		background-attachment: <?php echo $body_background_style;?>;
	}

	.site {
		<?php if ($body_background_toggle == 1) { ?>
			background-color: <?php echo $content_background_overlay; ?>;
		<?php } ?>
	}


	/* Layout */
	body.content-layout-single .site-content,
	.content-layout-boxed .main-sidebar>.widget,
	.content-layout-boxed .secondary-sidebar>.widget,
	.content-layout-boxed .site-main>article {
		background-color: <?php echo $content_background_color; ?>;
	}


	/* Header */
	.site-header {
		color: <?php echo $header_link_color; ?>;
		background-color: <?php echo $header_background_color; ?>;
	}

	.site-header a {
		color: <?php echo $header_link_color; ?>;
	}

	.site-header a:hover,
	.current-menu-item > a,
	.current-menu-ancestor > a {
		color: <?php echo $body_link_color; ?>;
		color: 	<?php echo $header_link_color_active; ?>;
	}

	/*Top Bar*/

	.topbar {
		color: <?php echo $topbar_link_color ?>;
		background-color: <?php echo $topbar_background_color ?>;
	}

	.topbar a {
		color: <?php echo $topbar_link_color ?>;
	}

	.topbar a:hover {
		color: <?php echo $body_link_color; ?>;
		color: 	<?php echo $header_link_color_active; ?>;
		color: <?php echo $topbar_link_color_active ?>;
	}

	/*Abar*/
	.abar {
		color: <?php echo $abar_text_color ?>;
		background-color: <?php echo $abar_background_color ?>;
	}

	/*Side header styles*/

	html:not(.small-device) .header-left .site-header,
	html:not(.small-device) .header-right .site-header {
		width: <?php echo $header_width_desktop; ?>0px;
	}

	html:not(.small-device) .header-left .site-content-wrap,
	html:not(.small-device) .header-right .site-content-wrap {
		width: calc(100% - <?php echo $header_width_desktop; ?>0px);
	}

	html:not(.small-device) .site-header.default-layout .main-navigation .sub-menu {
    background-color: <?php echo $header_background_color; ?>;
		border: solid 1px rgba(175,175,175,0.25);
	}

	/* Footer */
	.site-footer {
		color: <?php echo $footer_link_color; ?>;
		background-color: <?php echo $footer_background_color; ?>;
	}

	.site-footer a {
		color: <?php echo $footer_link_color; ?>;
	}

	.site-footer a:hover,
	.current-menu-item > a,
	.current-menu-ancestor > a {
		color: 	<?php echo $footer_link_color_active; ?>;
	}

	/* Slideout Menu */
	.slideout-navigation {
		color: <?php echo $slideout_link_color; ?>;
		background-color: <?php echo $slideout_background_color; ?>;
	}

	.slideout-navigation a {
		color: <?php echo $slideout_link_color; ?>;
	}

	.slideout-navigation a:hover,
  .slideout-navigation .current-menu-item > a,
	.slideout-navigation .current-menu-ancestor > a {
		color: 	<?php echo $slideout_link_color_active; ?>;
	}

	.slideout-menu-is-active .slideout-overlay {
	  background-color: <?php echo $slideout_overlay; ?>;
	}

	/* contaner */
	.container {
		max-width: <?php echo $content_width; ?>px;
	}

	/* Typography */
	a {
		color: <?php echo $body_link_color; ?>;
	}

	h1, h2, h3, h4, h5, h6 {
		color: <?php echo $header_text_color; ?>;
		/*line-height: <?php echo $header_line_height; ?>rem;*/
		letter-spacing: <?php echo $header_letter_spacing; ?>px;
	}



	/*Sidebar settings*/
  .content-area {
  	width: 100%;
  }

	html.large-device .content-sidebar .main-sidebar,
	html.large-device .sidebar-content .main-sidebar {
		flex-basis: <?php echo $main_sidebar_width_s; ?>0px;
	}

	html.large-device .header-top.content-sidebar .content-area,
	html.large-device .header-top.sidebar-content .content-area {
		width: calc(100% - <?php echo $main_sidebar_width_s; ?>0px)
	}

	html.large-device .header-top.sidebar-content-sidebar .main-sidebar {
		flex-basis: <?php echo $main_sidebar_width_s; ?>0px;
	}

	html.large-device .header-top.sidebar-content-sidebar .secondary-sidebar {
		flex-basis: <?php echo $secondary_sidebar_width_s; ?>0px;
	}

	html.large-device .header-top.sidebar-content-sidebar .content-area {
		width: calc(100% - <?php echo $sidebar_total_width_s; ?>0px)
	}

	@media (min-width: 1200px) {

		html.large-device .header-top.content-sidebar .main-sidebar,
		html.large-device .header-top.sidebar-content .main-sidebar {
			flex-basis: <?php echo $main_sidebar_width; ?>0px;
		}

		html.large-device .header-top.content-sidebar .content-area,
		html.large-device .header-top.sidebar-content .content-area {
			width: calc(100% - <?php echo $main_sidebar_width; ?>0px)
		}

		html.large-device .header-top.sidebar-content-sidebar .main-sidebar {
			flex-basis: <?php echo $main_sidebar_width; ?>0px;
		}

		html.large-device .header-top.sidebar-content-sidebar .secondary-sidebar {
			flex-basis: <?php echo $secondary_sidebar_width; ?>0px;
		}

		html.large-device .header-top.sidebar-content-sidebar .content-area {
			width: calc(100% - <?php echo $sidebar_total_width; ?>0px)
		}

	}

</style>


<?php } add_action('wp_head', 'customizer_css');
