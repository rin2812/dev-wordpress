<?php
/**
 * WARNING: This file is part of the UI-Pack plugin. DO NOT edit
 * this file under any circumstances.
 */
if ( ! defined( 'ABSPATH' ) )
	exit;

/**
 * An action to define containers class
 * for the specific elements
 */
add_action( 'vc_before_init', function() {
	if ( ! class_exists( 'WPBakeryShortCode_Elements_Carousel' ) ) {
		/**
		 * Extended class to integrate elements carousel with
		 * visual composer
		 */
		class WPBakeryShortCode_Elements_Carousel extends WPBakeryShortCodesContainer {
	    }
	}

	if ( ! class_exists( 'WPBakeryShortCode_IconList' ) ) {
	    /**
		 * Extended class to integrate iconlist with
		 * visual composer
		 */
	    class WPBakeryShortCode_IconList extends WPBakeryShortCodesContainer {
	    }
	}
} );


add_action( 'vc_before_init', function() {
	$params = array();
	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Categories', 'hnk' ),
		'description' => __( 'If you want to narrow output, enter category slugs here. Note: Only listed categories will be included.', 'hnk' ),
		'param_name'  => 'categories'
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Tags', 'hnk' ),
		'description' => __( 'If you want to narrow output, enter tag slugs here. Note: Only listed tags will be included.', 'hnk' ),
		'param_name'  => 'tags'
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Exclude', 'hnk' ),
		'description' => __( 'If you want to exclude the posts, enter post slugs here. Note: Only listed tags will be included.', 'hnk' ),
		'param_name'  => 'exclude'
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Limit', 'hnk' ),
		'description' => __( 'The number of posts will be shown', 'hnk' ),
		'param_name'  => 'limit',
		'value'       => 9
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Offset', 'hnk' ),
		'description' => __( 'The number of posts to pass over', 'hnk' ),
		'param_name'  => 'offset',
		'value'       => 0
	);

	$params[] = array(
		'type'        => 'dropdown',
		'heading'     => __( 'Order By', 'hnk' ),
		'description' => __( 'Select how to sort retrieved posts.', 'hnk' ),
		'param_name'  => 'order_by',
		'std'         => 'date',
		'value'       => array(
			__( 'Date', 'hnk' )          => 'date',
			__( 'ID', 'hnk' )            => 'ID',
			__( 'Author', 'hnk' )        => 'author',
			__( 'Title', 'hnk' )         => 'title',
			__( 'Modified', 'hnk' )      => 'modified',
			__( 'Random', 'hnk' )        => 'rand',
			__( 'Comment count', 'hnk' ) => 'comment_count',
			__( 'Menu order', 'hnk' )    => 'menu_order'
		)
	);

	$params[] = array(
		'type'        => 'dropdown',
		'heading'     => __( 'Order Direction', 'hnk' ),
		'description' => __( 'Designates the ascending or descending order.', 'hnk' ),
		'param_name'  => 'order_direction',
		'std'         => 'DESC',
		'value'       => array(
			__( 'Ascending', 'hnk' )  => 'ASC',
			__( 'Descending', 'hnk' ) => 'DESC'
		)
	);

	$params[] = array(
		'type'        => 'textfield',
		'heading'     => __( 'Extra Class', 'hnk' ),
		'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'hnk' ),
		'param_name'  => 'class'
	);

	$params[] = array(
		'type' => 'css_editor',
		'param_name' => 'css',
		'group' => __( 'Design Options', 'hnk' )
	);

	vc_map( array(
		'base'        => 'projects_justify',
		'name'        => __( 'LineThemes: Projects Justified', 'hnk' ),
		'category'    => __( 'LineThemes', 'hnk' ),
		'params'      => $params
	) );
} );


