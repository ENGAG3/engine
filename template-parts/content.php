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
	<header class="entry-header">

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-banner">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					 <?php the_post_thumbnail(); ?>
			 	</a>
			</div>
		<?php endif; ?>

		<div class="entry-header-text">

			<?php  the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php engine_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php

			echo wp_trim_words( get_the_content(), 40, '...' );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'engine' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php engine_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
