<?php

if ( ! function_exists( 'engine_display_comments' ) ) {
	/**
	 * engine display comments
	 *
	 * @since  1.0.0
	 */
	function engine_display_comments() {

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

	}
}


if ( ! function_exists( 'engine_get_main_sidebar' ) ) {
	/**
	 * Display engine sidebar
	 *
	 * @uses get_sidebar()
	 * @since 1.0.0
	 */
	function engine_get_main_sidebar() {

   $page_sidebar       = get_theme_mod( 'page_sidebar', 1 );
   $main_sidebar_width = get_theme_mod( 'main_slider_width', '20' );

     if ($page_sidebar  == 1 ) { ?>

       <aside id="secondary" class="main-sidebar widget-area" role="complementary" style="flex-basis: <?php echo $main_sidebar_width;?>%">
         <?php dynamic_sidebar( 'main' ); ?>
       </aside><!-- #secondary -->

     <?php }

	}
}


if ( ! function_exists( 'engine_get_secondary_sidebar' ) ) {
	/**
	 * Display engine sidebar
	 *
	 * @uses get_sidebar()
	 * @since 1.0.0
	 */
	function engine_get_secondary_sidebar() {

  $page_sidebar            = get_theme_mod( 'page_sidebar', 1 );
  $sidebar_layout          = get_theme_mod( 'page_sidebar_layout', 'content-sidebar' );
  $secondary_sidebar_width = get_theme_mod( 'secondary_slider_width', '20' );

   if ($page_sidebar  == 1 ) {

      if ( $sidebar_layout == 'sidebar-content-sidebar') { ?>

        <aside id="secondary" class="secondary-sidebar widget-area" role="complementary" style="flex-basis: <?php echo $secondary_sidebar_width;?>%">
          <?php dynamic_sidebar( 'secondary' ); ?>
        </aside><!-- #secondary -->

      <?php }
    }
	}
}


if ( ! function_exists( 'engine_get_slideout_menu' ) ) {
	/**
	 * Display engine Slideout Menu
	 *
	 * @uses get_sidebar()
	 * @since 1.0.0
	 */
	function engine_get_slideout_menu() { ?>

		<div class="slideout-menu-wrap">

			<div id="slideout-navigation" class="slideout-navigation" aria-expanded="false">

				<div class="slideout-inner">

					<?php // Check if slideout Menu is using template
					if ( true == get_theme_mod( 'slideout_menu_template_toggle', false ) ) {

						$template = get_theme_mod( 'slideout_menu_template', 'Select' );

						echo do_shortcode( "[fl_builder_insert_layout id=\"$template\"]" );

					} else { ?>

						<div class="default-layout">
							<button id="menu-close" class="menu-close">
								Close Menu
								<div class="menu-icon">
									<span class="bar-1"></span>
									<span class="bar-2"></span>
									<span class="bar-3"></span>
								</div>
							</button>

							<nav>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</nav>
						</div>

					<?php } ?>

				</div>

			</div>

		</div>

	<?php }
}
