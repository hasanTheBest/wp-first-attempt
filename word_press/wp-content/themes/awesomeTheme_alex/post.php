<div class="row">

	<div class="col-md-8">
	<h3 class="post-title mt-3 mb-1 col-12">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>
	<div class="post-meta m-0 col-12">
		<small class="text-muted">Posted on <?php the_time('F j, Y');?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?> 
		</small>
	</div>
	<?php if(has_post_thumbnail()) : ?>
		<div class="post-thumbnail my-3">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

		<p class="post-text">
			<?php the_content(); ?>
		</p>
	</div>
	<div class="col-md-4">
		<?php dynamic_sidebar('sidebar-1'); ?>
	</div>	

</div>