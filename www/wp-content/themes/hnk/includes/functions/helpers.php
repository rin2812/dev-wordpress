<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();


if ( ! function_exists( 'hnk_style_switcher_settings' ) ) {
	add_filter( 'style-switcher/settings', 'hnk_style_switcher_settings' );

	function hnk_style_switcher_settings( $settings ) {
		$settings['scheme'] = op_option( 'scheme_color' );
		$settings['colors'] = array(
			'#f0c600', '#e948ae', '#0088cc', '#f99373'
		);

		return $settings;
	}
}


/**
 * Return the predefined background patterns
 * 
 * @return  array
 */
function predefined_background_patterns() {
	static $patterns;

	if ( empty( $patterns ) || ! is_array( $patterns ) ) {
		$patterns = array();
		$template_directory = get_template_directory();
		$stylesheet_directory = get_stylesheet_directory();

		// Find background pattern from template's assets
		foreach( glob( $template_directory . '/assets/img/patterns/*' ) as $file ) {
			if ( is_dir( $file ) )
				continue;

			$patterns['parent_' . basename($file)] = get_template_directory_uri() . '/assets/img/patterns/' . basename($file);
		}

		if ( $template_directory != $stylesheet_directory && is_dir( $stylesheet_directory . '/assets/img/patterns/' ) ) {
			// Find background patterns from child theme's assets
			foreach( glob( $stylesheet_directory . '/assets/img/patterns/*' ) as $file ) {
				if ( is_dir( $file ) )
					continue;

				$patterns['child_' . basename($file)] = get_stylesheet_directory_uri() . '/assets/img/patterns/' . basename($file);
			}
		}

		$patterns = apply_filters( 'theme/predefined_background_patterns', $patterns );
	}

	return $patterns;
}



/**
 * Return currently post type
 * 
 * @return  strings
 */
function current_post_type_is( $post_type ) {
	return op_current_post_type() == $post_type;
}



/**
 * Retrieve all options for a post
 *
 * @param   int  $post_id  The post ID
 * @return  array
 */
function get_post_options( $post_id = null ) {
	if ( empty( $post_id ) )
		$post_id = get_the_ID();

	return get_post_meta( $post_id, '_post_options', true );
}



/**
 * Retrieve all options for a page
 *
 * @param   int  $page_id  The page ID
 * @return  array
 */
function get_page_options( $page_id = null ) {
	if ( empty( $page_id ) )
		$page_id = get_the_ID();

	return get_post_meta( $page_id, '_page_options', true );
}



if ( ! function_exists( 'hnk_upload_mimes' ) ) {
	add_filter( 'upload_mimes', 'hnk_upload_mimes' );

	/**
	 * Register custom mime types for the theme
	 * 
	 * @param   array  $mimes  List of mime types
	 * @return  array
	 */
	function hnk_upload_mimes( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		$mimes['ico'] = 'image/x-icon';

		return $mimes;
	}
}



if ( ! function_exists( 'hnk_under_construction_mode' ) ) {
	add_action( 'wp', 'hnk_under_construction_mode' );

	/**
	 * This function will be check user permission and redirect to
	 * under construction page then under construction mode is turnned on
	 * 
	 * @return  void
	 */
	function hnk_under_construction_mode() {
		// We not check user permission in admin page
		if ( is_admin() ) return;

		// Check under construction is enabled and it is associated
		// to a page
		if ( op_option( 'under_construction_enabled', false ) && ( $page_id = op_option( 'under_construction_page_id', false ) ) ) {
			$allow_groups = op_option( 'under_construction_allowed', array() );
			$page_permalink = get_permalink( $page_id );

			// Force view permission for administrator
			if ( ! in_array( 'administrator', $allow_groups ) ) {
				array_unshift( $allow_groups, 'administrator' );
			}

			// Just do nothing if current page is assigned as under construction page
			if ( is_page( $page_id ) )
				return;

			// If user not logged in
			if ( ! is_user_logged_in() ) {
				wp_redirect( $page_permalink );
				exit;
			}

			// For logged in user
			else {
				$user = wp_get_current_user();
				$user_can_view = false;

				foreach ( $user->roles as $role ) {
					if ( in_array( $role, $allow_groups ) ) {
						$user_can_view = true;
						break;
					}
				}

				if ( ! $user_can_view ) {
					wp_redirect( $page_permalink );
					exit;
				}
			}
		}
	}
}



if ( is_admin() ) {
	add_action('admin_print_scripts-post-new.php', 'hnk_pricing_table_styles');
	add_action('admin_print_scripts-post.php', 'hnk_pricing_table_styles');

	function hnk_pricing_table_styles() {
		global $post_type;

		if ( $post_type == 'easy-pricing-table' ) {
			echo '<style type="text/css">#dh_ptp_metabox_tabs { display: none !important; }</style>';
		}
	}
}



/**
 * Return an array of sidebars that will be use for
 * the dropdown in the theme options
 * 
 * @return  array
 */
function hnk_sidebars_dropdown_options() {
	global $wp_registered_sidebars;
	static $sidebars;

	if ( empty( $sidebars ) ) {
		$sidebars = array();

		foreach ( $wp_registered_sidebars as $sidebar ) {
			if ( $sidebar['id'] == 'wp_inactive_widgets' || strpos( $sidebar['id'], 'orphaned_widgets' ) !== false )
				continue;
			
			$sidebars[$sidebar['id']] = $sidebar['name'];
		}
	}
	
	return $sidebars;
}

