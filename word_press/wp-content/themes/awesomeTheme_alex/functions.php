<?php

/*
	===============================================
		include scripts
	===============================================
*/
function awesome_enqueue_scripts(){
	wp_enqueue_style('customstyles', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', 'all' );	

	/* add scripts*/
	wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.2.1', true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0.0', true );
	wp_enqueue_script('proper-js', get_template_directory_uri() . '/js/proper.min.js', array(), '1.2.1', true );
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true );	
}
add_action('wp_enqueue_scripts', 'awesome_enqueue_scripts');


/*
	===============================================
		Includes Default and Custome Menus
	===============================================
*/
function awesome_theme_setup(){
	// default menus support
	add_theme_support('menus');
	//custom
	register_nav_menu('primary','Primary Header Menu');
	register_nav_menu('secondary','Footer Menu');
}
add_action('after_setup_theme','awesome_theme_setup');

/*
	===============================================
		Theme Setup Functions
	===============================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'gallery', 'video'));
add_theme_support('html5', array('search-form'));

/*
	===============================================
		Setup Custom Widget Area/side bar
	===============================================
*/
function awesome_widget_setup(){

	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'description' => 'Standard Sidebar',
			'class' => 'custom',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after-title' => '</h4>'
		)
	);

}
add_action('widgets_init', 'awesome_widget_setup');

/*
	===============================================
		Setting custom lenght of excerpt
	===============================================
*/
function set_excerpt_length(){
	return 30;
}
add_filter('excerpt_length', 'set_excerpt_length');

/*
	===============================================
		Remove wordpress version
	===============================================
*/
function awesome_remove_version(){
	return '';
}
add_filter('the_generator', 'awesome_remove_version');

/*
	===============================================
		Custom Post Type
	===============================================
*/
function awesome_custom_post_type(){

	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'New Item',
		'edit_item' => 'Edit Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_color' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_quaryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
						'title',
						'editor',
						'excerpt',
						'thumbnail',
						'revisions',
					 ),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);

	register_post_type('portfolio', $args);
}
add_action('init', 'awesome_custom_post_type');

/*
	===============================================
		Custom Taxnomies
	===============================================
*/
function awesome_custom_taxonomies(){
	// Custom Hierarchical Toxnomy
	$labels = array(
		'name' => 'Fields',
		'singular_name' => 'Field',
		'search_items' => 'Search Fields',
		'all_items' => 'All Fields',
		'parent_item' => 'Parent Field',
		'parent_item_colon' => 'Parent Field:',
		'edit_item' => 'Edit Fields',
		'update_item' => 'Update Fields',
		'add_new_item' => 'Add New Field',
		'new_item_name' => 'New Field Name',
		'menu_name' => 'Fields'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'field' ),
	);
	register_taxonomy('field', array('portfolio'), $args);

	//Custom NOT Hierarchical Taxonomy
	register_taxonomy('software', 'portfolio', array(
		'hierarchical' => false,
		'label' => 'Software',
		'show_admin_column' => true,
		'rewrite' => array('slug' => 'software',)

	));
}
add_action( 'init', 'awesome_custom_taxonomies' );	

/*
	===============================================
		Custom term Function
	===============================================
*/
function awesome_get_term($postID, $term){
	$terms_list = wp_get_post_terms($postID, $term);
	$i = 0;
	$output = '';
	foreach ($terms_list as $term) { 
		$i++;
		if($i>1){$output .= ', ';}
	 	$output .= '<a href="'. get_term_link($term) .'">' . $term -> name . '</a>';
	 }

	 return $output; 
}

/*
	===============================================
		includes walker file
	===============================================
*/
/*require get_template_directory() . '/inc/walker.php';*/