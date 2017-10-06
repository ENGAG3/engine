<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package engine
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php  if ( ! FLBuilderModel::is_builder_enabled() ) { //Check if BB is inabled ?>

		<header class="entry-header fl-post-header">

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-banner">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php endif; ?>

			<div class="entry-header-text">

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			</div>

		</header><!-- .entry-header -->

	<?php } ?>



	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'engine' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php  if ( ! FLBuilderModel::is_builder_enabled() ) { //Check if BB is inabled ?>
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'engine' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	<?php } ?>

</article><!-- #post-## -->
