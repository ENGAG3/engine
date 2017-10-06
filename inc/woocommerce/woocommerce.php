<?php

function edit_upload_types($existing_mimes = array()) {
    // allow .woff
    $existing_mimes['woff'] = 'font/woff';
    // add as many as you want with the same syntax
    // disallow .jpg files
    // unset( $existing_mimes['jpg'] );
    return $existing_mimes;
}
add_filter('upload_mimes', 'edit_upload_types');



function jk_dequeue_styles( $enqueue_styles ) {
	// unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	// unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );

add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );
