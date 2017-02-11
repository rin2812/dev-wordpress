<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

$controls = array();

/**
 * General controls
 */
$controls['siteinfo_heading'] = array(
	'type'        => 'heading',
	'title'       => esc_html__( 'Site Information', 'hnk' ),
	'description' => esc_html__( 'This section have basic information of your site, just change it to match with you need.', 'hnk' ),
	'section'     => 'general',
	'class'       => 'no-border'
);

$controls['site_name'] = array(
	'type'     => 'text',
	'label'    => esc_html__( 'Site Name', 'hnk' ),
	'section'  => 'general',
	'settings' => 'blogname'
);

$controls['site_desc'] = array(
	'type'     => 'text',
	'label'    => esc_html__( 'Site Tagline', 'hnk' ),
	'section'  => 'general',
	'settings' => 'blogdescription'
);

$controls['static_frontpage_heading'] = array(
	'type'        => 'heading',
	'section'     => 'general',
	'class'       => 'no-border',
	'title'       => esc_html__( 'Static Front Page', 'hnk' ),
	'description' => esc_html__( 'Switch this option to use static page or posts page on the home', 'hnk' )
);

$controls['static_frontpage_enabled'] = array(
	'type'     => 'radio-buttons',
	'section'  => 'general',
	'settings' => 'show_on_front',
	'choices'  => array(
		'posts' => esc_html__( 'Posts', 'hnk' ),
		'page'  => esc_html__( 'Static Page', 'hnk' )
	)
);

$controls['static_frontpage'] = array(
	'type'     => 'dropdown-pages',
	'section'  => 'general',
	'label'    => esc_html__( 'Front Page', 'hnk' ),
	'settings' => 'page_on_front'
);

$controls['posts_page'] = array(
	'type'     => 'dropdown-pages',
	'section'  => 'general',
	'label'    => esc_html__( 'Posts Page', 'hnk' ),
	'settings' => 'page_for_posts'
);

$controls['general_misc_heading'] = array(
	'type'        => 'heading',
	'section'     => 'general',
	'class'       => 'no-border',
	'title'       => esc_html__( 'Misc', 'hnk' ),
	'description' => esc_html__( 'This section have options that allow to adding bookmark icon, social icons, ...', 'hnk' )
);

$controls['gotop_enabed'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Go Top Button', 'hnk' ),
	'section' => 'general',
	'default' => true
);
$controls['loading_enabed'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Page Loading', 'hnk' ),
	'section' => 'general',
	'default' => true
);

$controls['social_links'] = array(
	'type'    => 'social-icons',
	'label'   => esc_html__( 'Social Links', 'hnk' ),
	'section' => 'general',
	'default' => array(
		'facebook' => 'https://facebook.com/thelinethemes',
		'twitter'  => 'https://twitter.com/linethemes'
	)
);

/**
 * Styles
 */
$controls['body_font_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'typography',
	'title'       => esc_html__( 'Body Font', 'hnk' ),
	'description' => esc_html__( 'You can modify the font family, size, color, ... for global content.', 'hnk' )
);

$controls['body_font'] = array(
	'type'    => 'typography',
	'section' => 'typography',
	'default' => array(
		'family'      => 'Raleway',
		'size'        => 14,
		'style'       => 400,
		'color'       => '#333333'
	)
);

$controls['heading_font_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'typography',
	'title'       => esc_html__( 'Heading Font', 'hnk' ),
	'description' => esc_html__( 'You can modify the font options for your headings. h1, h2, h3, h4, ...', 'hnk' )
);

$controls['heading_font'] = array(
	'type'    => 'typography',
	'section' => 'typography',
	'fields'  => array( 'family', 'style' ),
	'default' => array(
		'family'      => 'Montserrat',
		'style'       => 400,
		'color'       => '#333333'
	)
);

$controls['heading_fontsize'] = array(
	'type'    => 'dimension',
	'section' => 'typography',
	'class'   => 'no-label',
	'fields' => array(
		'h1' => esc_html__( 'H1 Font Size (px)', 'hnk' ),
		'h2' => esc_html__( 'H2 Font Size (px)', 'hnk' ),
		'h3' => esc_html__( 'H3 Font Size (px)', 'hnk' ),
		'h4' => esc_html__( 'H4 Font Size (px)', 'hnk' ),
		'h5' => esc_html__( 'H5 Font Size (px)', 'hnk' ),
		'h6' => esc_html__( 'H6 Font Size (px)', 'hnk' ),
	),
	'default' => array(
		0, 0, 0, 0, 0, 0
	)
);

$controls['menu_font_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'typography',
	'title'       => esc_html__( 'Menu Font', 'hnk' ),
	'description' => esc_html__( 'Select your custom font options for your main navigation menu.', 'hnk' )
);

