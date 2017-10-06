<?php
/**
 * Template part for displaying posts.
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

				<?php  the_title( '<h1 class="entry-title">', '</h1>' );

				// if ( 'post' == get_post_type() ) : ?>

				<div class="entry-meta">
					<?php engine_posted_on(); ?>
				</div><!-- .entry-meta -->

				<?php // endif; ?>

			</div>

		</header><!-- .entry-header -->

	<?php } ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'engine' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'engine' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php  if ( ! FLBuilderModel::is_builder_enabled() ) { //Check if BB is inabled ?>

		<footer class="entry-footer">
			<?php engine_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	<?php } ?>

</article><!-- #post-## -->
