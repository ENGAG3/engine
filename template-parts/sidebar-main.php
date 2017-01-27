<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package engine
 */

 // Get the widht of the main sidebar from the customizer
$main_sidebar_width = get_theme_mod( 'main_slider_width', '25' );

?>

<aside id="secondary" class="main-sidebar widget-area" role="complementary" style="flex-basis: <?php echo $main_sidebar_width;?>%">
	<?php dynamic_sidebar( 'main' ); ?>
</aside><!-- #secondary -->