$controls['menu_font'] = array(
	'type'    => 'typography',
	'section' => 'typography',
	'default' => array(
		'family' => 'Montserrat',
		'size'   => 14,
		'style'  => 400,
		'color'  => '#333333'
	)
);

$controls['font_subsets_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'typography',
	'title'       => esc_html__( 'Font Subsets', 'hnk' ),
	'description' => esc_html__( 'Sometime you need to load extra font subsets for another languages, this options will allow to do it.', 'hnk' )
);

$controls['cyrillic_subsets_enabled'] = array(
	'type'    => 'switcher',
	'section' => 'typography',
	'label'   => esc_html__( 'Cyrillic', 'hnk' ),
	'default' => false
);

$controls['cyrillic_ext_subsets_enabled'] = array(
	'type'    => 'switcher',
	'section' => 'typography',
	'label'   => esc_html__( 'Cyrillic Extended', 'hnk' ),
	'default' => false
);

$controls['greek_subsets_enabled'] = array(
	'type'    => 'switcher',
	'section' => 'typography',
	'label'   => esc_html__( 'Greek', 'hnk' ),
	'default' => false
);
$controls['greek_ext_subsets_enabled'] = array(
	'type'    => 'switcher',
	'section' => 'typography',
	'label'   => esc_html__( 'Greek Extended', 'hnk' ),
	'default' => false
);

$controls['vietnamese_subsets_enabled'] = array(
	'type'    => 'switcher',
	'section' => 'typography',
	'label'   => esc_html__( 'Vietnamese', 'hnk' ),
	'default' => false
);

$controls['latin_ext_subsets_enabled'] = array(
	'type'    => 'switcher',
	'section' => 'typography',
	'label'   => esc_html__( 'Latin Extended', 'hnk' ),
	'default' => false
);

$controls['devanagari_subsets_enabled'] = array(
	'type'    => 'switcher',
	'section' => 'typography',
	'label'   => esc_html__( 'Devanagari', 'hnk' ),
	'default' => false
);

/**
 * Layout controls
 */
$controls['scheme_color_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'layout',
	'title'       => esc_html__( 'Scheme Color', 'hnk' ),
	'description' => esc_html__( 'Select the color that will be used for theme color.', 'hnk' )
);

$controls['scheme_color'] = array(
	'type'    => 'color-picker',
	'label'   => esc_html__( 'Scheme Color', 'hnk' ),
	'section' => 'layout',
	'default' => '#a0ce4e'
);

$controls['layout_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'layout',
	'title'       => esc_html__( 'Layout', 'hnk' ),
	'description' => esc_html__( 'Choose between a full or a boxed layout to set how your website\'s layout will look like.', 'hnk' )
);

$controls['layout_mode'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'Display Style', 'hnk' ),
	'section' => 'layout',
	'choices' => array(
		'layout-wide'  => array(
			'src'     => op_directory_uri() . '/assets/img/layout-wide.png',
			'tooltip' => esc_html__( 'Wide', 'hnk' )
		),

		'layout-boxed'  => array(
			'src'     => op_directory_uri() . '/assets/img/layout-boxed.png',
			'tooltip' => esc_html__( 'Boxed', 'hnk' )
		),
	),
	'default' => 'layout-wide'
);

$controls['boxed_background'] = array(
	'type'     => 'background',
	'label'    => esc_html__( 'Boxed Background', 'hnk' ),
	'section'  => 'layout',
	'patterns' => predefined_background_patterns(),
	'default'  => array(
		'type'     => 'none',
		'pattern'  => 'none',
		'color'    => '#fff',
		'image'    => '',
		'repeat'   => 'repeat',
		'position' => 'top-left',
		'style'    => 'scroll'
	)
);

$controls['content_width'] = array(
	'type'    => 'text',
	'label'   => esc_html__( 'Content Width', 'hnk' ),
	'section' => 'layout',
	'default' => '1110px'
);

$controls['sidebar_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'layout',
	'title'       => esc_html__( 'Sidebar', 'hnk' ),
	'description' => esc_html__( 'Select the position of sidebar that you wish to display.', 'hnk' )
);
$controls['sidebar_layout'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'Sidebar Position', 'hnk' ),
	'section' => 'layout',
	'choices' => array(
		'no-sidebar' => array(
			'src' => op_directory_uri() . '/assets/img/no-sidebar.png',
			'tooltip' => esc_html__( 'No Sidebar', 'hnk' )
		),
		'sidebar-left' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-left.png',
			'tooltip' => esc_html__( 'Sidebar Left', 'hnk' )
		),
		'sidebar-right' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-right.png',
			'tooltip' => esc_html__( 'Sidebar Right', 'hnk' )
		)
	),
	'default' => 'no-sidebar'
);

