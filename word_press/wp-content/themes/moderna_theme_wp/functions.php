<?php

function styleScriptInclusion(){
    
    /*
    wp_enqueue_script($handle, $src, $dep, $ver, $media );
    wp_enqueue_script($handle, $src, $dep, $ver, $in_footer );*/
    
    /* -----------------
        adding css, javascript into wordpress
    ----------------------------- */
    
    wp_enqueue_style('BS-stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.1.0', 'all' );
    wp_enqueue_style('FancyBox-stylesheet', get_template_directory_uri() . '/css/fancybox/jquery.fancybox.css', array(), '1.0', 'all' );
    wp_enqueue_style('jcarousel-stylesheet', get_template_directory_uri() . '/css/jcarousel.css', array(), '1.0', 'all' );
    wp_enqueue_style('FlexSlider-stylesheet', get_template_directory_uri() . '/css/flexslider.css', array(), '2.0', 'all' );
    wp_enqueue_style('Main-stylesheet', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_style('ThemeSkin-stylesheet', get_template_directory_uri() . '/skins/default.css', array(), '1.0', 'all' );
    
    wp_enqueue_script('jquery' );
    wp_enqueue_script('jQueryEasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', 'jquery', '1.3', true ); 
    wp_enqueue_script('BS-jQuery', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '3.1.0', true );
    wp_enqueue_script('FancyBox-jQuery', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', 'jquery', '2.1.4', true );
    wp_enqueue_script('FBmedia-jQuery', get_template_directory_uri() . '/js/jquery.fancybox-media.js', 'jquery', '1.0.5', true ); 
    wp_enqueue_script('GooglePrettify', get_template_directory_uri() . '/js/google-code-prettify/prettify.js', 'jquery', '1.0', true );
    wp_enqueue_script('Quicksand-jQuery', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js', 'jquery', '1.2.2', true );
    wp_enqueue_script('Setting-jQuery', get_template_directory_uri() . '/js/portfolio/setting.js', 'jquery', '1.0', true );
    wp_enqueue_script('Flexslider-jQuery', get_template_directory_uri() . '/js/jquery.flexslider.js', 'jquery', '2.1', true );
    wp_enqueue_script('animate-jQuery', get_template_directory_uri() . '/js/animate.js', array(), '1.0', true );
    wp_enqueue_script('Custom-javascript', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );
    
}
add_action('wp_enqueue_scripts','styleScriptInclusion');

 /* -------------------------------------------------------------
        adding navigation menu into wordpress
----------------------------- */

function addingNavigation(){
    register_nav_menus(array(
    
    'main_menu' => 'Main Menu'
    
    ));
}
add_action('init', 'addingNavigation');


?>