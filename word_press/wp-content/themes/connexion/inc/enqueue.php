<?php

/*
	======================================
		Integrate stylesheet and javascript
	======================================
*/
function connexion_enqueue_scripts(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all');
	wp_enqueue_style('connexion', get_template_directory_uri() . '/css/connexion.css', array(), '1.0.0', 'all');
	/*wp_enqueue_style( 'Raleway', 'linkhbe' );*/

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js', false, '3.3.1', true );
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '4.0.0', true);
	wp_enqueue_script( 'connexion', get_template_directory_uri() . '/js/connexion.js', 'jquery', '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'connexion_enqueue_scripts');