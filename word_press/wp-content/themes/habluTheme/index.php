<?php 

/*
	@pakages habluTheme
*/

?>

<?php get_header(); ?>

<div id="primary" class="cotent-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 hablu_post_container">
 
					<?php 
						if( have_posts() ) :
							while( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', get_post_format() );
							endwhile;
						endif;
					?>

				</div> <!-- /.col-xs-12 -->	
			</div> <!-- .row -->
		</div> <!-- /.container -->

		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<a href="" class="btn btn-lg btn-default hablu-loading hablu-load-more" data-page="1" data-url="<?php echo admin_url( 'admin-ajax.php' ); ?>"><span class="hablu-icon"></span> Load More</a>
				</div> <!-- /.col-xs-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</main>
</div> <!-- /.content-area -->

<?php get_footer(); ?>
