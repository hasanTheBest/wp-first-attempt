<?php

/*
	======================================
		THEME SUPPORT OPTIONS
	======================================
*/

$options = get_option( 'post_formats' );
$formats = array('aside', 'audio', 'video', 'status', 'quote', 'link', 'image', 'gallery', 'chat');
$output = array();
foreach ($formats as $format) {
	$output[] = ( @$options[$format] == 1 ? $format : '' );
}

if( !empty($options) ){
	add_theme_support('post-formats', $output);
}

$header = get_option( 'custom_header' );
if( @$header == 1 ){
	add_theme_support( 'custom-header' );
}
$background = get_option( 'custom_background' );
if( @$background == 1 ){
	add_theme_support( 'custom-background' );
}