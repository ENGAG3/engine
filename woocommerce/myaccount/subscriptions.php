<?php
/**
 * My Account > Subscriptions page
 *
 * @author   Prospress
 * @category WooCommerce Subscriptions/Templates
 * @version  2.0.15
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

do_action( 'woocommerce_before_account_subscriptions'); ?>

WC_Subscriptions::get_my_subscriptions_template();
