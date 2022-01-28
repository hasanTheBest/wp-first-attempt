 <!-- get header -->
<?php get_header(); ?>

<!-- post-area -->
<article class="main-blog-post">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<header class="bg-info text-white p-4 text-center">
					<?php 
						the_archive_title('<h2>', '</h2>');
						the_archive_description('<h6>', '</h6>');
					?>
				</header>
			</div>
			<div class="col-md-8">

				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php get_template_part('post', 'archive') ?>
					<?php endwhile; ?>

					<!-- panination option here -->
					<div class="col text-center">
						<?php the_posts_navigation(); ?>
					</div>

				<?php endif; ?> 

			</div> <!-- /.col-8 -->
			<div class="col-md-4">
				<?php dynamic_sidebar(); ?>
			</div>
		</div>
	</div>
</article>
<!-- get footer -->
<?php get_footer(); ?>