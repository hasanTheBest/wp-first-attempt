

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()) : ?>
		<div class="post-thumbnail my-3">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>
	<h3 class="post-title mt-3 mb-3 col-12">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>
	<div class="post-meta m-0 col-12">
		<small class="text-muted">Posted on <?php the_time('F j, Y');?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?> 
		</small>
	</div>

</article>

<!-- <div class="col-md-4">
<h3 class="post-title mt-3 mb-1 col-12">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h3>
<div class="post-meta m-0 col-12">
	<small class="text-muted">Posted on <?php the_time('F j, Y');?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?> 
	</small>
</div>
	<div class="post-thumbnail my-3">
		<?php the_post_thumbnail(); ?>
	</div>

	<p class="post-text">
		<?php the_content(); ?>
	</p>
</div> -->

