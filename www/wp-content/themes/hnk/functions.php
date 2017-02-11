<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */
defined( 'ABSPATH' ) or exit;





if ( ! function_exists( 'hnk_import_translation' ) ) {
	/**
	 * Load the translation files into the theme textdomain
	 * 
	 * @return  void
	 */
	function hnk_import_translation() {
		load_theme_textdomain( 'hnk', get_template_directory() . '/languages' );
	}
}
add_action( 'after_setup_theme', 'hnk_import_translation', 5 );


if ( ! function_exists( 'hnk_requirement_check' ) ):
	add_action( 'after_switch_theme', 'hnk_requirement_check', 10, 2 );

	/**
	 * Check the theme requirements
	 */
	function hnk_requirement_check( $name, $theme ) {
	    if ( version_compare( PHP_VERSION, '5.3', '<' ) ):
			add_action( 'admin_notices', 'hnk_requirement_notice' );

			function hnk_requirement_notice() {
				printf( '<div class="error"><p>%s</p></div>',
					__( 'Sorry! Your server does not meet the minimum requirements, please upgrade PHP version to 5.3 or higher', 'hnk' ) );
			}

			// Switch back to previous theme
			switch_theme( $theme->stylesheet );
		endif;
	}
endif;



if ( version_compare( PHP_VERSION, '5.3', '>=' ) ):
	// Classes
	require_once get_template_directory() . '/includes/vendor/plugin-activation.php';
	require_once get_template_directory() . '/includes/vendor/options-plus.php';

	// Functions
	require_once get_template_directory() . '/includes/plugins.php';
	require_once get_template_directory() . '/includes/assets.php';
	require_once get_template_directory() . '/includes/woocommerce.php';
	require_once get_template_directory() . '/includes/functions/helpers.php';
	require_once get_template_directory() . '/includes/functions/template.php';
	require_once get_template_directory() . '/includes/functions/visual-composer.php';
	require_once get_template_directory() . '/includes/functions/structure.php';
	require_once get_template_directory() . '/includes/functions/options-override.php';

	require_once get_template_directory() . '/includes/autoload.php';

	// Register class mapping
	Hnk_AutoLoad::map( 'Hnk_', get_template_directory() . '/includes/classes/' );
	Hnk_AutoLoad::map_class( 'Hnk', get_template_directory() . '/includes/classes/class-theme.php' );
	Hnk_AutoLoad::register();

	// Initialize the theme
	Hnk::instance();
	Hnk_Admin::instance();
endif;

function remove_unused_image_size( $sizes) {
 
   unset( $sizes['thumbnail']);
   unset( $sizes['medium']);
   unset( $sizes['large']);
   unset( $sizes['post-thumbnail']);
   unset( $sizes['twentyfourteen-full-width']
);
}
add_filter('intermediate_image_sizes_advanced', 'remove_unused_image_size');