$controls['sidebar_default'] = array(
	'type'    => 'dropdown-sidebars',
	'label'   => esc_html__( 'Default Sidebar', 'hnk' ),
	'section' => 'layout',
	'default' => 'sidebar-primary'
);
// End layout
	
$controls['pagetitle_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'layout',
	'title'       => esc_html__( 'Page Title', 'hnk' ),
	'description' => esc_html__( 'In this section you can turn on/off or modify style for the Page Title.', 'hnk' )
);
$controls['pagetitle_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Page Title', 'hnk' ),
	'section' => 'layout',
	'default' => true
);

$controls['pagetitle_background'] = array(
	'type'     => 'background',
	'section'  => 'layout',
	'label'    => esc_html__( 'Background', 'hnk' ),
	'patterns' => predefined_background_patterns(),
	'default'  => array(
		'type'     => 'none',
		'pattern'  => 'none',
		'color'    => '#f2f2f2',
		'image'    => '',
		'repeat'   => 'repeat',
		'position' => 'top-left',
		'style'    => 'scroll'
	)
);

$controls['pagetitle_parallax'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Parallax Effect', 'hnk' ),
	'section' => 'layout',
	'default' => false
);

$controls['pagetitle_textcolor'] = array(
	'type'    => 'color-picker',
	'section' => 'layout',
	'label'   => esc_html__( 'Text Color', 'hnk' ),
	'default' => '#333333'
);

$controls['breadcrumb_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'layout',
	'title'       => esc_html__( 'Breadcrumb', 'hnk' ),
	'description' => esc_html__( 'Change settings for the breadcrumb.', 'hnk' )
);
$controls['breadcrumb_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Breadcrumbs', 'hnk' ),
	'section' => 'layout',
	'default' => true
);

$controls['breadcrumb_prefix'] = array(
	'type'    => 'text',
	'label'   => esc_html__( 'Breadcrumb Prefix', 'hnk' ),
	'section' => 'layout',
	'default' => esc_html__( 'You are here:', 'hnk' )
);

$controls['breadcrumb_separator'] = array(
	'type'    => 'text',
	'label'   => esc_html__( 'Breadcrumb Separator', 'hnk' ),
	'section' => 'layout',
	'default' => '/'
);

/**
 * Header
 */
$controls['logo_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'header',
	'title'       => esc_html__( 'Custom Logo', 'hnk' ),
	'description' => esc_html__( 'In this section You can upload your own custom logo, change the way your logo can be displayed', 'hnk' )
);

// Logo options
$controls['logo_image'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Use Logo Image', 'hnk' ),
	'section' => 'header',
	'default' => true
);

$controls['show_tagline'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Display Site Tagline', 'hnk' ),
	'section' => 'header',
	'default' => false
);

$controls['logo_src'] = array(
	'type'    => 'media-picker',
	'label'   => esc_html__( 'Logo', 'hnk' ),
	'section' => 'header',
	'default' => get_template_directory_uri() . '/assets/img/logo.png'
);

$controls['logo_retina_src'] = array(
	'type'    => 'media-picker',
	'label'   => esc_html__( 'Logo For Retina', 'hnk' ),
	'section' => 'header',
	'default' => get_template_directory_uri() . '/assets/img/logo.png'
);

$controls['logo_size'] = array(
	'type'    => 'dimension',
	'label'   => esc_html__( 'Logo Size', 'hnk' ),
	'section' => 'header',
	'fields'  => array(
		'width'  => esc_html__( 'Width (px)', 'hnk' ),
		'height' => esc_html__( 'Height (px)', 'hnk' )
	),
	'default' => array( 0, 0 )
);

$controls['logo_margin'] = array(
	'type'    => 'dimension',
	'label'   => esc_html__( 'Logo Margin', 'hnk' ),
	'section' => 'header',
	'fields'  => array(
		'top'    => esc_html__( 'Top (px)', 'hnk' ),
		'bottom' => esc_html__( 'Bottom (px)', 'hnk' )
	),
	'default' => array( 25, 25 )
);

$controls['navigator_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'header',
	'title'       => esc_html__( 'Navigator', 'hnk' ),
	'description' => esc_html__( 'Just select your menu that you wish assign it to the location on the theme', 'hnk' )
);

// Navigator
$menus     = wp_get_nav_menus();
$locations = get_registered_nav_menus();

$choices = array( 0 => esc_html__( '&dash; Select &dash;', 'hnk' ) );

if ( $menus ) {
	foreach ( $menus as $menu ) {
		$choices[ $menu->term_id ] = wp_html_excerpt( $menu->name, 40, '&hellip;' );
	}
}

