<?php 

/*@pakages habluTheme
__Image Post Format*/

?>


<?php get_header(); ?>
<article <?php post_class( 'hablu-format-image' ); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header bgi header-format-image" style="background-image: url(<?php echo hablu_get_attachment(); ?>)">
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'">', '</a></h1>' ); ?>
		<div class="posted-meta">
			<?php echo hablu_posted_meta(); ?>
		</div> <!-- /.posted-meta -->
	
		<div class="entry-excerpt img-caption">
			<?php the_excerpt(); ?>
		</div>
	</header>

	
	<footer class="entry-footer">
		<?php echo hablu_posted_footer(); ?>
	</footer>

</article>