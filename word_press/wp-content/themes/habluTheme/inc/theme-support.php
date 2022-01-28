<?php

/*
	======================================
		THEME SUPPORT OPTIONS
	======================================
*/

$options = get_option( 'post_formats' );
$formats = array('aside', 'audio', 'video', 'status', 'quote', 'link', 'image', 'gallery', 'chat');
$output = array();
foreach ($formats as $format) {
	$output[] = ( @$options[$format] == 1 ? $format : '' );
}

if( !empty($options) ){
	add_theme_support('post-formats', $output);
}

$header = get_option( 'custom_header' );
if( @$header == 1 ){
	add_theme_support( 'custom-header' );
}
$background = get_option( 'custom_background' );
if( @$background == 1 ){
	add_theme_support( 'custom-background' );
}

/* Activate Featured Image */
add_theme_support( 'post-thumbnails' );

 /* Active navigation menu options */
function hablu_theme_setup(){
	register_nav_menu('primary' , 'Header Menu');
	register_nav_menu('secondary' , 'Footer Menu');
}
add_action('init', 'hablu_theme_setup');

/*
	======================================
		THEME SUPPORT OPTIONS
	======================================
*/
function hablu_posted_meta(){
	$posted_on = human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );
	$categories = get_the_category();
	$seperator = ', ';
	$output = '';
	$i = 1;

	if( !empty( $categories ) ) :
		foreach ( $categories as $category ) :
			if( $i > 1 ) : $output .= $seperator; endif;

			$output .= '<a 
				href="'. esc_url( get_category_link( $category->term_id ) ) .'" 
				alt="'. esc_attr( "views all posts in%s", $category->name ) .'">'. esc_html( $category->name ) .'</a>';

			$i++;
		endforeach;
	endif;

	return '<span class="posted-on"><a href="'. esc_url( get_permalink() ) .'">'. $posted_on .'</a> ago in </span> <span class="posted-in">'. $output .'</span>';	
}
function hablu_posted_footer(){

	$comments_num = get_comments_number();
	if( comments_open() ){
		if( $comments_num == 0 ){
		$comments = __( 'No Comments' );
		}elseif ( $comments_num > 1 ) {
			$comments = $comments_num . __( ' Comments' );
		}else{
			$comments = '1 Comment';
		}
		$comments = '<a href="'. get_comments_link() .'">'. $comments .'</a>';

	}else{
		echo '<p class="text-danger">Sorrryyy! Comments are Closed</p>';
	}

	return '<div class="row"><div class="col-sm-6 tags-container"><span class="tag-icon"></span>'. get_the_tag_list( '<div class="tag-list"><strong>Tags: </strong>', ' ', '</div>') .'</div><div class="col-sm-6 comments-container text-right">'. $comments .'<span class="comment-icon"></span></div></div>';
}

 /*IMAGE/GALLERY POST CONTENT RETRIVE */
function hablu_get_attachment( $num = 1 ){

	$output = '';
 	if( has_post_thumbnail() && $num == 1 ) :  
 		$output = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
 	else :
 		$attachments = get_posts( array(
 			'post_type' => 'attachment',
 			'posts_per_page' => $num,
 			'post_parent' => get_the_ID()
 		) );
 		if( $attachments && $num == 1 ) :
 			foreach( $attachments as $attachment ) :
 				$output = wp_get_attachment_url( $attachment->ID );
 			endforeach;
 		elseif( $attachments && $num > 1 ) :
 			$output = $attachments;
 		endif;
 		wp_reset_postdata();
 	endif;
 	return $output;
}

 /*AUDIO/VIDEO POST CONTENT RETRIVE */
 function hablu_get_embedded_media( $type = array() ){
 	$content = do_shortcode( apply_filters( 'the_content', get_the_content() ) );
	$embed = get_media_embedded_in_content( $content, $type );
	
	if( in_array( 'audio', $type ) ) :
		$output = str_replace( '?visual=true', '?visual=false', $embed[0] );
	else :
		$output = $embed[0];
	endif;
	
	return $output;
 }
 
 /*LINK POST CONTENT URL RETRIVE */
 function hablu_grab_url(){
 	if( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/i', get_the_content(), $links ) ){
 		return false;
 	}
 	return esc_url_raw( $links[1] );
 }