foreach ( $locations as $location => $description ) {
	$menu_setting_id = "nav_menu_locations[{$location}]";

	$controls["menu_location_{$location}"] = array(
		'label'    => $description,
		'section'  => 'header',
		'type'     => 'dropdown',
		'choices'  => $choices,
		'settings' => $menu_setting_id
	);
}

$controls['header_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'header',
	'title'       => esc_html__( 'Header Options', 'hnk' ),
	'description' => esc_html__( 'Toggle sticky header feature and turn on/off extra menu icons', 'hnk' )
);

$controls['header_style'] = array(
	'type' => 'dropdown',
	'section' => 'header',
	'label'   => esc_html__( 'Header Style', 'hnk' ),
	'choices' => array(
		'header-v1' => esc_html__( 'Classic', 'hnk' ),
		'header-v2' => esc_html__( 'Modern', 'hnk' ),
		'header-v4' => esc_html__( 'Header Widget', 'hnk' )
	)
);

$controls['header_sticky'] = array(
	'type'    => 'switcher',
	'section' => 'header',
	'label'   => esc_html__( 'Enable Sticky Header', 'hnk' )
);

$controls['header_searchbox'] = array(
	'type'    => 'switcher',
	'section' => 'header',
	'label'   => esc_html__( 'Show Search Menu', 'hnk' ),
	'default' => true
);

$controls['header_cart_menu'] = array(
	'type'    => 'switcher',
	'section' => 'header',
	'label'   => esc_html__( 'Show Cart Menu', 'hnk' ),
	'default' => true
);

$controls['topbar_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'header',
	'title'       => esc_html__( 'Top Bar', 'hnk' ),
	'description' => esc_html__( 'Turn on/off the top bar and change it styles', 'hnk' )
);
$controls['topbar_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Topbar', 'hnk' ),
	'section' => 'header',
	'default' => true
);

$controls['topbar_content'] = array(
	'type'    => 'textarea',
	'label'   => esc_html__( 'Content', 'hnk' ),
	'section' => 'header',
	'default' => esc_html__( '<i class="fa fa-phone"></i> Call Us Today! 1.555.555.555 <span class="spacer"></span> <i class="fa fa-envelope-o"></i> support@linethemes.com', 'hnk' )
);

$controls['topbar_social_links_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Social Links', 'hnk' ),
	'section' => 'header',
	'default' => true
);

/**
 * Content bottom widgets
 */
$controls['content_bottom_widgets_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'footer',
	'title'       => esc_html__( 'Content Bottom Widgets', 'hnk' ),
	'description' => esc_html__( 'This section allow to change the layout and styles of content-bottom widgets area to match as you need.', 'hnk' )
);
$controls['content_bottom_widgets_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Content Bottom Widgets', 'hnk' ),
	'section' => 'footer',
	'default' => true
);
$controls['content_bottom_widgets_layout'] = array(
	'type'    => 'widgets-layout',
	'label'   => esc_html__( 'Widgets Layout', 'hnk' ),
	'section' => 'footer',
	'max'     => 4,
	'default' => array(
		'active' => 3,
		'layout' => array(
			array( 12 ),
			array( 6, 6 ),
			array( 4, 4, 4 ),
			array( 3, 3, 3, 3 )
		)
	)
);

/**
 * Footer
 */
$controls['footer_widgets_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'footer',
	'title'       => esc_html__( 'Footer Widgets', 'hnk' ),
	'description' => esc_html__( 'This section allow to change the layout and styles of footer widgets to match as you need.', 'hnk' )
);

$controls['footer_widgets_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Footer Widgets', 'hnk' ),
	'section' => 'footer',
	'default' => true
);

$controls['footer_widgets_layout'] = array(
	'type'    => 'widgets-layout',
	'label'   => esc_html__( 'Widgets Layout', 'hnk' ),
	'max'     => 4,
	'section' => 'footer',
	'default' => array(
		'active' => 3,
		'layout' => array(
			array( 12 ),
			array( 6, 6 ),
			array( 4, 4, 4 ),
			array( 3, 3, 3, 3 )
		)
	)
);

$controls['footer_widgets_background'] = array(
	'type'     => 'background',
	'section'  => 'footer',
	'label'    => esc_html__( 'Widgets Background', 'hnk' ),
	'patterns' => predefined_background_patterns(),
	'default'  => array(
		'type'     => 'none',
		'pattern'  => 'none',
		'color'    => '#1a1a1a',
		'image'    => '',
		'repeat'   => 'repeat',
		'position' => 'top-left',
		'style'    => 'scroll'
	)
);

$controls['footer_widgets_textcolor'] = array(
	'type'    => 'color-picker',
	'section' => 'footer',
	'label'   => esc_html__( 'Text Color', 'hnk' ),
	'default' => '#666666'
);

