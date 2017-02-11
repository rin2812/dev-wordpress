<?php
$atts = shortcode_atts( array(
	'mode'            => 'horizontal',
	'speed'           => '5000',
	'slides_per_view' => '1',
	'autoplay'        => 'yes',
	'hide_control'    => '',
	'hide_buttons'    => '',
	'loop'            => 'yes',
	'class'           => '',
	'css'             => ''
), $atts );

$config_id = uniqid( '_testimonialSlider_' );
$config = $atts;

unset( $config['class'] );
unset( $config['css'] );

$class = array( 'testimonial-slider', $atts['class'] );

return sprintf( '
	<div class="%s" data-config="%s">
		<div class="flexslider">
			<div class="slides">
				%s
			</div>
		</div>
	</div>
', implode( ' ', $class ), esc_attr( trim( json_encode( $config ), '{ }' ) ), do_shortcode( $content ) );