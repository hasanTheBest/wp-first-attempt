<?php 

/*@pakages habluTheme
__Link Post Format*/

?>


<?php get_header(); ?>
<article <?php post_class( 'hablu-format-link' ); ?> id="post-<?php the_ID(); ?>">
	
	<header class="entry-header">
		<?php
		$link = hablu_grab_url();
		the_title( '<h1 class="entry-title"><a href="'. $link .'" target="_blank">', '<div class=icon-container><span class="icon-link">A</span></div></a></h1>' ); 
		?> 
	</header>  

</article>