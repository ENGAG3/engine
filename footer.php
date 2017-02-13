<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package engine
 */
	// Get customzer info
	$footer_template = get_theme_mod( 'footer_template_toggle', 0);
	$template = get_theme_mod( 'footer_template', 'Select' );

	// Announcement Bar
	$abar_toggle  = get_theme_mod( 'abar_toggle', 0 );
	$abar_positon = get_theme_mod( 'abar_positon', 'top' );

	// Check if beaver builder is active
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	$builder_is_active = is_plugin_active( 'elementor/elementor.php' );


?>

	</div><!-- #content -->

	<?php
		// Check if beaver builder is active
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		$builder_is_active = is_plugin_active( 'elementor/elementor.php' );

		if ( $footer_template == 1 ) { ?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php echo do_shortcode( "[elementor-template id=\"$template\"]" );

		} else { ?>

		<footer id="colophon" class="site-footer default-layout" role="contentinfo">

			<div class="site-info">

				<div class="container">

					<?php bloginfo('name'); ?> &copy;<?php echo date('Y'); ?> - All Rights Reserved.
				</div>

			</div>

		<?php } if ( true == get_theme_mod( 'e3_footer_link', true ) ) { ?>

			<div class="engag3_footer">
				<div class="container">

					<a href="https://www.engag3.media/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/engag3_logo_white.svg" alt="powered By ENGAG#">
					</a>

				</div>
			</div>

		<?php } ?>

	</footer><!-- #colophon -->

	<div id="slideout-overlay" class="slideout-overlay"></div>

	</div>

	<?php

		do_action( 'engine_after_footer' );


		// Check if abar is innabled
		if ( $abar_toggle == 1 && $abar_positon == "bottom") {

			do_action( 'engine_abar' );

		}
	?>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
