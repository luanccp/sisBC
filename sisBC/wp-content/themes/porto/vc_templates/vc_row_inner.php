<?php
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $css
 * @var $el_id
 * @var $content - shortcode content
 *
 * Extra Params
 * @var $is_sticky
 * @var $sticky_container_selector
 * @var $sticky_min_width
 * @var $sticky_top
 * @var $sticky_bottom
 * @var $sticky_active_class
 * @var $animation_type
 * @var $animation_duration
 * @var $animation_delay
 *
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row_Inner
 */
$el_class = $css = $el_id = '';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );

$css_classes = array(
	'vc_row',
	'wpb_row', //deprecated
	'vc_inner',
	'vc_row-fluid',
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);
$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

if ($animation_type) {
    $wrapper_attributes[] = 'data-appear-animation="'.$animation_type.'"';
    if ($animation_delay)
        $wrapper_attributes[] = 'data-appear-animation-delay="'.$animation_delay.'"';
    if ($animation_duration && $animation_duration != 1000)
        $wrapper_attributes[] = 'data-appear-animation-duration="'.$animation_duration.'"';
}

$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';

if ($is_sticky) {
    $options = array();
    $options['containerSelector'] = $sticky_container_selector;
    $options['minWidth'] = (int)$sticky_min_width;
    $options['padding']['top'] = (int)$sticky_top;
    $options['padding']['bottom'] = (int)$sticky_bottom;
    $options['activeClass'] = $sticky_active_class;
    $options = json_encode($options);

    $output .= '<div data-plugin-sticky data-plugin-options="' . esc_attr($options) . '">';
}

$output .= wpb_js_remove_wpautop( $content );

if ($is_sticky) {
    $output .= '</div>';
}

$output .= '</div>';
$output .= $after_output;

echo $output;