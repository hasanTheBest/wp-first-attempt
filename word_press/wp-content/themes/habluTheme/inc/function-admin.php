<?php

/*
	======================================
		admin page function
	======================================
*/
function hablu_add_admin_page(){

	// Generation admin page
	add_menu_page( 'Hablu Theme Options', 'Hablu', 'manage_options', 'mh_hablu', 'hablu_theme_create_page', get_template_directory_uri() . '/img/favicon-wp.png', 110 );

	// Generation admin sub pages
	add_submenu_page( 'mh_hablu', 'Hablu Sidebar Options', 'Sidebar', 'manage_options', 'mh_hablu', 'hablu_theme_create_page' );
	// Generation admin sub pages
	add_submenu_page( 'mh_hablu', 'Hablu Theme Options', 'Theme Options', 'manage_options', 'mh_hablu_theme', 'hablu_theme_support_page' );

	add_submenu_page( 'mh_hablu', 'Hablu Contact Options', 'Contact Form', 'manage_options', 'mh_hablu_theme_contact', 'hablu_theme_contact_form_page' );

	add_submenu_page( 'mh_hablu', 'Hablu CSS Options', 'Custom CSS', 'manage_options', 'mh_hablu_css', 'hablu_submenu_page_create' );

	// Active custom settings
	add_action( 'admin_init', 'hablu_custom_settings' );

}
add_action('admin_menu', 'hablu_add_admin_page');

function hablu_custom_settings(){

	// Sidebar Options
	register_setting( 'hablu-settings-group', 'profile_picture' );
	register_setting( 'hablu-settings-group', 'first_name' );
	register_setting( 'hablu-settings-group', 'last_name' );
	register_setting( 'hablu-settings-group', 'user_description' );
	register_setting( 'hablu-settings-group', 'twitter_handler', 'hablu_sanitize_twitter_handler' );
	register_setting( 'hablu-settings-group', 'facebook_handler' );
	register_setting( 'hablu-settings-group', 'gplus_handler' );

	add_settings_section( 'hablu-sidebar-options', 'Sidebar Options', 'hablu_sidebar_options', 'mh_hablu' );

	add_settings_field( 'sidebar-profile-picture', 'Profile Picture', 'hablu_sidebar_profile', 'mh_hablu', 'hablu-sidebar-options' );
	add_settings_field( 'sidebar-name', 'Full Name', 'hablu_sidebar_name', 'mh_hablu', 'hablu-sidebar-options' );
	add_settings_field( 'sidebar-description', 'Description', 'hablu_sidebar_description', 'mh_hablu', 'hablu-sidebar-options' );
	add_settings_field( 'sidebar-twitter', 'Twitter Handler', 'hablu_sidebar_twitter', 'mh_hablu', 'hablu-sidebar-options' );
	add_settings_field( 'sidebar-facebook', 'Facebook Handler', 'hablu_sidebar_facebook', 'mh_hablu', 'hablu-sidebar-options' );
	add_settings_field( 'sidebar-gplus', 'Google Plus Handler', 'hablu_sidebar_gplus', 'mh_hablu', 'hablu-sidebar-options' );

	// theme support options
	register_setting('hablu-theme-support', 'post_formats');
	register_setting('hablu-theme-support', 'custom_header');
	register_setting('hablu-theme-support', 'custom_background');

	add_settings_section('hablu-theme-options', 'Theme Options', 'hablu_theme_options', 'mh_hablu_theme' );

	add_settings_field('post-formats', 'Post Formats', 'hablue_post_formats', 'mh_hablu_theme', 'hablu-theme-options');
	add_settings_field('custom-header', 'Custom Header', 'hablue_custom_header', 'mh_hablu_theme', 'hablu-theme-options');
	add_settings_field('custom-background', 'Custom Background', 'hablue_custom_background', 'mh_hablu_theme', 'hablu-theme-options');

	// Contact form options
	register_setting( 'hablu-contact-options', 'activate_contact' );

	add_settings_section( 'hablu-contact-section', 'Contact Form', 'hablu_contact_section', 'mh_hablu_theme_contact' );

	add_settings_field( 'activate-form', 'Active Contact Form', 'hablu_activate_contact', 'mh_hablu_theme_contact', 'hablu-contact-section' );

	// Custom Css Options 
	register_setting( 'hablu-custom-css-options-register', 'hablu_custom_css' );

	add_settings_section( 'hablu-custom-css-section', 'Custom CSS', 'hablu_custom_css_section_callback', 'mh_hablu_css' );
	
	add_settings_field( 'hablu-custom-css-field', 'Hablu Custom CSS', 'hablu_custom_css_field_callback', 'mh_hablu_css', 'hablu-custom-css-section' );
}

