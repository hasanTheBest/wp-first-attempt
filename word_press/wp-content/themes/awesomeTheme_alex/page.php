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
				<content class="post-content bg-light text-secondary my-6 w-80 d-block px-4 mx-auto">

					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<?php get_template_part('post', get_post_format()); ?>
						<?php endwhile; ?>
					<?php endif; ?>

					
				</content>
			</div>
		</div>
	</div>
</article>
<!-- get footer -->
<?php get_footer(); ?>