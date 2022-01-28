<?php 

/*@pakages connexion
__Standard Post Format*/

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
	<header class="entry-header">
		<p class="date">
			<?php the_time( 'Y/m/d' ); ?>
		</p>
		<?php if(has_post_thumbnail()) : ?>
			<?php $feature_img = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
			<?php echo '<div class="entry-featured bgi" style="background-image: url(' . $feature_img . ')"></div>'; ?>
		<?php else: ?>
			<?php 

				$attachments = get_posts( array(
				    'post_type'      => 'attachment',
				    'posts_per_page' => 500, 
				    'post_parent'    => get_the_ID()
				) );
				if ( $attachments ) {
				    $feature_img  = wp_get_attachment_url( $attachments[0] -> ID );
				    echo '<div class="entry-featured bgi" style="background-image: url(' . $feature_img . ')"></div>';
				}
				wp_reset_postdata();

			?>
		<?php endif; ?>
		
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
