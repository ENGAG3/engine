<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package engine
 */

	// Get the widht of the secondary sidebar from the customizer
 $secondary_sidebar_width = get_theme_mod( 'secondary_slider_width', '20' );

?>

<aside id="secondary" class="secondary-sidebar widget-area" role="complementary" style="flex-basis: <?php echo $secondary_sidebar_width;?>%">
	<?php dynamic_sidebar( 'secondary' ); ?>
</aside><!-- #secondary -->
