<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package storefront
 */

 get_header(); ?>

 <div class="content-area-wrap full-width-template">

 		<div id="primary" class="content-area">
 			<main id="main" class="site-main" role="main">

 				<?php while ( have_posts() ) : the_post();

 					do_action( 'engine_page_before' );

 					get_template_part( 'template-parts/content', 'page' );

 					do_action( 'engine_page_after' );

 				endwhile; // End of the loop. ?>

 			</main><!-- #main -->
 		</div><!-- #primary -->

 </div>

 <?php get_footer(); // Get the Footer
