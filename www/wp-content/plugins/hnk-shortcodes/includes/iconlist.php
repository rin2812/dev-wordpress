<?php
/**
 * WARNING: This file is part of the UI-Pack plugin. DO NOT edit
 * this file under any circumstances.
 */
if ( ! defined( 'ABSPATH' ) )
	exit;


$atts = shortcode_atts( array(
	'class'        => '',
	'css'          => '',
	'circle_style' => '',
	
	// Icon style
	'icon'  => 'cog',
	'image' => ''
), $atts );

$class = array( 'iconlist', $atts['class'] );

if ( $atts['circle_style'] == 'yes' )
	$class[] = 'circle';

$children = array();

if ( preg_match_all( '/\[iconlist_item([^\]]+)?\](.*?)\[\/iconlist_item\]/is', $content, $matches ) ) {
	foreach ( $matches[2] as $index => $attributes ) {
		$_attributes = shortcode_parse_atts( trim( $attributes ) );
		$_content = trim( $matches[2][$index] );

		if ( ! isset( $_attributes['icon'] ) && ! empty( $atts['icon'] ) )
			$_attributes['icon'] = $atts['icon'];

		if ( ! isset( $_attributes['image'] ) && ! empty( $atts['image'] ) )
			$_attributes['image'] = $atts['image'];

		$children[] = call_user_func_array( function( $atts, $content = '' ) {
			ob_start();
			include __DIR__ . '/iconlist-item.php';
			return ob_get_clean();
		}, array( $_attributes, $_content ) );
	}
}

printf( '<ul class="iconlist %s">%s</ul>', esc_attr( implode( ' ', $class ) ), implode( '', $children ) );
