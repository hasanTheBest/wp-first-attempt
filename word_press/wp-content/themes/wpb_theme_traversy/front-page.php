<!--  header file include  -->
<?php get_header(); ?>

<section class="banner-section">
	<div class="banner-section-overlay text-center">
		<div class="container">
			<div class="row">
				<h1 class="banner-title">Wordpress Bootstrap Website</h1>
				<p class="banner-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium vero atque quis omnis facilis id debitis modi in asperiores eaque, provident dicta dignissimos praesentium!</p>
				<button class="btn btn-primary banner-btn">Read More</button>
			</div>
		</div>
	</div>
</section>

<section class="promotional-item-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="promotional-boxs">
					<?php if(is_active_sidebar('item-1')) : ?>
						<?php dynamic_sidebar('item-1'); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="promotional-boxs">
					<?php if(is_active_sidebar('item-2')) : ?>
						<?php dynamic_sidebar('item-2'); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="promotional-boxs">
					<?php if(is_active_sidebar('item-3')) : ?>
						<?php dynamic_sidebar('item-3'); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="promotional-boxs">
					<?php if(is_active_sidebar('item-1')) : ?>
						<?php dynamic_sidebar('item-1'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- footer file include -->

<?php get_footer(); ?>