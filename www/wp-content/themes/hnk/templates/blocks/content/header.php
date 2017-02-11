<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();

if ( op_option( 'pagetitle_enabled', true ) == false )
	return;

$parallax_attr = ! op_option( 'pagetitle_parallax', false ) ?: 'data-stellar-background-ratio="0.2"';
?>
<div id="page-header"
	<?php if ( op_option( 'pagetitle_parallax', false ) ): ?>
		data-stellar-background-ratio="0.2"
	<?php endif ?>
	>
	<div class="wrapper">
		<?php get_template_part( 'templates/blocks/content/header', 'title' ) ?>
		<?php get_template_part( 'templates/blocks/content/breadcrumb' ) ?>
	</div>
	<!-- /.wrapper -->
</div>
<!-- /#page-header -->
