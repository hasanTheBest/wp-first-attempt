<?php get_header(); ?>

    <div class="container">
        <div class="row">

            <div class="left-side-section">
                <div class="row">
                    <div class="col-sm-4">
						<?php if ( is_active_sidebar( 'recent-videos' ) ) : ?>
							<?php dynamic_sidebar( 'recent-videos' ); ?>
						<?php endif; ?>
                    </div>


                    <div class="col-sm-4">
						<?php if ( is_active_sidebar( 'ask-jhankar' ) ) : ?>
							<?php dynamic_sidebar( 'ask-jhankar' ); ?>
						<?php endif; ?>
                    </div>


                    <div class="col-sm-4">
						<?php if ( is_active_sidebar( 'hppiness-therapy' ) ) : ?>
							<?php dynamic_sidebar( 'hppiness-therapy' ); ?>
						<?php endif; ?>
                    </div>
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-sm-4">
						<?php if ( is_active_sidebar( 'programming-book-1' ) ) : ?>
							<?php dynamic_sidebar( 'programming-book-1' ); ?>
						<?php endif; ?>
                    </div>
                    <div class="col-sm-4">
						<?php if ( is_active_sidebar( 'programming-book-2' ) ) : ?>
							<?php dynamic_sidebar( 'programming-book-2' ); ?>
						<?php endif; ?>
                    </div>
                    <div class="col-sm-4">
						<?php if ( is_active_sidebar( 'crazyness' ) ) : ?>
							<?php dynamic_sidebar( 'crazyness' ); ?>
						<?php endif; ?>
                    </div>

                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-2">
						<?php if ( is_active_sidebar( 'programming-videos' ) ) : ?>
							<?php dynamic_sidebar( 'programming-videos' ); ?>
						<?php endif; ?>
                    </div>
                    <div class="col-sm-4">
						<?php if ( is_active_sidebar( 'web-development' ) ) : ?>
							<?php dynamic_sidebar( 'web-development' ); ?>
						<?php endif; ?>
                    </div>
                </div> <!-- /.row -->


            </div> <!-- /.col-md-12-->
        </div> <!-- /.row -->
    </div> <!-- /.container -->

<?php get_footer(); ?>