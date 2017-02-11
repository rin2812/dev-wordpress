<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

// Migrate theme options after switched theme
add_action( 'after_switch_theme', 'hnk_migrate_theme_options' );

// Override theme options for specific page
add_filter( 'op/prepare_options', 'hnk_override_theme_options' );

/**
 * Callback function to migrate theme options
 * 
 * @return  void
 */
function hnk_migrate_theme_options() {
	$default_options = hnk_customize_default_options();
	$options = get_theme_mods();
	
	foreach ( $default_options as $id => $value ) {
		if ( ! isset( $options[$id] ) )
			set_theme_mod( $id, $value );
	}
}



/**
 * Return an array that declare the default options
 * for the theme
 * 
 * @return  array
 */
function hnk_customize_default_options() {
	return array(
		'data_version'  => '1.0',
		'gotop_enabed'  => true,
		'social_links'  => array(
			'twitter'   => 'https://twitter.com/linethemes',
			'facebook'  => 'https://facebook.com/thelinethemes',
			'behance'   => '#',
			'spotify'   => '#',
			'rss'       => '#',
			'__icons_ordering__' => array(
				'twitter', 'facebook', 'google-plus', 'pinterest',
				'instagram', 'youtube', 'vimeo', 'linkedin',
				'behance', 'bitcoin', 'bitbucket', 'codepen',
				'delicious', 'deviantart', 'digg', 'dribbble',
				'flickr', 'foursquare', 'github', 'jsfiddle',
				'reddit', 'skype', 'slack', 'soundcloud', 'spotify',
				'stack-exchange', 'stack-overflow', 'steam', 'stumbleupon',
				'tumblr', 'rss'
			)
		),
		'body_font' => array(
			'family' => 'Roboto',
			'size'   => 14,
			'style'  => 400,
			'color'  => '#777'
		),
		'heading_font' => array(
			'family' => 'Dosis',
			'style'  => 300
		),
		'heading_fontsize' => array( 48, 36, 30, 24, 18, 14),
		'menu_font'        => array(
			'family' => 'Roboto+Condensed',
			'size'   => 15,
			'style'  => 400,
			'color'  => '#333333'
		),
		'cyrillic_subsets_enabled'     => false,
		'cyrillic_ext_subsets_enabled' => false,
		'greek_subsets_enabled'        => false,
		'greek_ext_subsets_enabled'    => false,
		'vietnamese_subsets_enabled'   => false,
		'latin_ext_subsets_enabled'    => false,
		'devanagari_subsets_enabled'   => false,
		'scheme_color'                 => '#2d5aae',
		'layout_mode'                  => 'layout-wide',
		'boxed_background'             => array(
			'type'     => 'none',
			'pattern'  => 'none',
			'color'    => '#fff',
			'image'    => '',
			'repeat'   => 'repeat',
			'position' => 'top-left',
			'style'    => 'scroll'
		),
		'sidebar_layout'       => 'no-sidebar',
		'sidebar_default'      => 'sidebar-primary',
		'pagetitle_enabled'    => true,
		'pagetitle_background' => array(
			'color'    => '#ccc',
			'type'     => 'custom',
			'pattern'  => 'none',
			'image'    => '',
			'repeat'   => 'no-repeat',
			'position' => 'center-center',
			'style'    => 'cover'
		),
		'pagetitle_textcolor'         => '#fff',
		'breadcrumb_prefix'           => 'You are here:',
		'breadcrumb_separator'        => '→',
		'logo_image'                  => true,
		'show_tagline'                => false,
		'logo_src'                    => get_template_directory_uri() . '/assets/img/logo.png',
		'logo_margin'                 => array( 40, 40),
		'header_sticky'               => true,
		'header_searchbox'            => true,
		'topbar_enabled'              => true,
		'topbar_content'              => '<i class="fa fa-clock-o"></i>We\'are Open: Monday - Saturday, 8:00 Am - 18:00 Pm',
		'topbar_social_links_enabled' => true,
		'footer_widgets_enabled'      => true,
		'footer_widgets_layout'       => array(
			'active' => 3,
			'layout' => array(
				array( 12),
				array( 6, 6),
				array( 4, 4, 4),
				array( 6, 2, 2, 2)
			)
		),
		'footer_widgets_background' => array(
			'color'    => '#191e28',
			'type'     => 'custom',
			'pattern'  => 'none',
			'image'    => '',
			'repeat'   => 'repeat-x',
			'position' => 'center-center',
			'style'    => 'scroll'
		),
		'footer_widgets_textcolor'         => '#ccc',
		'footer_social_links_enabled'      => true,
		'footer_copyright'                 => 'Copyright &copy; 2015 H&K. Theme by <a href="http://linethemes.com" target="_blank">Linethemes.</a>',
		'blog_archive_sidebar_layout'      => 'sidebar-right',
		'blog_archive_sidebar'             => 'sidebar-primary',
		'blog_archive_post_excepts'        => true,
		'blog_archive_post_excepts_length' => 150,
		'blog_archive_show_post_meta'      => true,
		'blog_archive_readmore'            => true,
		'blog_archive_readmore_text'       => 'Continue Read',
		'blog_archive_pagination_style'    => 'numeric',
		'blog_posts_per_page'              => 10,
		'blog_single_sidebar_layout'       => 'sidebar-right',
		'blog_single_sidebar'              => 'sidebar-primary',
		'blog_post_navigator_enabled'      => true,
		'blog_author_box_enabled'          => true,
		'blog_related_box_enabled'         => true,
		'blog_related_posts_style'         => 'grid',
		'blog_related_posts_count'         => 3,
		'blog_related_posts_columns'       => 3,
		'under_construction_enabled'       => false,
		'under_construction_page_id'       => 0,
		'under_construction_allowed'       => array( 'administrator'),
		'content_width'                    => '1110px',
		'pagetitle_parallax'               => true,
		'members_archive_sidebar_layout'   => 'no-sidebar',
		'members_archive_sidebar'          => 0,
		'members_single_sidebar'           => 'sidebar-0',
		'members_posts_per_page'           => 10,
		'members_single_sidebar_layout'    => 'sidebar-right',
		'nav_menu_locations'               => array(),
		'woocommerce_single_sidebar_layout'  => 'sidebar-right',
		'woocommerce_single_sidebar'         => 'sidebar-2',
		'woocommerce_products_per_page'      => 12,
		'woocommerce_related_products_count' => 3,
		'woocommerce_archive_sidebar_layout' => 'no-sidebar',
		'woocommerce_archive_sidebar'        => 'sidebar-primary',
		'woocommerce_related_box_enabled'    => true,
		'projects_permalink_base'            => 'gallery',
		'projects_category_permalink_base'   => 'gallery-category',
		'projects_tag_permalink_base'        => 'gallery-tag',
		'projects_grid_columns'              => 4,
		'projects_archive_sidebar_layout'    => 'no-sidebar',
		'projects_single_content_position'   => 'right',
		'projects_single_content_sticky'     => false,
		'projects_related_type'              => 'recent',
		'projects_related_columns_count'     => 5,
		'projects_related_posts_count'       => 10,
		'projects_single_sidebar_layout'     => 'no-sidebar',
		'projects_single_sidebar'            => 'sidebar-primary',
		'projects_single_gallery_type'       => 'list',
		'projects_posts_per_page'            => 40,
		'projects_archive_layout'            => 'masonry',
		'projects_related_title'             => 'Related Projects',
		'projects_single_gallery_columns'    => 4,
		'header_cart_menu'                   => true,
		'header_style'                       => 'header-v2'
	);
}