add_action( 'vc_before_init', function() {
	if ( ! defined( 'PTP_PLUGIN_PATH' ) ) {
	    return;
	}

	$tables = array();
	$query  = new WP_Query( array( 'post_type' => 'easy-pricing-table', 'nopaging' => true ) );

	while ( $query->have_posts() ) {
		$query->next_post();
		$tables[get_the_title( $query->post->ID )] = $query->post->ID;
	}

	vc_map( array(
		'base'        => 'pricing_table',
		'name'        => __( 'LineThemes: Pricing Table', 'hnk' ),
		'icon'        => 'anycar-shortcode',
		'category'    => __( 'LineThemes', 'hnk' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Table ID', 'hnk' ),
				'param_name' => 'id',
				'value'      => $tables
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra class name', 'hnk' ),
				'param_name'  => 'class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'hnk' )
			),

			array(
				'type'       => 'css_editor',
				'param_name' => 'css',
				'group'      => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );


/**
 * An action to map the team member shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	/**
	 * Map the single member item
	 */
	vc_map( array(
		'base'        => 'member',
		'name'        => __( 'LineThemes: Team Member', 'hnk' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'hnk' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Name', 'hnk' ),
				'param_name'  => 'name'
			),

			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Image', 'hnk' ),
				'param_name' => 'image'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Subtitle', 'hnk' ),
				'param_name'       => 'subtitle',
			),

			array(
				'type'       => 'textarea',
				'heading'    => __( 'Content', 'hnk' ),
				'param_name' => 'content'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Facebook URL', 'hnk' ),
				'param_name' => 'facebook'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Twitter URL', 'hnk' ),
				'param_name' => 'twitter'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'LinkedIn URL', 'hnk' ),
				'param_name' => 'linkedin'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Google+ URL', 'hnk' ),
				'param_name' => 'google'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'hnk' ),
				'param_name' => 'class'
			),

			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Show Social Icons On Hover', 'hnk' ),
				'param_name' => 'hover_show_icons',
				'value'      => array(
					__( 'Yes, please', 'hnk' ) => 'yes'
				)
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );


/**
 * An action to map the testimonial shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'base'        => 'testimonial',
		'name'        => __( 'LineThemes: Testimonial', 'hnk' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'hnk' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Name', 'hnk' ),
				'param_name'  => 'name'
			),

			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Image', 'hnk' ),
				'param_name' => 'image'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Subtitle', 'hnk' ),
				'param_name'       => 'subtitle',
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Company', 'hnk' ),
				'param_name'       => 'company',
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Link', 'hnk' ),
				'param_name'       => 'link'
			),

			array(
				'type'       => 'textarea',
				'heading'    => __( 'Content', 'hnk' ),
				'param_name' => 'content'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'hnk' ),
				'param_name' => 'class'
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );


/**
 * An action to map the blog posts shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'name'                    => __( 'LineThemes: Blog Posts', 'hnk' ),
		'base'                    => 'posts',
		'params'                  => array(
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Widget Title', 'hnk' ),
				'param_name'  => 'title',
				'description' => __( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'hnk' )
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Category', 'hnk' ),
				'param_name'  => 'category',
				'description' => __( 'Enter the category\'s slug that will be used to filter posts', 'hnk' )
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Tag', 'hnk' ),
				'param_name'  => 'tag',
				'description' => __( 'Enter the tag\'s slug that will be used to filter posts', 'hnk' )
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Layout', 'hnk' ),
				'param_name' => 'layout',
				'value'      => array(
					__( 'Grid', 'hnk' ) => 'grid'
				)
			),
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Grid Columns', 'hnk' ),
				'param_name'  => 'grid_columns',
				'description' => __( 'The number of columns for grid and grid masonry layout', 'hnk' ),
				'value'       => array(
					__( '1 Columns', 'hnk' ) => 1,
					__( '2 Columns', 'hnk' ) => 2,
					__( '3 Columns', 'hnk' ) => 3,
					__( '4 Columns', 'hnk' ) => 4
				)
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Limit', 'hnk' ),
				'param_name'  => 'limit',
				'description' => __( 'The number of posts will be shown', 'hnk' ),
				'value'       => 9
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Offset', 'hnk' ),
				'param_name'  => 'offset',
				'description' => __( 'The number of posts to pass over', 'hnk' ),
				'value'       => 0
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Hide Post Content', 'hnk' ),
				'param_name' => 'hide_content',
				'value'      => array(
					__( 'Yes, please', 'hnk' ) => 'yes'
				)
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Post Content Length', 'hnk' ),
				'param_name' => 'content_length',
				'value'      => 40
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Hide Read More', 'hnk' ),
				'param_name' => 'hide_readmore',
				'value'      => array(
					__( 'Yes, please', 'hnk' ) => 'yes'
				)
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Read More Text', 'hnk' ),
				'param_name' => 'readmore_text',
				'value'      => __( 'Continue &rarr;', 'hnk' )
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra class name', 'hnk' ),
				'param_name'  => 'class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'hnk' )
			),

			array(
				'type'       => 'css_editor',
				'param_name' => 'css',
				'group'      => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );


/**
 * An action to map the iconlist item shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'base'        => 'iconlist_item',
		'name'        => __( 'LineThemes: Icon List Item', 'hnk' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'hnk' ),
		'as_child'    => array( 'only' => 'iconlist' ),
		'params'      => array(
			array(
				'type' => 'textfield',
				'heading' => __( 'List Icon', 'hnk' ),
				'param_name' => 'icon',
				'description' => __( 'Default icon for all items in the list', 'hnk' )
			),
			array(
				'type' => 'attach_image',
				'heading' => __( 'List Image', 'hnk' ),
				'param_name' => 'image',
				'description' => __( 'Default image for all items in the list', 'hnk' )
			),
			array(
				'type' => 'textarea',
				'heading' => __( 'Content', 'hnk' ),
				'param_name' => 'content'
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Enable Icon Circle Style', 'hnk' ),
				'param_name' => 'circle_style',
				'value' => array(
					__( 'Yes, please', 'hnk' ) => 'yes'
				)
			),
			
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'hnk' ),
				'param_name' => 'class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'hnk' )
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );


/**
 * An action to map the iconlist shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	/**
	 * Map the iconlist slider shortcode
	 */
	vc_map( array(
		'name'                    => __( 'LineThemes: Icon List', 'hnk' ),
		'base'                    => 'iconlist',
		'as_parent'               => array( 'only' => 'iconlist_item' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'content_element'         => true,
		'show_settings_on_create' => false,
		'category'    => __( 'LineThemes', 'hnk' ),
		'params'                  => array(
			array(
				'type' => 'textfield',
				'heading' => __( 'List Icon', 'hnk' ),
				'param_name' => 'icon',
				'description' => __( 'Default icon for all items in the list', 'hnk' )
			),
			array(
				'type' => 'attach_image',
				'heading' => __( 'List Image', 'hnk' ),
				'param_name' => 'image',
				'description' => __( 'Default image for all items in the list', 'hnk' )
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'hnk' ),
				'param_name' => 'class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'hnk' )
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'hnk' )
			)
		),
		'js_view' => 'VcColumnView'
	) );
} );