// Hablu Custom CSS Options
function hablu_custom_css_section_callback(){
	echo 'Customize Hablu theme with Your own CSS.';
}
function hablu_custom_css_field_callback(){
	$css = get_option( 'hablu_custom_css' );
	$css = ( empty($css) ? '/* hablu custom css */' : $css );
	echo '<textarea name="custom-css-field" placeholder="Custom CSS">' . $css . '</textarea>';
}

// contact form options
function hablu_contact_section(){
	echo 'activate and deactivate Built in contact form.';
}

function hablu_activate_contact(){
	$options = get_option('activate_contact');
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" name="activate_contact" id="activate_contact" value="1" '.$checked.' /></label>';
}

// Posts formats theme options
function hablu_theme_options(){
	echo 'activate and deactivate theme support options';
}
function hablue_custom_header(){
	$options = get_option('custom_header');
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" name="custom_header" id="custom_header" value="1" '.$checked.' />Active Custom Header</label>';
}
function hablue_custom_background(){
	$options = get_option('custom_background');
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" name="custom_background" id="custom_background" value="1" '.$checked.' />Active Custom Background</label>';
}

function hablue_post_formats(){
	$options = get_option( 'post_formats' );

	$formats = array('aside', 'audio', 'video', 'status', 'quote', 'link', 'image', 'gallery', 'chat');
	$output = '';
	foreach ($formats as $format) {
		$checked = (@$options[$format] == 1 ? 'checked' : '');
		$output .= '<label><input type="checkbox" name="post_formats['. $format .']" id="'. $format .'" value="1" '.$checked.' />' . $format . '</label><br>';
	}
	echo $output;
}

// sidebar options funciton
function hablu_sidebar_options(){
	echo 'customize Your Sidebar Option';
}
function hablu_sidebar_profile(){
	$picture = esc_attr(get_option( 'profile_picture' ));
	if( empty($picture) ){
		echo '<input type="button" class="button button-secondary" value="Upload You Profile Picture" id="upload-button"> <input type="hidden" id="profile-picture"  name="profile_picture" value="" />';
	}else{
		echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button"> <input type="hidden" id="profile-picture"  name="profile_picture" value="'.$picture.'" /> <input type="button" class="button button-secondary" value="Remove" id="remove-picture" />';
	}
	
}
function hablu_sidebar_name(){
	$firstName = esc_attr(get_option( 'first_name' ));
	$lastName = esc_attr(get_option( 'last_name' ));

	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}
function hablu_sidebar_description(){
	$description = esc_attr(get_option( 'user_description' ));
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description" /><p>Write Something Smart</p>';
}
function hablu_sidebar_twitter(){
	$twitterHandler = esc_attr(get_option( 'twitter_handler' ));
	echo '<input type="text" name="twitter_handler" value="'.$twitterHandler.'" placeholder="Twitter Handler" /><p>Input Your Twitter user name without @ character.</p>';
}
function hablu_sidebar_facebook(){
	$facebookHandler = esc_attr(get_option( 'facebook_handler' ));
	echo '<input type="text" name="facebook_handler" value="'.$facebookHandler.'" placeholder="Facebook Handler" />';
}
function hablu_sidebar_gplus(){
	$gplusHandler = esc_attr(get_option( 'hablu_sidebar_gplus' ));
	echo '<input type="text" name="hablu_sidebar_gplus" value="'.$gplusHandler.'" placeholder="Google Plus Handler" />';
}

// Sinitization settings
function hablu_sanitize_twitter_handler($input){
	$output = sanitize_text_field($input);
	$output = str_replace('@', '', $output);
	return $output;
}

// theme submenu functions
function hablu_theme_create_page(){
	// Generation of our admin page
	require_once(get_template_directory() . '/inc/templates/hablu-admin.php');
}
function hablu_theme_support_page(){
	require_once(get_template_directory() . '/inc/templates/hablu-theme-support.php');
}
function hablu_theme_contact_form_page(){
	require_once(get_template_directory() . '/inc/templates/hablu-contact_form.php');

}
function hablu_submenu_page_create(){
	require_once(get_template_directory() . '/inc/templates/hablu-custom-css.php');
}