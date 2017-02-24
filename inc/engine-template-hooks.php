<?php
/**
 * engine hooks
 *
 * @package engine
 */

/**
 * General
 *
 * @see  engine_get_sidebar()
 */
// add_action( 'engine_before_content', 'engine_header_widget_region', 10 );
add_action( 'engine_sidebar',        'engine_get_main_sidebar',          10 );
add_action( 'engine_sidebar',        'engine_get_secondary_sidebar',          20 );



/**
 * Header
 *
 * @see  engine_skip_links()
 * @see  engine_secondary_navigation()
 * @see  engine_site_branding()
 * @see  engine_primary_navigation()
 */
// add_action( 'engine_header', 'engine_skip_links',                       0 );
// add_action( 'engine_header', 'engine_site_branding',                    20 );
// add_action( 'engine_header', 'engine_secondary_navigation',             30 );
// add_action( 'engine_header', 'engine_primary_navigation_wrapper',       42 );
// add_action( 'engine_header', 'engine_primary_navigation',               50 );
// add_action( 'engine_header', 'engine_primary_navigation_wrapper_close', 68 );
add_action( 'engine_before_header', 'engine_get_tobar', 0 );
add_action( 'engine_header', 'engine_get_default_header', 0 );
add_action( 'engine_slideout_menu', 'engine_get_slideout_menu', 0 );

// /**
//  * Footer
//  *
//  * @see  engine_footer_widgets()
//  * @see  engine_credit()
//  */
// add_action( 'engine_footer', 'engine_footer_widgets', 10 );
// add_action( 'engine_footer', 'engine_credit',         20 );
//
// /**
//  * Homepage
//  *
//  * @see  engine_homepage_content()
//  * @see  engine_product_categories()
//  * @see  engine_recent_products()
//  * @see  engine_featured_products()
//  * @see  engine_popular_products()
//  * @see  engine_on_sale_products()
//  * @see  engine_best_selling_products()
//  */
// add_action( 'homepage', 'engine_homepage_content',      10 );
// add_action( 'homepage', 'engine_product_categories',    20 );
// add_action( 'homepage', 'engine_recent_products',       30 );
// add_action( 'homepage', 'engine_featured_products',     40 );
// add_action( 'homepage', 'engine_popular_products',      50 );
// add_action( 'homepage', 'engine_on_sale_products',      60 );
// add_action( 'homepage', 'engine_best_selling_products', 70 );
//
// /**
//  * Posts
//  *
//  * @see  engine_post_header()
//  * @see  engine_post_meta()
//  * @see  engine_post_content()
//  * @see  engine_init_structured_data()
//  * @see  engine_paging_nav()
//  * @see  engine_single_post_header()
//  * @see  engine_post_nav()
//  * @see  engine_display_comments()
//  */
// add_action( 'engine_loop_post',           'engine_post_header',          10 );
// add_action( 'engine_loop_post',           'engine_post_meta',            20 );
// add_action( 'engine_loop_post',           'engine_post_content',         30 );
// add_action( 'engine_loop_post',           'engine_init_structured_data', 40 );
// add_action( 'engine_loop_after',          'engine_paging_nav',           10 );
// add_action( 'engine_single_post',         'engine_post_header',          10 );
// add_action( 'engine_single_post',         'engine_post_meta',            20 );
// add_action( 'engine_single_post',         'engine_post_content',         30 );
// add_action( 'engine_single_post',         'engine_init_structured_data', 40 );
// add_action( 'engine_single_post_bottom',  'engine_post_nav',             10 );
add_action( 'engine_single_post_after',  'engine_display_comments',     20 );
add_action( 'engine_single_post_after',  'engine_get_post_nav',     30 );
// add_action( 'engine_post_content_before', 'engine_post_thumbnail',       10 );
//
// /**
//  * Pages
//  *
//  * @see  engine_page_header()
//  * @see  engine_page_content()
//  * @see  engine_init_structured_data()
//  * @see  engine_display_comments()
//  */
// add_action( 'engine_page',       'engine_page_header',          10 );
// add_action( 'engine_page',       'engine_page_content',         20 );
// add_action( 'engine_page',       'engine_init_structured_data', 30 );
add_action( 'engine_page_after', 'engine_display_comments',     10 );


add_action( 'engine_abar', 'engine_get_abar',     10 );