$controls['footer_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'footer',
	'title'       => esc_html__( 'Custom Footer', 'hnk' ),
	'description' => esc_html__( 'You can change the copyright text, show/hide the social icons on the footer.', 'hnk' )
);

$controls['footer_social_links_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Social Links', 'hnk' ),
	'section' => 'footer',
	'default' => true
);

$controls['footer_copyright'] = array(
	'type'    => 'textarea',
	'label'   => esc_html__( 'Copyright', 'hnk' ),
	'section' => 'footer'
);

/**
 * Blog
 */
$controls['blog_list_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'blog',
	'title'       => esc_html__( 'Blog List', 'hnk' ),
	'description' => esc_html__( 'All options in this section will be used to make style for blog page.', 'hnk' )
);

$controls['blog_archive_sidebar_layout'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'List Sidebar Position', 'hnk' ),
	'section' => 'blog',
	'choices' => array(
		'no-sidebar' => array(
			'src' => op_directory_uri() . '/assets/img/no-sidebar.png',
			'tooltip' => esc_html__( 'No Sidebar', 'hnk' )
		),
		'sidebar-left' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-left.png',
			'tooltip' => esc_html__( 'Sidebar Left', 'hnk' )
		),
		'sidebar-right' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-right.png',
			'tooltip' => esc_html__( 'Sidebar Right', 'hnk' )
		)
	),
	'default' => 'sidebar-right'
);

$controls['blog_archive_sidebar'] = array(
	'type'    => 'dropdown-sidebars',
	'section' => 'blog',
	'label'   => esc_html__( 'Blog List Sidebar', 'hnk' ),
	'default' => 'sidebar-primary'
);

$controls['blog_archive_post_excepts'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Auto Post Excepts', 'hnk' ),
	'section' => 'blog',
	'default' => false
);

$controls['blog_archive_post_excepts_length'] = array(
	'type'    => 'text',
	'label'   => esc_html__( 'Post Excepts Length', 'hnk' ),
	'section' => 'blog',
	'default' => 40
);

$controls['blog_archive_show_post_meta'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Show Post Meta', 'hnk' ),
	'section' => 'blog',
	'default' => true
);

$controls['blog_archive_readmore'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Show Read More', 'hnk' ),
	'section' => 'blog',
	'default' => true
);

$controls['blog_archive_readmore_text'] = array(
	'type'    => 'text',
	'label'   => esc_html__( 'Read More Text', 'hnk' ),
	'section' => 'blog',
	'default' => esc_html__( 'Continue Read &rarr;', 'hnk' )
);

$controls['blog_archive_pagination_style'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'Pagination Style', 'hnk' ),
	'section' => 'blog',
	'default' => 'numeric',
	'choices' => array(
		'pager' => array(
			'src' => op_directory_uri() . '/assets/img/paging-pager.png',
			'tooltip' => esc_html__( 'Pager', 'hnk' )
		),
		'numeric' => array(
			'src' => op_directory_uri() . '/assets/img/paging-numeric.png',
			'tooltip' => esc_html__( 'Numeric', 'hnk' )
		),
		'pager-numeric' => array(
			'src' => op_directory_uri() . '/assets/img/paging-pager-numeric.png',
			'tooltip' => esc_html__( 'Pager & Numeric', 'hnk' )
		),
		'loadmore' => array(
			'src' => op_directory_uri() . '/assets/img/paging-loadmore.png',
			'tooltip' => esc_html__( 'Load More', 'hnk' )
		)
	)
);

$controls['blog_posts_per_page'] = array(
	'type'     => 'spinner',
	'section'  => 'blog',
	'label'    => esc_html__( 'Posts Per Page', 'hnk' )
);

$controls['blog_single_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'blog',
	'title'       => esc_html__( 'Blog Single', 'hnk' ),
	'description' => esc_html__( 'Also, you can change the style for blog single to make your site unique.', 'hnk' )
);

$controls['blog_single_sidebar_layout'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'Single Sidebar Position', 'hnk' ),
	'section' => 'blog',
	'choices' => array(
		'no-sidebar' => array(
			'src' => op_directory_uri() . '/assets/img/no-sidebar.png',
			'tooltip' => esc_html__( 'No Sidebar', 'hnk' )
		),
		'sidebar-left' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-left.png',
			'tooltip' => esc_html__( 'Sidebar Left', 'hnk' )
		),
		'sidebar-right' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-right.png',
			'tooltip' => esc_html__( 'Sidebar Right', 'hnk' )
		)
	),
	'default' => 'sidebar-right'
);

$controls['blog_single_sidebar'] = array(
	'type'    => 'dropdown-sidebars',
	'section' => 'blog',
	'label'   => esc_html__( 'Blog Single Sidebar', 'hnk' ),
	'default' => 'sidebar-primary'
);

