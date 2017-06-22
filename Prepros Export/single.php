<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package engine
 */

get_header(); ?>

<?php do_action( 'engine_single_post_before' ); ?>


	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single', get_post_format() );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php do_action( 'engine_single_post_after' ); ?>

<?php get_footer(); // Get the Footer
