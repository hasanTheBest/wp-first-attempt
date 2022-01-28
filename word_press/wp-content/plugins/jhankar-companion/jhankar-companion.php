<?php
/**
 * @package Jhankar
 */
/*
Plugin Name: Jhankar Companion 
Plugin URI: https://jhankar.com/
Description: Used for creating custom posts, taxonomies
Version: 1.0.0
Author: Mahmudul Hasan
Author URI: https://mahmudulhasan.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: jhankar
*/

/**
*    =========== SHORT CODE =============
*/
function jhankar_button_sort_code($attributes, $content = '') {
    $default = array(
        'url' => '',
        'type' => 'primary',
        'size' => 'medium',
        'title' => 'Button',
    );
    $jhankar_button_attributes = shortcode_atts($default, $attributes);

    return sprintf('<a href="%s" rel="noopener" target="_blank" class="btn btn-%s btn-%s" title="%s">%s</a>',
        $jhankar_button_attributes['url'],
        $jhankar_button_attributes['type'],
        $jhankar_button_attributes['size'],
        $jhankar_button_attributes['title'],
        do_shortcode( $content )
    );
}

add_shortcode( 'button', 'jhankar_button_sort_code' );

function jhankar_upper_case_shortcode($attributes, $content = '') {
    return strtoupper(do_shortcode($content));
}

add_shortcode('uc', 'jhankar_upper_case_shortcode');

// function jhankar_google_map2($attributes){
//     $default=array(
//         'place'=>'Dhaka University, Dhaka',
//         'width'=>'100%',
//         'height'=>'600',
//         'zoom'=>'15',
//     );

//     $atts = shortcode_atts( $default, $attributes );

//     $gmap2 = <<<EOD
//     <div style="{$atts['width']}">
//     <iframe width="{$atts['width']}" height="{$atts['height']}" src="https://maps.google.com/maps?{$atts['width']}&amp;{$atts['height']}&amp;hl=en&amp;q={$atts['place']}&amp;ie=UTF8&amp;t=&amp;z={$atts['zoom']}&amp;iwloc=B&amp;output=embed"
//         frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
//     </iframe>
// </div>
// EOD;

//     return $gmap2;
// }
// add_shortcode( 'gmap2', 'jhankar_google_map2' );

function jhankar_google_map($attributes){
    $default=array(
        'place'=>'Dhaka University, Dhaka',
        'width'=>'100%',
        'height'=>'600',
        'zoom'=>'15',
    );

    $atts = shortcode_atts( $default, $attributes );

    $gmap = <<<EOD
    <div>
    <div>
        <iframe width="{$atts['width']}" height="{$atts['height']}" id="gmap_canvas" src="https://maps.google.com/maps?q={$atts['place']}&t=&z={$atts['zoom']}&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>
EOD;

    return $gmap;
}
add_shortcode( 'gmap', 'jhankar_google_map' );

/**
*    =========== SHORT CAKE (UI) BUILDER =============
*/
function jhankar_gmap_shortcode_ui() {
    $fields = array(
        array(
            'label' => __('Place', 'jhankar'),
            'type'  => 'text',
            'attr'  => 'place',
            'meta'  => array(
                'placeholder' => __('Example: Rajshahi University, Bangladesh', 'jhankar')
            )
        ),
        array(
            'label' => __('Width', 'jhankar'),
            'type'  => 'text',
            'attr'  => 'width',
            'meta'  => array(
                'placeholder' => __('Example: 600 or 100%', 'jhankar')
            )
        ),
        array(
            'label' => __('Height', 'jhankar'),
            'type'  => 'text',
            'attr'  => 'height',
            'meta'  => array(
                'placeholder' => __('Example: 350 or 100%', 'jhankar')
            )
        ),
        array(
            'label' => __('Zoom', 'jhankar'),
            'type'  => 'text',
            'attr'  => 'zoom',
            'meta'  => array(
                'placeholder' => __('Example: 15', 'jhankar')
            )
        ),
    );

    $settings = array(
        'label'         => __('Google Map', 'jhankar'),
        'listItemImage' => 'dashicons-admin-site',
        'post_type'     => array('page', 'post'),
        'attrs'         => $fields
    );

    shortcode_ui_register_for_shortcode('gmap', $settings );
}

add_action('register_shortcode_ui', 'jhankar_gmap_shortcode_ui');

/**
*    =========== CUSTOM POST TYPE =============
*/
function jhankar_cpt_book() {
	$labels = array(
		'name'               => _x( 'Books', 'post type general name', 'jhankar' ),
		'singular_name'      => _x( 'Book', 'post type singular name', 'jhankar' ),
		'menu_name'          => _x( 'Books', 'admin menu', 'jhankar' ),
		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'jhankar' ),
		'add_new'            => _x( 'Add New', 'book', 'jhankar' ),
		'add_new_item'       => __( 'Add New Book', 'jhankar' ),
		'new_item'           => __( 'New Book', 'jhankar' ),
		'edit_item'          => __( 'Edit Book', 'jhankar' ),
		'view_item'          => __( 'View Book', 'jhankar' ),
		'all_items'          => __( 'All Books', 'jhankar' ),
		'search_items'       => __( 'Search Books', 'jhankar' ),
		'parent_item_colon'  => __( 'Parent Books:', 'jhankar' ),
		'not_found'          => __( 'No books found.', 'jhankar' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'jhankar' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'jhankar' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book/%genre%', 'with_front' => false ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}
add_action( 'init', 'jhankar_cpt_book' );

/**
*    =========== CUSTOM TAXONOMIES =============
*/
function create_book_taxonomies() {

	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name', 'jhankar' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'jhankar' ),
		'search_items'      => __( 'Search Genres', 'jhankar' ),
		'all_items'         => __( 'All Genres', 'jhankar' ),
		'parent_item'       => __( 'Parent Genre', 'jhankar' ),
		'parent_item_colon' => __( 'Parent Genre:', 'jhankar' ),
		'edit_item'         => __( 'Edit Genre', 'jhankar' ),
		'update_item'       => __( 'Update Genre', 'jhankar' ),
		'add_new_item'      => __( 'Add New Genre', 'jhankar' ),
		'new_item_name'     => __( 'New Genre Name', 'jhankar' ),
		'menu_name'         => __( 'Genre', 'jhankar' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'book', 'with_front' => false ),
		'show_tagcloud'     => true,
	);

	register_taxonomy( 'genre', array( 'book' ), $args );

}
add_action( 'init', 'create_book_taxonomies', 0 );
