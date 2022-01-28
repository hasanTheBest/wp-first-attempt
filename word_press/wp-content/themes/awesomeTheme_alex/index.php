 <!-- get header -->
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <header class="text-center text-primary bg-light p-3 mb-1">
                <h1 class="display-3 mb-0">Awesome Team Theme</h1>
            </header>
        </div>
    </div>
</div>

<!-- post-area -->
<article class="main-blog-post">
	<div class="container">
		<div class="row">
			<div class="col-12">
				
				<!-- controlling post per page -->
				<?php 
					$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array('posts_per_page' => 3, 'paged' => $currentPage); 
					query_posts($args); 
				 ?>

				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php get_template_part('post', get_post_format()); ?>
					<?php endwhile; ?>

					<!-- panination option here -->
					<div class="col text-right"><?php next_posts_link(); ?></div>
					<div class="col text-left"><?php previous_posts_link(); ?></div>

				<?php endif; ?>

				<?php wp_reset_query(); ?>

			</div>
		</div>
	</div>
</article>
<!-- get footer -->
<?php get_footer(); ?>