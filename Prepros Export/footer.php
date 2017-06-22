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

?>

	</div><!-- #content -->

  <?php if ( !is_page_template( 'templates/blank.php' ) ) { ?>

		<footer id="colophon" class="site-footer" role="contentinfo">

				<?php do_action( 'engine_footer' );  ?>

		</footer><!-- #colophon -->

		<div id="slideout-overlay" class="slideout-overlay"></div>

		</div>

		<?php do_action( 'engine_after_footer' );

			// Check if abar is innabled
			if ( $abar_toggle == 1 && $abar_positon == "bottom") {

				do_action( 'engine_abar' );

			} ?>

	<?php } ?>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
