<?php 

/*@pakages habluTheme
__Aside Post Format*/

?>


<?php get_header(); ?>
<article <?php post_class( 'hablu-format-aside' ); ?> id="post-<?php the_ID(); ?>">
	<div class="aside-container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-2">
				<?php if( hablu_get_attachment() ) : ?> 
					<div class="aside-featured bgi" style="background-image: url(<?php echo hablu_get_attachment(); ?>)"></div> 
				<?php endif; ?>
			</div> <!-- /.col-md-2 -->
			<div class="col-xs-12 col-sm-9 col-md-10">
				<header class="entry-header"> 
					<div class="posted-meta">
						<?php echo hablu_posted_meta(); ?>
					</div> <!-- /.posted-meta -->
				</header>
				<div class="entry-content">
					
					<div class="entry-excerpt">
						<?php the_content(); ?>
					</div> 
				</div>
			</div> <!-- /.col-md-10 -->
		</div> <!-- /.row -->

		
		<footer class="entry-footer">
			<div class="row">
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
					<?php echo hablu_posted_footer(); ?>
				</div> <!-- .col-md-10 -->
			</div> <!-- /.row -->
		</footer>
	</div> <!-- /.aside-container -->
</article>