$controls['blog_post_navigator_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Show Post Navigator', 'hnk' ),
	'section' => 'blog',
	'default' => true
);

$controls['blog_author_box_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Show Author Box', 'hnk' ),
	'section' => 'blog',
	'default' => true
);

$controls['blog_related_box_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Show Related Posts', 'hnk' ),
	'section' => 'blog',
	'default' => true
);

$controls['blog_related_posts_style'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'Related Posts Style', 'hnk' ),
	'section' => 'blog',
	'choices' => array(
		'list' => array(
			'src' => op_directory_uri() . '/assets/img/related-list.png',
			'tooltip' => esc_html__( 'Simple List', 'hnk' )
		),
		'grid' => array(
			'src' => op_directory_uri() . '/assets/img/blog-grid.png',
			'tooltip' => esc_html__( 'Grid', 'hnk' )
		),
		'masonry' => array(
			'src' => op_directory_uri() . '/assets/img/blog-masonry.png',
			'tooltip' => esc_html__( 'Masonry Grid', 'hnk' )
		),
		'carousel' => array(
			'src' => op_directory_uri() . '/assets/img/related-slider.png',
			'tooltip' => esc_html__( 'Carousel', 'hnk' )
		)
	),
	'default' => 'carousel'
);

$controls['blog_related_posts_columns'] = array(
	'type'    => 'dropdown',
	'section' => 'blog',
	'label'   => esc_html__( 'Columns Of Related Posts', 'hnk' ),
	'default' => 3,
	'choices' => array(
		2 => esc_html__( '2 Columns', 'hnk' ),
		3 => esc_html__( '3 Columns', 'hnk' ),
		4 => esc_html__( '4 Columns', 'hnk' )
	)
);

$controls['blog_related_posts_count'] = array(
	'type'    => 'spinner',
	'section' => 'blog',
	'label'   => esc_html__( 'Number Of Related Posts', 'hnk' ),
	'min'     => 1,
	'default' => 4
);

/**
 * Member
 */
$controls['members_list_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'members',
	'title'       => esc_html__( 'Member List', 'hnk' ),
	'description' => esc_html__( 'Change options in this section to custom style for portfolio listing page.', 'hnk' )
);

$controls['members_archive_sidebar_layout'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'List Sidebar Position', 'hnk' ),
	'section' => 'members',
	'choices' => array(
		'no-sidebar' => array(
			'src' => op_directory_uri() . '/assets/img/no-sidebar.png',
			'tooltip' => esc_html__( 'No Sidebar', 'hnk' )
		),
		'sidebar-left' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-left.png',
			'tooltip' => esc_html__( 'Sidebar Left', 'hnk' )
		),
		'sidebar-right' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-right.png',
			'tooltip' => esc_html__( 'Sidebar Right', 'hnk' )
		)
	),
	'default' => 'sidebar-right'
);

$controls['members_archive_sidebar'] = array(
	'type'    => 'dropdown-sidebars',
	'section' => 'members',
	'label'   => esc_html__( 'Member List Sidebar', 'hnk' ),
	'default' => 'sidebar-primary'
);

$controls['members_archive_pagination_style'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'Pagination Style', 'hnk' ),
	'section' => 'members',
	'default' => 'numeric',
	'choices' => array(
		'pager' => array(
			'src'     => op_directory_uri() . '/assets/img/paging-pager.png',
			'tooltip' => esc_html__( 'Pager', 'hnk' )
		),
		'numeric' => array(
			'src'     => op_directory_uri() . '/assets/img/paging-numeric.png',
			'tooltip' => esc_html__( 'Numeric', 'hnk' )
		),
		'pager-numeric' => array(
			'src'     => op_directory_uri() . '/assets/img/paging-pager-numeric.png',
			'tooltip' => esc_html__( 'Pager & Numeric', 'hnk' )
		),
		'loadmore' => array(
			'src'     => op_directory_uri() . '/assets/img/paging-loadmore.png',
			'tooltip' => esc_html__( 'Load More', 'hnk' )
		)
	)
);

$controls['members_posts_per_page'] = array(
	'type'     => 'spinner',
	'section'  => 'members',
	'label'    => esc_html__( 'Posts Per Page', 'hnk' )
);

$controls['members_single_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'members',
	'title'       => esc_html__( 'Single Member', 'hnk' ),
	'description' => esc_html__( 'Change the layout, sidebar, navigator, ... for the single portfolio page.', 'hnk' )
);

