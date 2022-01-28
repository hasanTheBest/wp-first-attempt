<?php

/*
	======================================
		Parse WP version in script and style
	======================================
*/

// Parse WP version String
function remove_wp_version_string( $src ){
	global $wp_version;
	parse_str( parse_url( $src, PHP_URL_QUERY ), $query );
	if( ! empty( $query['ver'] ) && $query['ver'] === $wp_version ){
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'script_loader_src', 'remove_wp_version_string' );
add_filter( 'style_loader_src', 'remove_wp_version_string' );

// Remove wp meta version generator
function remove_wp_meta_version (){
	return '';
}
add_filter( 'the_generator', 'remove_wp_meta_version' );