<?php

/*
	======================================
		Include admin-page functionality
	======================================
*/
require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/custom-post-type.php';

/*
	======================================
		Includes script
	======================================
*/
/*function hablu_enqueue_scripts(){
	wp_enqueue_style('bootstrpa-style', get_template_directory_uri() . '/script/css/bootstrap.css', array(), '3.2.0', 'all');
	wp_enqueue_style('custom-site-style', get_template_directory_uri() . '/script/css/site.css', array(), 'all');

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/script/js/bootstrap.js', array(), '3.2.0', true);
}
add_action('wp_enqueue_scripts', 'hablu_enqueue_scripts');*/

/*
	======================================
		Includes hablu navigation
	======================================
*/
function hablu_theme_setup() {
	register_nav_menu( 'primary', 'Header Menu' );
	register_nav_menu( 'secondary', 'Footer Menu' );
}

add_action( 'init', 'hablu_theme_setup' );

/*
	======================================
		Custom sidebar/widger area
	======================================
*/
function hablu_custom_widget_area() {
	register_sidebar( array(
		'name'          => 'Recent Videos',
		'id'            => 'recent-videos',
		'before_widget' => '<aside class="side-series">',
		'after_widget'  => '</aside>',
		'description'   => 'Some uptodate videos here',
		'before_title'  => '<h4 class="text-center section-title-last">',
		'after_title'   => '</h4>'
	) );
	register_sidebar( array(
		'name'          => 'Ask Jhankar',
		'id'            => 'ask-jhankar',
		'before_widget' => '<aside class="side-series">',
		'after_widget'  => '</aside>',
		'description'   => 'Some uptodate videos here',
		'before_title'  => '<h4 class="text-center section-title-last">',
		'after_title'   => '</h4>'
	) );
	register_sidebar( array(
		'name'          => 'সুখ ও সফলতার মলম',
		'id'            => 'hppiness-therapy',
		'before_widget' => '<aside class="side-series">',
		'after_widget'  => '</aside>',
		'description'   => 'Some uptodate videos here',
		'before_title'  => '<h4 class="text-center section-title-last">',
		'after_title'   => '</h4>'
	) );
	register_sidebar( array(
		'name'          => 'প্রোগ্রামিংয়ের বই',
		'id'            => 'programming-book-1',
		'before_widget' => '<aside class="side-series">',
		'after_widget'  => '</aside>',
		'description'   => 'Some uptodate videos here',
		'before_title'  => '<h4 class="text-center section-title-last">',
		'after_title'   => '</h4>'
	) );
	register_sidebar( array(
		'name'          => 'প্রোগ্রামিংয়ের বলদ টু বস বই',
		'id'            => 'programming-book-2',
		'before_widget' => '<aside class="side-series">',
		'after_widget'  => '</aside>',
		'description'   => 'Some uptodate videos here',
		'before_title'  => '<h4 class="text-center section-title-last">',
		'after_title'   => '</h4>'
	) );
	register_sidebar( array(
		'name'          => 'আর্ট অফ আতলামী',
		'id'            => 'crazyness',
		'before_widget' => '<aside class="side-series">',
		'after_widget'  => '</aside>',
		'description'   => 'Some uptodate videos here',
		'before_title'  => '<h4 class="text-center section-title-last">',
		'after_title'   => '</h4>'
	) );
	register_sidebar( array(
		'name'          => 'প্রোগ্রামিংয়ের ভিডিও',
		'id'            => 'programming-videos',
		'before_widget' => '<aside class="side-series">',
		'after_widget'  => '</aside>',
		'description'   => 'Some uptodate videos here',
		'before_title'  => '<h4 class="text-center section-title-last">',
		'after_title'   => '</h4>'
	) );
	register_sidebar( array(
		'name'          => 'ওয়েব ডেভেলপমেন্ট',
		'id'            => 'web-development',
		'before_widget' => '<aside class="side-series">',
		'after_widget'  => '</aside>',
		'description'   => 'Some uptodate videos here',
		'before_title'  => '<h4 class="text-center section-title-last">',
		'after_title'   => '</h4>'
	) );
}

add_action( 'widgets_init', 'hablu_custom_widget_area' );