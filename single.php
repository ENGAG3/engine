<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package engine
 */

get_header(); ?>

<div class="content-area-wrap">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				do_action( 'engine_single_post_before' );

				get_template_part( 'template-parts/content', 'single', get_post_format() );

				the_post_navigation();

				do_action( 'engine_single_post_after' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php do_action( 'engine_sidebar' ); ?>

</div>

<?php get_footer(); // Get the Footer
