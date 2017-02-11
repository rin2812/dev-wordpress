<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

$available_icons = op_available_social_icons();
$social_links    = op_option( 'social_links' );

if ( ! isset( $social_links['__icons_ordering__'] ) ) {
	$social_links['__icons_ordering__'] = $available_icons['__icons_ordering__'];
}
?>
<div id="masthead">
	<div id="site-brand">
		<div class="wrapper">
			<?php get_template_part( 'templates/blocks/header/brand' ) ?>
			<?php get_template_part( 'templates/blocks/header/widgets' ) ?>
		</div>
	</div>
	<nav id="site-navigator" class="navigator" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
		<div class="wrapper">
			
			<?php
			/**
			 * Call actions before display primary menu
			 */
			do_action( 'theme/before_primary_menu', array( 'env' => 'desktop' ) );

			/**
			 * Display the primary menu
			 */
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'container'       => false,
				'menu_class'      => 'menu',
				'fallback_cb'     => false,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0
			) );

			/**
			 * Call actions after display primary menu
			 */
			do_action( 'theme/after_primary_menu', array( 'env' => 'desktop' ) );
			?>
			
			<div class="social-links">
				<?php foreach ( $social_links['__icons_ordering__'] as $id ):
					if ( ! isset( $available_icons[$id] ) || ! isset( $social_links[$id] ) )
						continue;

					$link = $social_links[$id];
					$icon_class = $available_icons[$id]['icon_class'];
					?>
					<a href="<?php echo esc_url( $link ) ?>" target="_blank">
						<i class="fa <?php echo esc_attr( $icon_class ) ?>"></i>
					</a>
				<?php endforeach ?>
			</div>
			<!-- /.social-links -->
		</div>
	</nav>

	<?php get_template_part( 'templates/blocks/header/navigator', 'mobile' ) ?>
</div>
