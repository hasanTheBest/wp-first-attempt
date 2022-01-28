 <!-- get header -->
<?php get_header(); ?>

<!-- post-area -->
<article class="main-blog-post">
	<div class="container">
		<div class="row">
			<div class="col-12">
				
				<?php if( have_posts() ) : ?>
					<?php while( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</article>
<!-- get footer -->
<?php get_footer(); ?>