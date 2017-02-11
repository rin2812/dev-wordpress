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
abstract class Hnk_Feature extends Hnk_Base
{
	protected function __construct() {
		/**
		 * The theme feature will initialize only when
		 * it registered in the theme supports
		 */
		if ( $this->enabled() ):
			$this->setup();
		endif;
	}

	abstract protected function setup();
	abstract protected function enabled();
}
