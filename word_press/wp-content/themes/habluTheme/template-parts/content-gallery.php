<?php 

/*@pakages habluTheme
__Gallery Post Format*/

?>


<?php get_header(); ?>
<article <?php post_class( 'hablu-format-gallery' ); ?> id="post-gallery<?php the_ID(); ?>">
	
	<header class="entry-header">
		<?php if( hablu_get_attachment() ) : 
			$attachments = hablu_get_attachment(7);
		?>

			<div id="post-gallery<?php the_ID(); ?>" class="carousel slide" data-ride="carousel">
				
				<div class="carousel-inner">

					<?php
						$i = 0;					 	
						foreach( $attachments as $attachment ) :  
					 	$active = ( $i == 0 ) ? 'active' : '';
					?>
						<div class="item <?php $active; ?> bgi standard-gallery" style="background-image: url( <?php echo wp_get_attachment_url( $attachment->ID ); ?> );">
						</div> <!-- /.item -->
					<?php $i++; endforeach; ?>
				</div> <!-- .carousel-inner -->
				<a class="left carousel-control" href="#post-gallery<?php the_ID(); ?>" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#post-gallery<?php the_ID(); ?>" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div> <!-- /.carousel-id -->
		<?php  endif; ?>


		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'">', '</a></h1>' ); ?>
		<div class="posted-meta">
			<?php echo hablu_posted_meta(); ?>
		</div> <!-- /.posted-meta -->
	</header>
	<content class="entry-content">
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