<?php
if ( ! function_exists( 'engine_checkout_wrap_top' ) ) {
	/**
	 * engine display comments
	 *
	 * @since  1.0.0
	 */
	function engine_checkout_wrap_top() {
    echo "<div class='engine-customer-fields-wrap'> <div>";
	}
} add_action( 'woocommerce_checkout_before_customer_details', 'engine_checkout_wrap_top', 0 );



if ( ! function_exists( 'engine_checkout_wrap_bottom' ) ) {
	/**
	 * engine display comments
	 *
	 * @since  1.0.0
	 */
	function engine_checkout_wrap_bottom() {
    echo "</div></div> <!-- customer-fields-wrap -->";
	}
} add_action( 'woocommerce_checkout_after_customer_details', 'engine_checkout_wrap_bottom', 99999998 );



if ( ! function_exists( 'engine_order_review_wrap_top' ) ) {
	/**
	 * engine display comments
	 *
	 * @since  1.0.0
	 */
	function engine_order_review_wrap_top() {
    echo "<div class='engine-order-review-wrap'> <div>";
	}
} add_action( 'woocommerce_checkout_after_customer_details', 'engine_order_review_wrap_top', 99999999 );



if ( ! function_exists( 'engine_order_review_wrap_bottom' ) ) {
	/**
	 * engine display comments
	 *
	 * @since  1.0.0
	 */
	function engine_order_review_wrap_bottom() {
    echo "</div></div> <!-- order-review-wrap -->";
	}
} add_action( 'woocommerce_checkout_after_order_review', 'engine_order_review_wrap_bottom', 0 );


function my_add_order_review_product_image( $product, $product_obj ) {
    $image = wp_get_attachment_image( get_post_thumbnail_id( $product_obj->post->ID ), 'shop_thumbnail' );

    return $image . $product;
}
 add_filter( 'woocommerce_checkout_product_title', 'my_add_order_review_product_image', 10, 2 );
