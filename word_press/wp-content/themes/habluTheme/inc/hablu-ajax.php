<?php 
	/*
		@pakages habluTheme
		======================================
			AJAX FUNCTIONS
		======================================
	*/

//add_action( 'wp_ajax_nopriv_hablu_load_more', 'hablu_load_more' );
add_action( 'wp_ajax_hablu_load_more', 'hablu_load_more' );

function hablu_load_more(){
	$paged = $_POST["page"];
 	
	$querry = new WP_Query( array(
		'post_type' => 'post',
		'paged' => $paged,
	) );

	if( $querry->have_posts() ) :
		while( $querry->have_posts() ) : $querry->the_post(); 
			get_template_part( 'template-parts/content', get_post_format() );

		endwhile;
	endif;

	wp_reset_postdata();
	die();
}
