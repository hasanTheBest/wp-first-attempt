<?php

require_once get_template_directory() . '/inc/walker.php';
require_once get_template_directory() . '/inc/tgm.php';
require_once get_template_directory() . '/inc/cmb2-mb.php';

// if ( ! isset( $content_width ) ) {
//     $content_width = 960;
// }

if ( site_url() == "http://localhost/word_press/" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function jhankar_theme_setup(){
    load_theme_textdomain( 'jhankar' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('title-tag');
    add_theme_support('post-formats',array('audio','video','gallery','image','link','quote'));
    add_editor_style( '/assets/css/site.css' );

    register_nav_menu( 'topmenu', __('Top Menu','jhankar') );
}
add_action( 'after_setup_theme', 'jhankar_theme_setup' );

function jhankar_assets(){
    wp_enqueue_style( 'bootstrap-style', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), null,  '3.2.0', 'all' );
    wp_enqueue_style( 'site-style', get_theme_file_uri( '/assets/css/site.css' ), null,  '1.0.0', 'all' );
    wp_enqueue_style( 'jhankarwp-style',get_stylesheet_uri(  ), VERSION);

    wp_enqueue_script( 'bootstrap-script', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), array('jquery'), '3.2.0', true );
}
add_action('wp_enqueue_scripts','jhankar_assets');

function jhankar_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'jhankar_excerpt_length', 999 );

function jhankar_custom_tax_link($link, $id) {
    $post = get_post($id);
    if (is_object($post) && 'book' == get_post_type($id)) {
        $genre = wp_get_post_terms($post-> ID, 'genre');
        if (is_array($genre) && count($genre) > 0) {
            $slug = $genre[0] -> slug;
            $link = str_replace('%genre%', $slug, $link);
        } else {
            $slug = 'generic';
            $link = str_replace('%genre%', $slug, $link);
        }
    }
    return $link;
}
add_filter('post_type_link','jhankar_custom_tax_link',1,2);

function jhankar_feedback(){
    register_sidebar( array(
        'name'          => __( 'Questions or Feedback', 'jhankar' ),
        'id'            => 'jhankar-feedback',                         // ID should be LOWERCASE  ! ! !
        'description'   => __( 'Add feedback content', 'jhankar' ),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3><strong>',
        'after_title'   => '</h3></strong>'
    ) );
}
add_action( 'widgets_init', 'jhankar_feedback' );


// ADD FILTER
function jhankar_tag_title($title){
    if(is_post_type_archive( 'book' ) || is_tax('genre')){
        $title = __('Languages','jhankar');
    }
    return $title;
}
add_filter( 'jhankar_tag_heading', 'jhankar_tag_title');

function jhankar_tag_term($terms){
    if(is_post_type_archive( 'book' ) || is_tax('genre')){
        $terms = get_taxonomies( array(
            'taxonomy'   => 'genre', 
        ) );
    }
    return $terms;
}
add_filter( 'jhankar_tag_items', 'jhankar_tag_term');

// Adding Social Profile fields to user page in wp admin
function modify_contact_methods($profile_fields) {

	// Add new fields
	$profile_fields['twitter'] = 'Twitter Username';
	$profile_fields['facebook'] = 'Facebook URL';
	$profile_fields['gplus'] = 'Google+ URL';

	// Remove old fields
	unset($profile_fields['aim']);

	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');
// Retrieve a custom field value
//$twitterHandle = get_the_author_meta('twitter');