<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

/**
 * Return an array that declaration theme customize sections
 */
return array(
	'general'            => array( 'title' => esc_html__( 'General', 'hnk' ) ),
	'header'             => array( 'title' => esc_html__( 'Header', 'hnk' ) ),
	'footer'             => array( 'title' => esc_html__( 'Footer', 'hnk' ) ),
	'layout'             => array( 'title' => esc_html__( 'Layout & Styles', 'hnk' ) ),
	'typography'         => array( 'title' => esc_html__( 'Typography', 'hnk' ) ),
	'blog'               => array( 'title' => esc_html__( 'Blog', 'hnk' ) ),
	'under-construction' => array(
		'title'    => esc_html__( 'Under Construction', 'hnk' ),
		'priority' => 99
	)
);
