<?php 

/*@pakages connexion
__Gallery Post Format*/

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
	<header class="entry-header">
		<p class="date">
			<?php the_time( 'Y/m/d' ); ?>
		</p>
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<?php $i=0; $active = ($i==0) ? 'active' : ''; ?>
				<?php
					$args = array( 'post_type' => 'attachment', 'posts_per_page' => 5, 'post_status' =>'any', 'post_parent' => $post->ID ); 
					$attachments = get_posts( $args );
					if ( $attachments ) {
						foreach ( $attachments as $attachment ) {
							echo '<div class="bgi entry-featured carousel-item '.$active .'" style="background-image: url('. wp_get_attachment_url($attachment -> ID) .')">
								</div>';
								$i++;
						}
					}
				?>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'">', '</a></h1>' ); ?>
		<div class="posted-meta">
			by <a href="<?php echo esc_attr( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a> / <?php pvc_post_views( get_the_ID(), $echo = true ); ?>
		</div> <!-- /.posted-meta -->
	</header>
	<content class="entry-content">
		<div class="entry-excerpt">
			<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
		</div>
	</content> 



</article>
