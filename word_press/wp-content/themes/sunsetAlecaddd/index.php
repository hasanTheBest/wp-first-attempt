<?php /*
	
@package sunsettheme

*/

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div class="container sunset-posts-container">
				
				<?php 
					
					if( have_posts() ):
						
						while( have_posts() ): the_post();
					
							// $class = 'reveal';
							// set_query_var( 'post-class', $class );
							get_template_part( 'template-parts/content', get_post_format() );
						
						endwhile;
						
					endif;
                
				?>
				
			</div><!-- .container -->
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <buttton 
                        type="button" 
                         class="btn btn-lg btn-load-more sunset-load-more" 
                         data-page="1"
                         data-url="<?php echo admin_url('admin-ajax.php'); ?>"
                        ><span class="sunset-icon sunset-loading"></span>
						<span class="text">Load More</span></buttton>
                    </div>
                </div>
            </div> <!--/.container-->
			
		</main>
	</div><!-- #primary -->
	
<?php get_footer(); ?>