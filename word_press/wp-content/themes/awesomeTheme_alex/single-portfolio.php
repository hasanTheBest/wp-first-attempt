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
			<div class="col-md-8">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
							<h3 class="post-title mt-3 mb-1 col-12"><?php the_title(); ?></h3>
							<div class="post-meta m-0 col-12">
								<small class="text-muted">Posted on <?php the_time('F j, Y');?> at <?php the_time('g:i a'); ?> in 
									<?php 
									echo awesome_get_term($post->ID, 'field');
										/*$terms_list = wp_get_post_terms($post->ID, 'field');
										$i = 0;
										foreach ($terms_list as $term) { 
											$i++;
											if($i>1){echo ', ';}
										 	echo $term -> name;
										 } */
									?>
									 ||
									 <?php 
									 echo awesome_get_term($post->ID, 'software');
									/*	$terms_list = wp_get_post_terms($post->ID, 'software');
										$i = 0;
										foreach ($terms_list as $term) { 
											$i++;
											if($i>1){echo ', ';}
										 	echo $term -> name;
										 } */
									?>
									<?php
										if(current_user_can('manage_options')){
											echo ' || '; edit_post_link(); 
										}
									 ?> 
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

							<!-- panination option here -->
							<div class="row bg-light p-2">
								<div class="col text-left"><?php previous_post_link(); ?></div>
								<div class="col text-right"><?php next_post_link(); ?></div>
							</div> 
						
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>

			<div class="col-md-4">
				<?php dynamic_sidebar('sidebar-1'); ?>
			</div>	
		</div>
	</div>
</article>
<!-- get footer -->
<?php get_footer(); ?>