/**
 * An action to map the iconbox shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'base'        => 'iconbox',
		'name'        => __( 'LineThemes: Icon Box', 'hnk' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'hnk' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Icon', 'hnk' ),
				'param_name'  => 'icon',
				'description' => sprintf( __( 'FontAwesome Icon name. <a href="%s" target="blank">Full list of icons</a>', 'hnk' ), 'http://fontawesome.io/icons/' )
			),

			// Title
			array(
				'type'             => 'textfield',
				'heading'          => __( 'Title', 'hnk' ),
				'param_name'       => 'title',
				'edit_field_class' => 'vc_col-md-6 vc_column'
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Title Element Tag', 'hnk' ),
				'param_name' => 'tag',
				'value'      => array(
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',
					'h6' => 'h6'
				)
			),

			array(
				'type'       => 'textarea',
				'heading'    => __( 'Content', 'hnk' ),
				'param_name' => 'content'
			),

			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Image', 'hnk' ),
				'param_name' => 'image',
				'description' => __( 'Select image to replace the icon', 'hnk' )
			),

			array(
				'type' => 'textfield',
				'heading' => __( 'Read More Link', 'hnk' ),
				'param_name' => 'link',
				'description' => __( 'Enter custom url for read more button', 'hnk' )
			),

			array(
				'type' => 'textfield',
				'heading' => __( 'Read More Text', 'hnk' ),
				'param_name' => 'text',
				'description' => __( 'Enter custom text for read more button', 'hnk' ),
				'value' => __( 'more...', 'hnk' )
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'hnk' ),
				'param_name' => 'class'
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );


/**
 * An action to map the counter shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'base'        => 'counter',
		'name'        => __( 'LineThemes: Counter', 'hnk' ),
		'icon'        => 'linethemes-shortcode',
		'category'    => __( 'LineThemes', 'hnk' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Icon', 'hnk' ),
				'param_name'  => 'icon',
				'description' => sprintf( __( 'FontAwesome Icon name. <a href="%s" target="blank">Full list of icons</a>', 'hnk' ), 'http://fontawesome.io/icons/' )
			),

			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Image', 'hnk' ),
				'param_name' => 'image',
				'description' => __( 'Select image to replace the icon', 'hnk' )
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Title', 'hnk' ),
				'param_name'       => 'title'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Value', 'hnk' ),
				'param_name'       => 'value',
				'value'            => 0
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Prefix', 'hnk' ),
				'param_name'       => 'prefix'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Suffix', 'hnk' ),
				'param_name'       => 'suffix'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Duration', 'hnk' ),
				'param_name'       => 'duration',
				'value'            => 1000
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'hnk' ),
				'param_name' => 'class'
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );


/**
 * An action to map the posts carousel shortcode
 * into the Visual Compsoer
 */
