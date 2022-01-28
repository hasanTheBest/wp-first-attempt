 <!-- get header -->
<?php get_header(); ?>

          <div class="container page-block">
          	<div class="row">
               <div class="col-md-9 latest-writing">
                    <div class="latest-writings writing-block">

	                    	<?php if(have_posts()) : ?>
	                    		<?php while(have_posts()) : the_post(); ?>

	                    			<div class="writing-piece">
										 <h3 class="title"><?php the_title(); ?></h3>
                                                   <p class="post-meta text-muted">
                                                       posted on <?php the_time('F j Y g:i a') ?> in 
                                                       <?php the_category(' '); ?> || 
                                                       <?php the_tags(); ?>
                                                       <?php if(current_user_can('manage_options')) : ?>
                                                            <?php echo ' | '; ?>
                                                            <?php edit_post_link(); ?>
                                                       <?php endif; ?>
                                                   </p>
										 <div class="writing-highlight">
											<p><?php the_content(); ?></p>
										 </div>
									</div> <!-- /.writting-piece -->

                                             <!-- pagination  -->
                                             <div class="row text-info">
                                                  <div class="col-xs-6 text-left">
                                                       <?php previous_post_link(); ?>
                                                  </div>
                                                  <div class="col-xs-6 text-right">
                                                       <?php next_post_link(); ?>
                                                  </div>
                                             </div>

	                    		<?php endwhile; ?>
	                    	<?php endif; ?>

                    	</div><!--  /.latest-writings .writting-block -->
                   </div><!--  /.col-md-9 .latest-writing -->	

               <div class="col-md-3 left-side-section">

               	<?php if(is_active_sidebar('recent-videos')) : ?>
               		<?php dynamic_sidebar('recent-videos'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('ask-jhankar')) : ?>
               		<?php dynamic_sidebar('ask-jhankar'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('hppiness-therapy')) : ?>
               		<?php dynamic_sidebar('hppiness-therapy'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('programming-book-1')) : ?>
               		<?php dynamic_sidebar('programming-book-1'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('programming-book-2')) : ?>
               		<?php dynamic_sidebar('programming-book-2'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('crazyness')) : ?>
               		<?php dynamic_sidebar('crazyness'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('programming-videos')) : ?>
               		<?php dynamic_sidebar('programming-videos'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('web-development')) : ?>
               		<?php dynamic_sidebar('web-development'); ?>
               	<?php endif; ?>
                   
               </div> <!-- /.col-md-3 -->
          </div> <!-- /.row -->
          </div> <!-- /.container -->

<?php get_footer(); ?>