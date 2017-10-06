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

		<?php do_action( 'engine_before_footer' ); ?>

		<footer id="colophon" class="site-footer" role="contentinfo">

				<?php do_action( 'engine_footer' );  ?>

		</footer><!-- #colophon -->

		<div id="slideout-overlay" class="slideout-overlay"></div>


		<?php do_action( 'engine_after_footer' ); ?>

	<?php } ?>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
