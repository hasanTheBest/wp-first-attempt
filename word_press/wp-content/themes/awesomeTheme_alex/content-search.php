 <!-- get header -->
<?php get_header(); ?>


<!-- post-area -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
					<div class="row">

						<?php if(has_post_thumbnail()) : ?>
							<div class="post-thumbnail my-3 col-sm-4">
								<?php the_post_thumbnail(); ?>
							</div> <!-- /.col-sm-4 -->
						<?php endif; ?>

						<div class="col-sm-8">
							<h4 class="post-title mt-3 mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

							<div class="post-meta m-0">
								<small class="text-muted">Posted on <?php the_time('F j, Y');?> at <?php the_time('g:i a'); ?> in <?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?> 
								</small>
							</div>

							<p class="post-text">
								<?php the_excerpt(); ?>
							</p>

						</div> <!-- /.col-sm-8 -->
					</div> <!-- /.row -->

				</article>
			</div> <!-- /.col-md-12 -->

		</div> <!-- /.row -->
	</div> <!-- /.container -->
<!-- get footer -->
