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
	<div class="container">
		<div class="row">
			<div class="col-sm-8">

					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<?php get_template_part('content', 'search'); ?>
						<?php endwhile; ?>
					<?php endif; ?>

			</div>
			<div class="col-sm-4">
				<?php dynamic_sidebar(); ?>
			</div>
		</div>
	</div>
<!-- get footer -->
<?php get_footer(); ?>