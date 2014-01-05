<?php
/**
 * Custom functions
 */

add_filter( 'widget_display_callback', 'add_widget_title_to_before_widget', 10, 3 );
function add_widget_title_to_before_widget( $instance, $widget_class, $args ) {
    if ( ! empty( $instance['title'] ) ) {
        $new_class = 'class="' . sanitize_title( $instance['title'] ) . ' ';
        $args['before_widget'] = str_replace('class="', $new_class, $args['before_widget']);
        $widget_class->widget( $args, $instance );
        return false;
    }
}

register_nav_menus(array(
  'secondary_navigation' => __('Secondary Navigation', 'roots'),
));

add_filter('upload_mimes', 'custom_upload_mimes'); 
function custom_upload_mimes ( $existing_mimes=array() ) { 
	// Add *.EPS files to Media upload 
	$existing_mimes['eps'] = 'application/postscript'; 
	return $existing_mimes;
}