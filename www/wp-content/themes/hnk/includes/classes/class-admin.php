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
 * @package  Hnk
 * @author   Binh Pham Thanh <binhpham@linethemes.com>
 */
class Hnk_Admin extends Hnk_Base
{
	public function __construct() {
		if ( is_admin() ) {
			Hnk_PostOptions::instance();
			Hnk_PageOptions::instance();

			/**
			 * Initialize theme advanced settings
			 */
			Hnk_Advanced::instance();

			/**
			 * Initialize sample data installer
			 */
			Hnk_SampleData::instance();
		}
	}
}
