<?php
	/*
		Plugin Name: Divi Link Solution Custom
		Description: A simple plugin developed by Kabirul Hasan Sikder.
		Author: Kabirul Hasan Sikder
		Author URI: http://facebook.com/sir.kabir.v3
	*/

	add_action('plugins_loaded',function(){


		if ( class_exists( 'WooCommerce' ) ) {

			add_filter('woocommerce_loop_product_link','divi_custom_link_solution', 10, 2);

			function divi_custom_link_solution($link, $product){

				if( isset($product->product_url) && !empty($product->product_url) && strlen($product->product_url) > 1 ){

					$link = $product->product_url;
				}

				return $link;
			}
		}

	});
