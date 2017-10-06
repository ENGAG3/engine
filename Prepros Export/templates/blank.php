<?php
/*
Template Name: Blank layout
Template Post Type: post, page, product, app_page, ig-feed
*/

get_header(); ?>

<?php do_action( 'engine_page_before' ); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php do_action( 'engine_page_after' ); ?>

<?php get_footer(); // Get the Footer
