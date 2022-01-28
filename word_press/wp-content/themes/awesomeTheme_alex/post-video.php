<div class="row">
	<h3 class="post-title mt-3 mb-1 col-12">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>
	<div class="post-meta m-0 col-12">
		<small class="text-muted">Posted on <?php the_time('F j, Y');?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?> 
		</small>
	</div>
	<div class="col-sm-8">
		<p class="post-text">
			<?php the_content(); ?>
		</p>
	</div>
	<div class="post-thumbnail my-3 col-sm-4">
		<?php the_post_thumbnail(); ?>
	</div>
</div>