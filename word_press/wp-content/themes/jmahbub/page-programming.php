<?php get_header(); ?>

<div class="jumbotron">
      <div class="container">
        <h2><?php the_title(); ?></h2>
        <p>Anyone can Program</p>
      </div>
    </div>
	<div class="container">
		<h2 class="hide"><a href="enroll.html">রেজিস্ট্রেশন করুন</a></h2>
		<div class="row center">
		<iframe width="640" height="480" src="http://www.youtube.com/embed/o07n8_uWcns" frameborder="0" allowfullscreen></iframe>
      </div>
		<div class="row">
			<div class="container">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php the_content(); ?>	
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
				
		</div>

<?php get_footer(); ?>