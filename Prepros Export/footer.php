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


?>

	</div><!-- #content -->

	<?php if ( $footer_template == 1 ) { ?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php echo do_shortcode( "[fl_builder_insert_layout id=\"$template\"]" );

		} else { ?>

		<footer id="colophon" class="site-footer default-layout" role="contentinfo">

			<div class="site-info">

				<div class="container">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'engine' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'engine' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'engine' ), 'engine', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
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
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
