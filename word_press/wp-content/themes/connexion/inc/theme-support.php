<?php

/*
	======================================
		Include functionality
	======================================
*/ 

// Active navigation 
function hablu_theme_setup(){
	register_nav_menu('primary' , 'Header Menu');
	register_nav_menu('secondary' , 'Footer Menu');
}
add_action('init', 'hablu_theme_setup');

// custom header
add_theme_support( 'custom-header' );
// post-thumbnail
add_theme_support( 'post-thumbnails' );
// custom background
add_theme_support( 'custom-background' );
//custom post-format
add_theme_support( 'post-formats', array( 'aside', 'audio', 'video', 'image', 'gallery', 'link', 'quote', 'chat', 'status' ) );
// excerpt support
add_post_type_support( 'page', 'excerpt' );

// Count views
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	// to set post views 
	/*setPostViews( get_the_ID );*/

	// to display post views
	/*echo getPostViews( get_the_ID );*/