$controls['members_single_sidebar_layout'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'Single Sidebar Position', 'hnk' ),
	'section' => 'members',
	'choices' => array(
		'no-sidebar' => array(
			'src'     => op_directory_uri() . '/assets/img/no-sidebar.png',
			'tooltip' => esc_html__( 'No Sidebar', 'hnk' )
		),
		'sidebar-left' => array(
			'src'     => op_directory_uri() . '/assets/img/sidebar-left.png',
			'tooltip' => esc_html__( 'Sidebar Left', 'hnk' )
		),
		'sidebar-right' => array(
			'src'     => op_directory_uri() . '/assets/img/sidebar-right.png',
			'tooltip' => esc_html__( 'Sidebar Right', 'hnk' )
		)
	),
	'default' => 'sidebar-right'
);

$controls['members_single_sidebar'] = array(
	'type'    => 'dropdown-sidebars',
	'section' => 'members',
	'label'   => esc_html__( 'Single Member Sidebar', 'hnk' ),
	'default' => 'sidebar-primary'
);

/**
 * Portfolio
 */
$controls['portfolio_page_title_enabled'] = array(
	'type'    => 'switcher',
	'section' => 'portfolio',
	'label'   => esc_html__( 'Enable Page Title', 'hnk' ),
	'default' => true
);

$controls['portfolio_page_title'] = array(
	'type'    => 'text',
	'section' => 'portfolio',
	'label'   => esc_html__( 'Custom Page Title', 'hnk' ),
	'default' => esc_html__( 'Portfolio', 'hnk' )
);

$controls['portfolio_list_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'portfolio',
	'title'       => esc_html__( 'Portfolio List', 'hnk' ),
	'description' => esc_html__( 'Change options in this section to custom style for portfolio listing page.', 'hnk' )
);

$controls['portfolio_archive_sidebar_layout'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'List Sidebar Position', 'hnk' ),
	'section' => 'portfolio',
	'choices' => array(
		'no-sidebar' => array(
			'src' => op_directory_uri() . '/assets/img/no-sidebar.png',
			'tooltip' => esc_html__( 'No Sidebar', 'hnk' )
		),
		'sidebar-left' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-left.png',
			'tooltip' => esc_html__( 'Sidebar Left', 'hnk' )
		),
		'sidebar-right' => array(
			'src' => op_directory_uri() . '/assets/img/sidebar-right.png',
			'tooltip' => esc_html__( 'Sidebar Right', 'hnk' )
		)
	),
	'default' => 'sidebar-right'
);

$controls['portfolio_archive_sidebar'] = array(
	'type'    => 'dropdown-sidebars',
	'section' => 'portfolio',
	'label'   => esc_html__( 'Portfolio List Sidebar', 'hnk' ),
	'default' => 'sidebar-primary'
);

$controls['portfolio_archive_layout'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'List Layout', 'hnk' ),
	'section' => 'portfolio',
	'choices' => array(
		'grid' => array(
			'src' => op_directory_uri() . '/assets/img/blog-grid.png',
			'tooltip' => esc_html__( 'Grid', 'hnk' )
		),
		'masonry' => array(
			'src' => op_directory_uri() . '/assets/img/blog-masonry.png',
			'tooltip' => esc_html__( 'Masonry Grid', 'hnk' )
		),
		'no-margin' => array(
			'src' => op_directory_uri() . '/assets/img/portfolio-no-margin.png',
			'tooltip' => esc_html__( 'Grid No Margin', 'hnk' )
		)
	),
	'default' => 'grid'
);

$controls['portfolio_grid_columns'] = array(
	'type'    => 'dropdown',
	'section' => 'portfolio',
	'label'   => esc_html__( 'Grid Columns', 'hnk' ),
	'default' => 3,
	'choices' => array(
		2 => esc_html__( '2 Columns', 'hnk' ),
		3 => esc_html__( '3 Columns', 'hnk' ),
		4 => esc_html__( '4 Columns', 'hnk' ),
		5 => esc_html__( '5 Columns', 'hnk' ),
	)
);

$controls['portfolio_archive_filter'] = array(
	'type'    => 'switcher',
	'section' => 'portfolio',
	'label'   => esc_html__( 'Show Items Filter', 'hnk' ),
	'default' => true
);

$controls['portfolio_archive_pagination_style'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'Pagination Style', 'hnk' ),
	'section' => 'portfolio',
	'default' => 'numeric',
	'choices' => array(
		'pager' => array(
			'src'     => op_directory_uri() . '/assets/img/paging-pager.png',
			'tooltip' => esc_html__( 'Pager', 'hnk' )
		),
		'numeric' => array(
			'src'     => op_directory_uri() . '/assets/img/paging-numeric.png',
			'tooltip' => esc_html__( 'Numeric', 'hnk' )
		),
		'pager-numeric' => array(
			'src'     => op_directory_uri() . '/assets/img/paging-pager-numeric.png',
			'tooltip' => esc_html__( 'Pager & Numeric', 'hnk' )
		),
		'loadmore' => array(
			'src'     => op_directory_uri() . '/assets/img/paging-loadmore.png',
			'tooltip' => esc_html__( 'Load More', 'hnk' )
		)
	)
);