/**
 * This action will be used to override global theme
 * options as a specific options from page
 * 
 * @param   array  $options  Global options
 * @return  array
 */
function hnk_override_theme_options( $options ) {
	global $post;

	if ( is_admin() ) return $options;

	// Blog options
	if ( is_search() || ( current_post_type_is( 'post' ) && ( is_home() || is_archive() || is_single() ) ) ) {
		if ( is_single() ) {
			$options['sidebar_layout'] = $options['blog_single_sidebar_layout'];
			$options['sidebar_default'] = $options['blog_single_sidebar'];
		}
		else {
			$options['sidebar_layout'] = $options['blog_archive_sidebar_layout'];
			$options['sidebar_default'] = $options['blog_archive_sidebar'];
		}
	}

	// Page options
	elseif ( is_page() ) {
		$page_options_defaults = array(
			'sidebar_layout'            => 'default',
			'enable_custom_page_header' => false,
			'breadcrumb_enabled'        => 'default',
			'topbar_enabled'            => 'default'
		);
		$page_options = array_merge( $page_options_defaults, (array) get_post_meta( get_the_ID(), '_page_options', true ) );

		// Override layout option
		if ( $page_options['sidebar_layout'] !== 'default' ) {
			$options['sidebar_layout'] = $page_options['sidebar_layout'];
			$options['sidebar_default'] = $page_options['sidebar_default'];
		}

		// Override custom page title option
		if ( isset( $page_options['enable_custom_page_header'] ) && $page_options['enable_custom_page_header'] == true ) {
			$options['pagetitle_enabled'] = $page_options['pagetitle_enabled'];
			$options['pagetitle_background'] = $page_options['pagetitle_background'];
		}

		// Override breadcrumbs options
		if ( $page_options['breadcrumb_enabled'] != 'default' ) {
			$options['breadcrumb_enabled'] = $page_options['breadcrumb_enabled'] == 'enable';
		}

		// Override topbar options
		if ( $page_options['topbar_enabled'] != 'default' ) {
			$options['topbar_enabled'] = $page_options['topbar_enabled'] == 'enable';
		}

		// Override options from custom fields
		foreach ( get_post_custom( get_queried_object_id() ) as $name => $value ) {
			if ( isset( $options[ $name ] ) ) {
				$options[ $name ] = is_array( $value ) ? array_shift( $value ) : $value;;
			}
		}
	}
	
	return $options;
}

