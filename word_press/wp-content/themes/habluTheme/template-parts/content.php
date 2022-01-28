<?php 

/*@pakages habluTheme
__Standard Post Format*/

?>


<?php get_header(); ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'">', '</a></h1>' ); ?>
		<div class="posted-meta">
			<?php echo hablu_posted_meta(); ?>
		</div> <!-- /.posted-meta -->
	</header>
	<content class="entry-content">
		<?php if( hablu_get_attachment() ) : ?>
			 
			<a class="standard-featured-link" href="<?php the_permalink() ?>">
				<div class="standard-featured bgi" style="background-image: url(<?php echo hablu_get_attachment(); ?>)"></div>
			</a>
		<?php endif; ?>
		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>
		<div class="button-container">
			<a href="<?php the_permalink(); ?>" class="btn btn-hablu">
				<?php _e( 'Read More' ); ?>
			</a>
		</div>
	</content>
	<footer class="entry-footer">
		<?php echo hablu_posted_footer(); ?>
	</footer>

</article>