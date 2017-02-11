<?php
/**
 * WARNING: This file is part of the UI-Pack plugin. DO NOT edit
 * this file under any circumstances.
 */
if ( ! defined( 'ABSPATH' ) )
	exit;


$atts = shortcode_atts( array(
	'class' => '',
	'css'   => '',
	
	// Icon style
	'icon'  => 'cog',
	'image' => ''
), $atts );

$class = array( $atts['class'] );
$icon = '';

if ( ! empty( $atts['image'] ) ) {
	if ( is_numeric( $atts['image'] ) ) {
		$image_src = wp_get_attachment_image_src( $atts['image'], 'full' );
		$atts['image'] = array_shift( $image_src );
	}

	$alt  = ! empty($atts['title'])
		? $atts['title']
		: pathinfo( $atts['image'], PATHINFO_FILENAME );

	$icon = sprintf( '<img src="%s" alt="%s" />', esc_url( $atts['image'] ), esc_attr( $alt ) );
}
elseif ( ! empty( $atts['icon'] ) ) {
	$icon = sprintf( '<i class="fa fa-%s"></i>', esc_attr( $atts['icon'] ) );
	
}

$class = esc_attr( trim( implode( ' ', $class ) ) );
if ( ! empty( $class ) )
	$class = "class=\"{$class}\"";

printf( '<li %s>%s %s</li>',
	$class,
	$icon,
	$content
);