add_action( 'admin_init', function() {
	$terms = get_terms( 'category' );
	$values = array();

	if ( is_array( $terms ) ) {
		foreach ( $terms as $term )
			$values[] = array( 'label' => $term->name, 'value' => $term->term_id );
	}

	vc_map( array(
		'name'          => __( 'LineThemes: Posts Carousel', 'hnk' ),
		'base'          => 'posts_carousel',
		'icon'          => 'themekit-shortcode',
		'category'      => 'LineThemes',
		'params'        => array(
			// General tab
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Widget Title', 'hnk' ),
				'description' => __( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'hnk' ),
				'param_name'  => 'widget_title'
			),

			array(
				'type'        => 'autocomplete',
				'heading'     => __( 'Categories', 'hnk' ),
				'description' => __( 'If you want to narrow output, enter category names here. Note: Only listed categories will be included.', 'hnk' ),
				'param_name'  => 'categories',
				'settings'    => array(
					'multiple'       => true,
					'sortable'       => true,
					'min_length'     => 1,
					'no_hide'        => true,
					'unique_values'  => true,
					'display_inline' => true,
					'values'         => $values
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Tags', 'hnk' ),
				'description' => __( 'If you want to narrow output, enter tag names here. Note: Only listed tags will be included.', 'hnk' ),
				'param_name'  => 'tags'
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Limit', 'hnk' ),
				'description' => __( 'The number of posts will be shown', 'hnk' ),
				'param_name'  => 'limit',
				'value'       => 9
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Offset', 'hnk' ),
				'description' => __( 'The number of posts to pass over', 'hnk' ),
				'param_name'  => 'offset',
				'value'       => 0
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Thumbnail Size', 'hnk' ),
				'description' => __( 'Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'hnk' ),
				'param_name'  => 'thumbnail_size'
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show Post Date?', 'hnk' ),
				'description' => __( 'Select "Yes" to display post date in the carousel', 'hnk' ),
				'param_name'  => 'show_date',
				'std'         => 'no',
				'value'       => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Date format', 'hnk' ),
				'description' => __( 'Enter custom date format that will be shown', 'hnk' ),
				'param_name'  => 'date_format',
				'dependency'  => array(
					'element' => 'show_date',
					'value'   => 'yes'
				),
				'value'       => ''
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show Post Excerpt?', 'hnk' ),
				'description' => __( 'Select "Yes" to display post excerpt in the carousel', 'hnk' ),
				'param_name'  => 'show_excerpt',
				'std'         => 'no',
				'value'       => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Auto Post Excerpt?', 'hnk' ),
				'description' => __( 'Select "Yes" to display automatic generate post excerpt', 'hnk' ),
				'param_name'  => 'auto_excerpt',
				'dependency'  => array(
					'element' => 'show_excerpt',
					'value'   => 'yes'
				),
				'std'         => 'no',
				'value'       => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Post excerpt length', 'hnk' ),
				'description' => __( 'Enter the custom length of post excerpt that will be generated', 'hnk' ),
				'param_name'  => 'excerpt_length',
				'dependency'  => array(
					'element' => 'auto_excerpt',
					'value'   => 'yes'
				),
				'value'       => 200
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Read more', 'hnk' ),
				'description' => __( 'Select "YES" to show the read more link', 'hnk' ),
				'param_name' => 'readmore',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Read more text', 'hnk' ),
				'description' => __( 'Custom text for the read more link', 'hnk' ),
				'param_name'  => 'readmore_text',
				'dependency'  => array(
					'element' => 'readmore',
					'value'   => 'yes'
				),
				'value'       => __( 'Read More', 'hnk' )
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Order By', 'hnk' ),
				'description' => __( 'Select how to sort retrieved posts.', 'hnk' ),
				'param_name'  => 'order',
				'std'         => 'date',
				'value'       => array(
					__( 'Date', 'hnk' )          => 'date',
					__( 'ID', 'hnk' )            => 'ID',
					__( 'Author', 'hnk' )        => 'author',
					__( 'Title', 'hnk' )         => 'title',
					__( 'Modified', 'hnk' )      => 'modified',
					__( 'Random', 'hnk' )        => 'rand',
					__( 'Comment count', 'hnk' ) => 'comment_count',
					__( 'Menu order', 'hnk' )    => 'menu_order'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Order Direction', 'hnk' ),
				'description' => __( 'Designates the ascending or descending order.', 'hnk' ),
				'param_name'  => 'direction',
				'std'         => 'DESC',
				'value'       => array(
					__( 'Ascending', 'hnk' )          => 'ASC',
					__( 'Descending', 'hnk' )            => 'DESC'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra Class', 'hnk' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'hnk' ),
				'param_name'  => 'class'
			),

			// Carousel Options
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show Items', 'hnk' ),
				'description' => __( 'The maximum amount of items displayed at a time', 'hnk' ),
				'param_name'  => 'items',
				'group'       => __( 'Carousel Options', 'hnk' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 4
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Autoplay?', 'hnk' ),
				'param_name' => 'autoplay',
				'group'      => __( 'Carousel Options', 'hnk' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Stop On Hover?', 'hnk' ),
				'description' => __( 'Rewind speed in milliseconds', 'hnk' ),
				'param_name'  => 'hover_stop',
				'group'       => __( 'Carousel Options', 'hnk' ),
				'std'         => 'yes',
				'value'       => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Slider Controls', 'hnk' ),
				'param_name'  => 'controls',
				'group'       => __( 'Carousel Options', 'hnk' ),
				'std'         => 'navigation,rewind-navigation,pagination,pagination-numbers',
				'value'       => array(
					__( 'Navigation', 'hnk' )         => 'navigation',
					__( 'Rewind Navigation', 'hnk' )  => 'rewind-navigation',
					__( 'Pagination', 'hnk' )         => 'pagination',
					__( 'Pagination Numbers', 'hnk' ) => 'pagination-numbers'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Scroll Per Page?', 'hnk' ),
				'param_name' => 'scroll_page',
				'group'       => __( 'Carousel Options', 'hnk' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Allow Mouse Drag?', 'hnk' ),
				'param_name' => 'mouse_drag',
				'group'      => __( 'Carousel Options', 'hnk' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Allow Touch Drag?', 'hnk' ),
				'param_name' => 'touch_drag',
				'group'      => __( 'Carousel Options', 'hnk' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			// Speed
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Autoplay Speed', 'hnk' ),
				'description' => __( 'Autoplay speed in milliseconds', 'hnk' ),
				'param_name'  => 'autoplay_speed',
				'group'       => __( 'Speed', 'hnk' ),
				'value'       => 5000
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Slide Speed', 'hnk' ),
				'description' => __( 'Slide speed in milliseconds', 'hnk' ),
				'param_name'  => 'slide_speed',
				'group' => __( 'Speed', 'hnk' ),
				'value'       => 200
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Pagination Speed', 'hnk' ),
				'description' => __( 'Pagination speed in milliseconds', 'hnk' ),
				'param_name'  => 'pagination_speed',
				'group' => __( 'Speed', 'hnk' ),
				'value'       => 200
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Rewind Speed', 'hnk' ),
				'description' => __( 'Rewind speed in milliseconds', 'hnk' ),
				'param_name'  => 'rewind_speed',
				'group' => __( 'Speed', 'hnk' ),
				'value'       => 200
			),

			// Responsive
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Enable Responsive?', 'hnk' ),
				'param_name' => 'responsive',
				'group'      => __( 'Responsive', 'hnk' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Items On Tablet', 'hnk' ),
				'description' => __( 'The maximum amount of items displayed at a time on tablet device', 'hnk' ),
				'param_name'  => 'tablet_items',
				'group'       => __( 'Responsive', 'hnk' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 2
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Items On Mobile', 'hnk' ),
				'description' => __( 'The maximum amount of items displayed at a time on mobile device', 'hnk' ),
				'param_name'  => 'mobile_items',
				'group'       => __( 'Responsive', 'hnk' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 1
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );


/**
 * An action to map the google maps shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'base'        => 'maps',
		'name'        => __( 'LineThemes: Google Maps', 'hnk' ),
		'icon'        => 'themekit-shortcode',
		'category'    => __( 'LineThemes', 'hnk' ),
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Maps Type', 'hnk' ),
				'description' => __( 'Select the Maps type', 'hnk' ),
				'param_name'  => 'type',
				'value'       => array(
					'ROADMAP'   => 'roadmap',
					'SATELLITE' => 'satellite',
					'HYBRID'    => 'hybrid',
					'TERRAIN'   => 'terrain'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Maps Style', 'hnk' ),
				'description' => __( 'Select style for the Maps', 'hnk' ),
				'param_name'  => 'style',
				'value'       => array(
					'Default'          => 'default',
					'Subtle Grayscale' => 'subtle-grayscale',
					'Pale Dawn'        => 'pale-dawn',
					'Blue Water'       => 'blue-warter',
					'Light Monochrome' => 'light-monochrome'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Address', 'hnk' ),
				'param_name'  => 'address',
				'description' => sprintf( __( 'Enter you address that will show at the center of the Maps', 'hnk' ), 'http://fontawesome.io/icons/' )
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Zoom Level', 'hnk' ),
				'param_name'  => 'zoomlevel',
				'description' => __( 'Select the default zoom level for the Maps', 'hnk' ),
				'value'       => array_combine( range( 1, 24 ), range( 1, 24 ) ),
				'std'         => 15
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Enable Zoom On Mouse Scroll', 'hnk' ),
				'description' => __( 'If select "yes", the maps will zoom in/out when user scroll the mouse', 'hnk' ),
				'param_name'  => 'zoomable',
				'value'       => array(
					__( 'No' )  => 'no',
					__( 'Yes' ) => 'yes'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Enable Draggable', 'hnk' ),
				'param_name'  => 'draggable',
				'value'       => array(
					__( 'No' )  => 'no',
					__( 'Yes' ) => 'yes'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show The Marker', 'hnk' ),
				'param_name'  => 'show_marker',
				'value'       => array(
					__( 'No' )  => 'no',
					__( 'Yes' ) => 'yes'
				)
			),

			array(
				'type'       => 'attach_image',
				'heading'    => esc_html__( 'Marker Image', 'hnk' ),
				'param_name' => 'marker'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Height', 'hnk' ),
				'param_name' => 'height',
				'value'      => 300
			),

			array(
				'type'        => 'textarea',
				'heading'     => __( 'Locations', 'hnk' ),
				'description' => __( 'Enter you locations(one per line) that will show on the Maps', 'hnk' ),
				'param_name'  => 'content'
			)
		)
	) );
} );


/**
 * An action to map the image box shortcode
 * into the Visual Compsoer
 */
add_action( 'admin_init', function() {
	vc_map( array(
		'name'          => __( 'LineThemes: Image Box', 'hnk' ),
		'base'          => 'imagebox',
		'icon'          => 'themekit-shortcode',
		'category'      => 'LineThemes'
	) );

	vc_map_update( 'imagebox', array(
		'params'      => array(
			// Title
			array(
				'type'             => 'textfield',
				'heading'          => __( 'Title', 'hnk' ),
				'param_name'       => 'title'
			),

			array(
				'type'             => 'textfield',
				'heading'          => __( 'Subtitle', 'hnk' ),
				'param_name'       => 'subtitle'
			),

			array(
				'type'       => 'textarea',
				'heading'    => __( 'Description', 'hnk' ),
				'param_name' => 'content'
			),

			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Image', 'hnk' ),
				'param_name' => 'image'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Image Size', 'hnk' ),
				'param_name' => 'image_size',
				'value'      => 'full'
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Link', 'hnk' ),
				'param_name' => 'link'
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Link Target', 'hnk' ),
				'param_name' => 'target',
				'value'      => array(
					'_self'   => __( '_self', 'hnk' ),
					'_blank'  => __( '_blank', 'hnk' ),
					'_parent' => __( '_parent', 'hnk' ),
					'_top'    => __( '_top', 'hnk' )
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Show Link As Button?', 'hnk' ),
				'param_name' => 'show_button',
				'std'        => 'no',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' )  => 'no'
				)
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Button Text', 'hnk' ),
				'param_name' => 'button_text',
				'value'      => __( 'Continue', 'hnk' )
			),

			array(
				'type'       => 'textfield',
				'heading'    => __( 'Extra Class', 'hnk' ),
				'param_name' => 'class'
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );


/**
 * An action to map the elements carousel shortcode
 * into the Visual Compsoer
 */
add_action( 'vc_before_init', function() {
	vc_map( array(
		'name'                    => __( 'LineThemes: Elements Carousel', 'hnk' ),
		'base'                    => 'elements_carousel',
		'icon'                    => 'themekit-shortcode',
		'show_settings_on_create' => false,
		'is_container'            => true,
		'category'                => 'LineThemes',
		'js_view'                 => 'VcColumnView',
		'html_template'           => __DIR__ . '/templates/elements-carousel.php',
		'params'                  => array(
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Show Items', 'hnk' ),
				'description' => __( 'The maximum amount of items displayed at a time', 'hnk' ),
				'param_name'  => 'items',
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 4
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Autoplay?', 'hnk' ),
				'param_name' => 'autoplay',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Stop On Hover?', 'hnk' ),
				'description' => __( 'Rewind speed in milliseconds', 'hnk' ),
				'param_name'  => 'hover_stop',
				'std'         => 'yes',
				'value'       => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Slider Controls', 'hnk' ),
				'param_name'  => 'controls',
				'std'         => 'navigation,rewind-navigation,pagination,pagination-numbers',
				'value'       => array(
					__( 'Navigation', 'hnk' )         => 'navigation',
					__( 'Rewind Navigation', 'hnk' )  => 'rewind-navigation',
					__( 'Pagination', 'hnk' )         => 'pagination',
					__( 'Pagination Numbers', 'hnk' ) => 'pagination-numbers'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Scroll Per Page?', 'hnk' ),
				'param_name' => 'scroll_page',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Allow Mouse Drag?', 'hnk' ),
				'param_name' => 'mouse_drag',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Allow Touch Drag?', 'hnk' ),
				'param_name' => 'touch_drag',
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra Class', 'hnk' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'hnk' ),
				'param_name'  => 'class'
			),

			// Speed options
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Autoplay Speed', 'hnk' ),
				'description' => __( 'Autoplay speed in milliseconds', 'hnk' ),
				'param_name'  => 'autoplay_speed',
				'group'       => __( 'Speed Options', 'hnk' ),
				'value'       => 5000
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Slide Speed', 'hnk' ),
				'description' => __( 'Slide speed in milliseconds', 'hnk' ),
				'param_name'  => 'slide_speed',
				'group' => __( 'Speed Options', 'hnk' ),
				'value'       => 200
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Pagination Speed', 'hnk' ),
				'description' => __( 'Pagination speed in milliseconds', 'hnk' ),
				'param_name'  => 'pagination_speed',
				'group' => __( 'Speed Options', 'hnk' ),
				'value'       => 200
			),

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Rewind Speed', 'hnk' ),
				'description' => __( 'Rewind speed in milliseconds', 'hnk' ),
				'param_name'  => 'rewind_speed',
				'group' => __( 'Speed Options', 'hnk' ),
				'value'       => 200
			),

			// Responsive options
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Enable Responsive?', 'hnk' ),
				'param_name' => 'responsive',
				'group'      => __( 'Responsive Options', 'hnk' ),
				'std'        => 'yes',
				'value'      => array(
					__( 'Yes', 'hnk' ) => 'yes',
					__( 'No', 'hnk' ) => 'no'
				)
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Items On Tablet', 'hnk' ),
				'description' => __( 'The maximum amount of items displayed at a time on tablet device', 'hnk' ),
				'param_name'  => 'tablet_items',
				'group'       => __( 'Responsive Options', 'hnk' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 2
			),

			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Items On Mobile', 'hnk' ),
				'description' => __( 'The maximum amount of items displayed at a time on mobile device', 'hnk' ),
				'param_name'  => 'mobile_items',
				'group'       => __( 'Responsive Options', 'hnk' ),
				'value'       => array_combine( range( 1, 6 ), range( 1, 6 ) ),
				'std'         => 1
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => __( 'Design Options', 'hnk' )
			)
		)
	) );
} );
