<?php 

function wpb_customizer_register($wp_customize){
	// Showcase section
	$wp_customize => add_section('showcase', array(
		'title' => __('Showcase', 'wpbootstrap'),
		'description' => sprintf(__('Options for Showcase Section', 'wpbootstrap')),
		'priority' => 130
	));

	// Add setting
	$wp_customize = add_setting('showcase_heading', array(
		'default'		=> _x('Wordpress Bootstrap Website', 'wpbootstrap'),
		'type'			=> 'theme_mod'
	));

	// Add Control
	$wp_customize = add_control('showcase_heading', array(
		'title'	=> __('Heading', 'wpbootstrap'),
		'section'=> 'chowcase',
		'priority' => 1
	));
}
add_action('customize_register', 'wpb_customizer_register');