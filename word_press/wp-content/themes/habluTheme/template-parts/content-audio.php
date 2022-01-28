<?php 

/*@pakages habluTheme
__Audio Post Format*/

?>


<?php get_header(); ?>
<article  <?php post_class( 'hablu-format-audio' ); ?>  id="post-<?php the_ID(); ?>">
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'">', '</a></h1>' ); ?>
		<div class="posted-meta">
			<?php echo hablu_posted_meta(); ?>
		</div> <!-- /.posted-meta -->
	</header>
	<content class="entry-content"> 
		<?php echo hablu_get_embedded_media( array( 'audio', 'iframe' ) ); ?>
	</content>
	<footer class="entry-footer">
		<?php echo hablu_posted_footer(); ?>
	</footer>

</article>