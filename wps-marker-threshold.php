<?php
/**
 * Plugin Name: WPS Marker Threshold
 * Plugin URI: 
 * Description: Adjust the Marker Threshold value for <a href="https://woo.com/products/woocommerce-product-search/">WooCommerce Product Search</a>
 * Version: 1.0.0
 * Author: gtsiokos
 * Author URI: http://www.netpad.gr
 * Donate-Link: http://www.netpad.gr
 * License: GPLv3
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
add_filter( 'option_woocommerce-product-search', 'wps_marker_threshold', 10, 2 );
function wps_marker_threshold( $value, $option ) {
	if ( is_array( $value ) ) {
		$value['marker_threshold'] = 60*15; // 15 minutes
	}

	return $value;
}

