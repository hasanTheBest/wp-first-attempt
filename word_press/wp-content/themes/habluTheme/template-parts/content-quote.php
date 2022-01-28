<?php 

/*@pakages habluTheme
__Quote Post Format*/

?>


<?php get_header(); ?>
<article <?php post_class( 'hablu-format-quote' ); ?> id="post-<?php the_ID(); ?>">
	<div class="row">
		<div class="col-sm-12 col-sm-offset-1 col-md-8 col-md-offset-2">
			<header class="entry-header">
				<h1 class="quote-content"><a href="<?php the_permalink(); ?>"><?php echo get_the_content(); ?></a></h1>
				<?php the_title( '<h3 class="quote-author">-', '-</h3>' ); ?> 
			</header> 
		</div> <!-- .col-sm-12 col-sm-offset-1 col-md-8 col-md-offset-2 --> 
	</div> <!-- /.row -->
	
	<footer class="entry-footer">
		<?php echo hablu_posted_footer(); ?>
	</footer>

</article>