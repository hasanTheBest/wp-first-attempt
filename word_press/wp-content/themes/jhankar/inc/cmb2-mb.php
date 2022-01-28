<?php 

function cmb2_add_book_info_metabox() {

	$prefix = '_jhankar_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'book_information',
		'title'        => __( 'Book Information', 'jhankar' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
    ) );
    
    $group = $cmb->add_field( array(
		'name' => __( 'Book', 'jhankar' ),
		'id'   => $prefix . 'book',
		'type' => 'group',
	) );

	$cmb->add_group_field( $group,array(
		'name' => __( 'Title', 'jhankar' ),
		'id'   => $prefix . 'book_title',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Description', 'jhankar' ),
		'id'   => $prefix . 'book_description',
		'type' => 'textarea',
	) );

	$cmb->add_group_field( $group,array(
		'name' => __( 'Thumbnail', 'jhankar' ),
		'id'   => $prefix . 'book_thumbnail',
		'type' => 'file',
    ) );
    
	$cmb->add_group_field( $group, array(
		'name' => __( 'Read / Buy Link', 'jhankar' ),
		'id'   => $prefix . 'buy_url',
		'type' => 'text_url',
	) );

}
add_action( 'cmb2_init', 'cmb2_add_book_info_metabox' );

// Adding Subtitle to the post or page
function cmb2_add_subtitle_metabox() {

	$prefix = '_jhankar_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'post_subtitle',
		'title'        => __( 'Post/Page Subtitle', 'jhankar' ),
		'object_types' => array( 'page', 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Add Subtitle', 'jhankar' ),
		'id'   => $prefix . 'add_subtitle',
		'type' => 'text',
	) );

}
add_action( 'cmb2_init', 'cmb2_add_subtitle_metabox' );

// Adding FB Post Section 
function cmb2_add_fb_post_metabox() {

	$prefix = '_jhankar_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'fb_post',
		'title'        => __( 'FB Post', 'jhankar' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Post Title', 'jhankar' ),
		'id'   => $prefix . 'post_title',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Post Url', 'jhankar' ),
		'id'   => $prefix . 'post_url',
		'type' => 'text_url',
	) );

	$cmb->add_field( array(
		'name' => __( 'Author Name', 'jhankar' ),
		'id'   => $prefix . 'author_name',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Author Url', 'jhankar' ),
		'id'   => $prefix . 'author_url',
		'type' => 'text_url',
	) );


}
add_action( 'cmb2_init', 'cmb2_add_fb_post_metabox' );