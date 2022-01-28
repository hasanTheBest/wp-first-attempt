<?php
	/*
		Template Name: Portfolio Template
	*/
 ?>

 <?php get_header(); ?>
	
	<!-- Get some information to print properly -->
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
					$args = array('post_type' => 'portfolio', 'post_per_page' => 3);
					$loop = new WP_Query($args);
				?>

				<?php if($loop->have_posts()) : ?>
					<?php while($loop->have_posts()) : $loop->the_post(); ?>
						<?php get_template_part('post', 'archive') ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div> <!-- /.col-md-8 -->
			<div class="col-md-4">
				<?php dynamic_sidebar(); ?>
			</div> <!-- /.col-md-4 -->
		</div> <!-- /.row -->
	</div>
	

 <?php get_footer(); ?>