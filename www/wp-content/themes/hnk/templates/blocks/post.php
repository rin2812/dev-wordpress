<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

global $_post_options, $_post_thumbnail_size;

$_post_options = get_post_meta( get_the_ID(), '_post_options', true );
$_post_thumbnail_size = 'full';

if ( ! is_single() ) {
	switch ( op_option( 'blog_archive_layout' ) ) {
		case 'medium':
			$_post_thumbnail_size = 'portfolio-medium-crop';
			break;

		case 'grid':
			$_post_thumbnail_size = 'blog-medium-crop';
			break;

		case 'masonry':
			$_post_thumbnail_size = 'blog-medium';
			break;

		case 'large':
			$_post_thumbnail_size = 'blog-large';
			break;
	}
}
?>
<article <?php post_class() ?>>
	<div class="entry-wrapper">
		<?php get_template_part( 'templates/blocks/post/cover', get_post_format() ) ?>
		
		<?php if ( op_current_post_type() != 'page' ): ?>

			<header class="entry-header">
				<time class="entry-time" itemprop="datePublished" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d H:i:s' ) ) ?>">
					<?php echo esc_html( get_the_date() ) ?>
				</time>
				<?php hnk_post_title() ?>
				<!--Quang post-->
			</header>

		<?php endif ?>

		<div class="entry-content" itemprop="text">
			
			<?php
			hnk_post_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'hnk' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
			?>

			<?php hnk_post_meta() ?>
		</div>
		<!-- /entry-content -->

		<?php if ( is_single() && get_the_tags() ): ?>
			<div class="entry-footer">
				<div class="entry-tags">
					<strong><?php esc_html_e( 'Tags', 'hnk' ) ?></strong>
					<?php the_tags( '', ' ' ); ?>
				</div>
			</div>
			<!-- /.entry-footer -->
		<?php endif ?>
	</div>
	<!-- /.entry-wrapper -->
</article>
<!-- /#post-<?php echo get_the_ID() ?> -->