$controls['portfolio_posts_per_page'] = array(
	'type'     => 'spinner',
	'section'  => 'portfolio',
	'label'    => esc_html__( 'Posts Per Page', 'hnk' ),
	'default'  => get_option( 'posts_per_page' )
);

$controls['portfolio_single_heading'] = array(
	'type'        => 'heading',
	'class'       => 'no-border',
	'section'     => 'portfolio',
	'title'       => esc_html__( 'Single Portfolio', 'hnk' ),
	'description' => esc_html__( 'Change the layout, sidebar, navigator, ... for the single portfolio page.', 'hnk' )
);

$controls['portfolio_single_sidebar_layout'] = array(
	'type'    => 'radio-images',
	'label'   => esc_html__( 'Single Sidebar Position', 'hnk' ),
	'section' => 'portfolio',
	'choices' => array(
		'no-sidebar' => array(
			'src'     => op_directory_uri() . '/assets/img/no-sidebar.png',
			'tooltip' => esc_html__( 'No Sidebar', 'hnk' )
		),
		'sidebar-left' => array(
			'src'     => op_directory_uri() . '/assets/img/sidebar-left.png',
			'tooltip' => esc_html__( 'Sidebar Left', 'hnk' )
		),
		'sidebar-right' => array(
			'src'     => op_directory_uri() . '/assets/img/sidebar-right.png',
			'tooltip' => esc_html__( 'Sidebar Right', 'hnk' )
		)
	),
	'default' => 'sidebar-right'
);

$controls['portfolio_single_sidebar'] = array(
	'type'    => 'dropdown-sidebars',
	'section' => 'portfolio',
	'label'   => esc_html__( 'Single Portfolio Sidebar', 'hnk' ),
	'default' => 'sidebar-primary'
);

$controls['portfolio_post_navigator_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Show Single Navigator', 'hnk' ),
	'section' => 'portfolio',
	'default' => true
);

$controls['portfolio_post_navigator_sticky'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Single Sticky Navigator', 'hnk' ),
	'section' => 'portfolio',
	'default' => false
);

$controls['portfolio_related_box_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Show Related Portfolios', 'hnk' ),
	'section' => 'portfolio',
	'default' => true
);

$controls['portfolio_related_style'] = array(
	'type'    => 'dropdown',
	'section' => 'portfolio',
	'label'   => esc_html__( 'Related Portfolio Style', 'hnk' ),
	'default' => 'grid',
	'choices' => array(
		'grid'      => esc_html__( 'Grid', 'hnk' ),
		'masonry'   => esc_html__( 'Grid Masonry', 'hnk' ),
		'no-margin' => esc_html__( 'Grid No Margin', 'hnk' ),
		'carousel'  => esc_html__( 'Carousel', 'hnk' ),
		'carousel-no-margin'  => esc_html__( 'Carousel No Margin', 'hnk' )
	)
);

$controls['portfolio_related_columns_count'] = array(
	'type'    => 'dropdown',
	'section' => 'portfolio',
	'label'   => esc_html__( 'Columns Count', 'hnk' ),
	'choices' => array(
		1 => esc_html__( '1 Column', 'hnk' ),
		2 => esc_html__( '2 Columns', 'hnk' ),
		3 => esc_html__( '3 Columns', 'hnk' ),
		4 => esc_html__( '4 Columns', 'hnk' ),
		5 => esc_html__( '5 Columns', 'hnk' )
	),
	'default' => 4
);

$controls['portfolio_related_posts_count'] = array(
	'type'    => 'spinner',
	'section' => 'portfolio',
	'label'   => esc_html__( 'Number Of Related Portfolios', 'hnk' ),
	'min'     => 1,
	'default' => 4
);

/**
 * Under Construction
 */
$controls['under_construction_enabled'] = array(
	'type'    => 'switcher',
	'label'   => esc_html__( 'Enable Under Construction', 'hnk' ),
	'section' => 'under-construction',
	'default' => false
);

$controls['under_construction_page_id'] = array(
	'type'     => 'dropdown-pages',
	'section'  => 'under-construction',
	'label'    => esc_html__( 'Under Construction Page', 'hnk' )
);

$controls['under_construction_allowed'] = array(
	'type'    => 'checkboxes',
	'section' => 'under-construction',
	'label'   => esc_html__( 'Role-based Access Permission', 'hnk' ),
	'choices' => function() {
		$choices = array();

		foreach ( get_editable_roles() as $id => $params )
			$choices[$id] = $params['name'];
		
		return $choices;
	},

	'default' => array( 'administrator', 'editor' )
);

return $controls;
