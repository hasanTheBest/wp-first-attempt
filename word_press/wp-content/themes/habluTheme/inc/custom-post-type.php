<?php

/*
	======================================
		Theme Custom Post Type
	======================================
*/

$contact = get_option( 'activate_contact' );
if( @$contact == 1 ){
	add_action( 'init', 'hablu_contact_custom_post_type' );

	add_filter( 'manage_hablu-contact_posts_columns', 'hablu_set_contact_columns' );

	add_action( 'manage_hablu-contact_posts_custom_column', 'hable_contact_custom_column', 10, 2 );

	add_action( 'add_meta_boxes', 'hablu_contact_add_meta_boxes' );
	add_action( 'save_post', 'hablu_save_contact_mail_data' );
} 

/*Contact Custom Post Type*/
function hablu_contact_custom_post_type(){
	$labels = array(
		'name'				=> 'Messages',
		'singular_name'		=> 'Message',
		'menu_name' 		=> 'Messages',
		'name_admin_bar'	=> 'Message'
	);

	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'	    => false,
		'menu_position'	    => 26,
		'menu_icon'	        => 'dashicons-email-alt',
		'supports'	        => array( 'title', 'author', 'editor' )
	);

	register_post_type( 'hablu-contact', $args );

}

// add columns to the custom post type  hablu-contact
function hablu_set_contact_columns( $columns ){
	$newColumns = array();
	$newColumns['author'] = 'Full Name';
	$newColumns['message'] = 'Message';
	$newColumns['email'] = 'Email';
	$newColumns['date'] = 'Date';
	return $newColumns;
}

function hable_contact_custom_column( $column, $post_id ){

	switch ($column) {
		case 'message':
			echo get_the_excerpt();
			break;
		case 'email':
		$email = get_post_meta( $post_id, '_cotact_email_value_key', true );	
			echo '<a href="mailto:'. $email .'">' . $email . '</a>' ;
			break;
		
		default:
			echo 'there is no item here';
			break;
	}

}

function hablu_contact_add_meta_boxes(){
	add_meta_box( 'contact_email', 'User Email', 'hablu_contact_email_callback', 'hablu-contact', 'side' );
}

function hablu_contact_email_callback( $post ){
	wp_nonce_field( 'hablu_save_contact_mail_data', 'hablu_contact_mail_meta_box_nonce' ); 
	$value = get_post_meta( $post->ID, '_cotact_email_value_key', true );

	echo '<label for="hablu_contact_email_field">User Emial Address: </label>';
	echo '<input type="email" id="hablu_contact_email_field" name="hablu_contact_email_field" value="'. esc_attr( $value ) .'" size="25" />';
}

function hablu_save_contact_mail_data( $post_id ){
	if( ! isset( $_POST['hablu_contact_mail_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['hablu_contact_mail_meta_box_nonce'], 'hablu_save_contact_mail_data') ){
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ){
		return;
	}

	if( ! isset( $_POST['hablu_contact_email_field'] ) ){
		return;
	}

	$my_data = sanitize_text_field( $_POST['hablu_contact_email_field'] );

	update_post_meta( $post_id, '_cotact_email_value_key', $my_data );
}