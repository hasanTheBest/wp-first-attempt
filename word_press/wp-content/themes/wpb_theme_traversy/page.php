<?php get_header(); ?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">

				
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3>
									<?php the_title(); ?>
								</h3>
							</div> 
						</div>
						<p><?php the_content(); ?></p> 
				</article>
				
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php __('SORRY BRO, NO PAGE FOUND'); ?></p>
			<?php endif ; ?>

				<div id="pagination">
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
				</div>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form class="form-search">
						<input class="form-control" type="text" placeholder="Search..">
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Categories</h5>
					<ul class="cat">
						<li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
						<li>
						<img src="<?php bloginfo('template_url'); ?>/img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
						<h6><a href="#">Lorem ipsum dolor sit</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Maiorum ponderum eum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Et mei iusto dolorum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Popular tags</h5>
					<ul class="tags">
						<li><a href="#">Web design</a></li>
						<li><a href="#">Trends</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Internet</a></li>
						<li><a href="#">Tutorial</a></li>
						<li><a href="#">Development</a></li>
					</ul>
				</div>
				</aside>
			</div>
		</div>
	</div>
	</section>

	<?php get_footer(); ?>