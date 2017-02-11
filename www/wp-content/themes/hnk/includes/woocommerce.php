<?php
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

// Remove results count & products sort


add_action( 'woocommerce_before_shop_loop_item', 'hnk_before_shop_loop_item' );
add_action( 'hnk_before_shop_loop_item', 'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'hnk_before_shop_loop_item', 'woocommerce_template_loop_product_thumbnail', 10 );

add_filter( 'woocommerce_get_image_size_shop_catalog', 'hnk_woocommerce_catalog_image_size' );
add_filter( 'woocommerce_get_image_size_shop_single', 'hnk_woocommerce_single_image_size' );


function hnk_woocommerce_single_image_size( $size ) {
	$size['width']  = 600;
	$size['height'] = 770;
	$size['crop']   = true;

	return $size;
}
function hnk_woocommerce_catalog_image_size( $size ) {
	$size['width']  = 600;
	$size['height'] = 770;
	$size['crop']   = true;

	return $size;
}


function hnk_before_shop_loop_item() {
  echo '<div class="product-thumbnail">';
  
  do_action( 'hnk_before_shop_loop_item' );
  
  echo '</div>';
  echo '<div class="product-info">
  			<div class="product-info-wrap">';
  
}

add_action( 'woocommerce_after_shop_loop_item', function() {
  echo '</div></div>';
}, 99 );

add_action( 'woocommerce_after_single_product_summary', function() {
	if ( op_option( 'woocommerce_product_navigator_enabled' ) ) {
		get_template_part( 'templates/blocks/post-navigator' );
	}
}, 15 );


if ( ! function_exists( 'hnk_dequeue_plugins_assets' ) ) {
	function hnk_dequeue_plugins_assets() {
		wp_dequeue_style( 'pif-styles' );
		wp_dequeue_script( 'pif-script' );
	}
}
add_action( 'wp_enqueue_scripts', 'hnk_dequeue_plugins_assets', 999 );
