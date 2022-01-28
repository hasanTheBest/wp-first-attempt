<?php get_header(); ?>

<div class="container" id="primary">
	<main id="main" class="site-main" role="main">
		
		<section class="error-404 not-found">
			<header class="p-3 bg-light">
				<h2 class="text-danger p-4 text-center display-4">Sorry! The page not found.</h2>
			</header>

			<div class="page-content">
				<h2 class="bg-white text-info">You may be interested following topics</h2> 
				<div class="row">
					<div class="widget col-md-4">
						<?php the_widget('WP_Widget_Recent_Posts'); ?>
					</div>
					<div class="widget widget-categories col-md-4">
						<h3 class="text-secondry">Most used categories</h3>
						<ul class="list-link">
							<?php wp_list_categories(array(
									'orderby' => 'count',
									'order' => 'DESC',
									'show_count' => 1,
									'title_li' => '',
									'number' => 5
								)); 
							?>
						</ul>
					</div>
					<div class="archive-item col-md-4">
						<?php the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>"); ?>
					</div>
				</div><!--  /.row -->
			</div>
		</section>

	</main>
</div>

<?php get_footer(); ?>