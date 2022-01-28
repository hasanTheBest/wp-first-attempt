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
				
				<?php

					$cat_args = array(
						'include' => '29, 26, 18'
					);
					$categories = get_categories($cat_args);

					foreach ($categories as $category) : 
						$args = array(
							'type' => 'post',
							'posts_per_page' => 1,
							'category__in' => $category -> term_id
						);
						$LBP = new WP_Query($args);
						// print post
						if($LBP -> have_posts()) : 
							while($LBP -> have_posts()) : $LBP -> the_post(); ?>
								<div class="col-xs-12 col-sm-4">
									<?php get_template_part('post', 'featured'); ?>
								</div>
							<?php endwhile; 
						endif;

						wp_reset_postdata();
					endforeach ;

					/*$args = array(
						'type' => 'post',
						'posts_per_page' => 3
					);
					$LBP = new WP_Query($args);
					// print post
					if($LBP -> have_posts()) : 
						while($LBP -> have_posts()) : $LBP -> the_post(); ?>
							<div class="col-xs-12 col-sm-4">
								<?php get_template_part('post', 'featured'); ?>
							</div>
						<?php endwhile; 
					endif;

					wp_reset_postdata();*/

				?>

			<div class="col-12">
				<div class="post-content bg-light text-secondary my-6 w-80 d-block px-4 mx-auto">

					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<?php get_template_part('post', get_post_format()); ?>
						<?php endwhile; ?>
					<?php endif; ?>	
				</div>
			</div>

			<div class="col-12">
				
				<?php

					/*$LBP = new WP_Query('type=post&posts_per_page=2&offset=1');
					// print post
					if($LBP -> have_posts()) : 
						while($LBP -> have_posts()) : $LBP -> the_post();
							get_template_part('post', get_post_format());
						endwhile;
					endif;

					wp_reset_postdata();
*/
				?>
				
			</div>

			<div class="col-12">
				
				<?php
					/*$args = array(
						'type' => 'post',
						'posts_per_page' => -1,
						'category_name' => 'videos'
					);
					$LBP = new WP_Query($args);
					// print post
					if($LBP -> have_posts()) : 
						while($LBP -> have_posts()) : $LBP -> the_post();
							get_template_part('post', get_post_format());
						endwhile;
					endif;

					wp_reset_postdata();*/

				?>
				
			</div>
		</div>
	</div>
</article>
<!-- get footer -->
<?php get_footer(); ?>