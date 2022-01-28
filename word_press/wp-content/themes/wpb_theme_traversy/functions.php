<?php

	// support for feature images
	add_theme_support('post-thumbnails');

	// register nav menu
	function register_wp_menus(){
		register_nav_menus(
			array(
				'header-menu' => __('Header Menu'),
				'footer-menu' => __('Footer Menu')
			)
		);
	}
	add_action('init','register_wp_menus');

	//set excerpt lenght
	function set_excerpt_length(){
		return 45;
	}
	add_filter('excerpt_length', 'set_excerpt_length');

	// widget lcoation

	function wpb_init_widgets(){
		register_sidebar(array(
			'name'  => 'Promotioanl Item One',
			'id'  => 'item-1',
			'before_widget'  => '<div id="%1$s" class="promotional-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="promotional-item-header">',
			'after_title'  => '</h4>'
		));
		register_sidebar(array(
			'name'  => 'Promotional item Two',
			'id'  => 'item-2',
			'before_widget'  => '<div id="%1$s" class="promotional-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="promotional-item-header">',
			'after_title'  => '</h4>'
		));
		register_sidebar(array(
			'name'  => 'Promotional item Three',
			'id'  => 'item-3',
			'before_widget'  => '<div id="%1$s" class="promotional-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="promotional-item-header">',
			'after_title'  => '</h4>'
		));
		register_sidebar(array(
			'name'  => 'Promotional item Four',
			'id'  => 'item-4',
			'before_widget'  => '<div id="%1$s" class="promotional-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="promotional-item-header">',
			'after_title'  => '</h4>'
		));

		//footer wedget
		register_sidebar(array(
			'name'  => 'Footer Widget One',
			'id'  => 'footer-widget-1',
			'before_widget'  => '<div id="%1$s" class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgetheading">',
			'after_title'  => '</h5>'
		));
		register_sidebar(array(
			'name'  => 'Footer Widget Two',
			'id'  => 'footer-widget-2',
			'before_widget'  => '<div id="%1$s" class="widget $2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgetheading ">',
			'after_title'  => '</h5>'
		));
		register_sidebar(array(
			'name'  => 'Footer Widget Three',
			'id'  => 'footer-widget-3',
			'before_widget'  => '<div id="%1$s" class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgetheading">',
			'after_title'  => '</h5>'
		));
		register_sidebar(array(
			'name'  => 'Footer Widget Four',
			'id'  => 'footer-widget-4',
			'before_widget'  => '<div id="%1$s" class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgetheading">',
			'after_title'  => '</h5>'
		));
	}

	add_action('widgets_init', 'wpb_init_widgets');

	// Customizer File

	/*require get_template_directory(). '/inc/customizer.php';*/

 ?>