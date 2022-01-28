<?php 

/*@pakages connexion
__Single post view*/

?>
 <!-- get header -->
<?php get_header(); ?>

<!-- post-area -->
<div class="main-blog-post">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<?php if( have_posts() ) : ?>
					<?php while( have_posts() ) : the_post(); ?>
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
										    'post_parent'    => get_the_ID()
										) );
										if ( $attachments ) {
										    $feature_img  = wp_get_attachment_url( $attachments[0] -> ID );
										    echo '<div class="entry-featured bgi" style="background-image: url(' . $feature_img . ')"></div>';
										}
										wp_reset_postdata();

									?>
								<?php endif; ?>
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								<div class="posted-meta">
									by <a href="<?php echo esc_attr( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>
								</div> <!-- /.posted-meta -->
							</header>
							<content class="entry-content">
								<div class="entry-excerpt">
									<?php the_content(); ?>
								</div>
							</content> 
						</article>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>
<!-- get footer -->
<?php get_footer(); ?>