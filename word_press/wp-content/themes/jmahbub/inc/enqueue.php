<?php

/*
	======================================
		Admin enquere functions
	======================================
*/

function hablu_load_admin_scripts($hook){

	if( 'toplevel_page_mh_hablu' != $hook ){return;}

	wp_register_style( 'hablu_admin', get_template_directory_uri() . '/script/css/hablu.admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('hablu_admin');

	wp_enqueue_media();

	wp_register_script( 'hablu-admin-js', get_template_directory_uri() . '/script/js/hablu.admin.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script('hablu-admin-js');

} 
add_action( 'admin_enqueue_scripts', 'hablu_load_admin_scripts' );


/*
	======================================
		Front end enque script 
	======================================
*/
function hablu_enqueue_scripts(){
	wp_enqueue_style('bootstrpa-style', get_template_directory_uri() . '/script/css/bootstrap.css', array(), '3.2.0', 'all');
	wp_enqueue_style('custom-site-style', get_template_directory_uri() . '/script/css/site.css', array(), 'all');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri(). '/script/js/jquery-1.8.3.js', false, '1.8.3', true );
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/script/js/bootstrap.js', array('jquery'), '3.2.0', true);
}
add_action('wp_enqueue_scripts', 'hablu_enqueue_scripts');