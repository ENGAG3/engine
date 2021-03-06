<?php

// Add theme support for beaver themer header / footer / Parts

if ( class_exists( 'flbuilder' )) {
	# code...

	function engine_header_footer_support() {
		add_theme_support( 'fl-theme-builder-headers' );
		add_theme_support( 'fl-theme-builder-footers' );
	  add_theme_support( 'fl-theme-builder-parts' );
	}
	add_action( 'after_setup_theme', 'engine_header_footer_support' );

	// Remove header / footer if tamplete is added
	function engine_header_footer_render() {

		// Get the header ID.
		$header_ids = FLThemeBuilderLayoutData::get_current_page_header_ids();

		// If we have a header, remove the theme header and hook in Theme Builder's.
		if ( ! empty( $header_ids ) ) {
			remove_action( 'engine_header', 'engine_do_header', 10 );
			add_action( 'engine_header', 'FLThemeBuilderLayoutRenderer::render_header' );
		}

		// Get the footer ID.
		$footer_ids = FLThemeBuilderLayoutData::get_current_page_footer_ids();

		// If we have a footer, remove the theme footer and hook in Theme Builder's.
		if ( ! empty( $footer_ids ) ) {
			remove_action( 'engine_footer', 'engine_do_footer', 10 );
			add_action( 'engine_footer', 'FLThemeBuilderLayoutRenderer::render_footer' );
		}
	}
	add_action( 'wp', 'engine_header_footer_render' );


	// Parts

	function engine_register_part_hooks() {

		return array(
			array(
				'label' => 'Header',
				'hooks' => array(
					'engine_before_header' => 'Before Header',
					'engine_after_header'  => 'After Header',
				)
			),
			array(
				'label' => 'Menu',
				'hooks' => array(
					// 'engine_sidebar_before' => 'Before Sidebar',
					'engine_sidebar' => 'Sidebar',
					// 'engine_sidebar_after' => 'After Sidebar',
				)
			),
			array(
				'label' => 'Page',
				'hooks' => array(
					'engine_before_page_content' => 'Before Page Content',
					// 'engine_footer' => 'Footer',
					'engine_after_page_content'  => 'After Page Content',
				)
			),
			array(
				'label' => 'Footer',
				'hooks' => array(
					'engine_before_footer' => 'Before Footer',
					// 'engine_footer' => 'Footer',
					'engine_after_footer'  => 'After Footer',
				)
			),
			array(
				'label' => 'WooCommerce',
				'hooks' => array(
					'woocommerce_account_dashboard' => 'Account Dashboard',
					'woocommerce_before_account_orders' => 'Account Orders',
					'woocommerce_before_account_subscriptions' => 'Account Subscriptions',
					'woocommerce_before_account_payment_methods' => 'Account Payment methods',
				)
			)
		);
	}
	add_filter( 'fl_theme_builder_part_hooks', 'engine_register_part_hooks' );


}
