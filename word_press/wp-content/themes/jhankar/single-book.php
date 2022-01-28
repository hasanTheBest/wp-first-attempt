<?php get_header(); ?>
<?php the_post(); ?>
<div class="jumbotron">
    <div class="container">
        <h2>
            <?php  the_title(); ?>
        </h2>
        <?php 
        $jhankar_post_subtitle = get_post_meta( get_the_ID(  ), '_jhankar_add_subtitle', true );
        if($jhankar_post_subtitle) :
        ?>
        <p>
            <?php echo esc_html( $jhankar_post_subtitle ); ?>
        </p>
        <?php endif; ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>

                <?php the_category( ', '); ?>

            </h4>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-12">
            <div class="post_thumbnail">
                <?php if(has_post_thumbnail( )) {
                    the_post_thumbnail( 'large', array('class'=>'img-responsive') );
                } ?>
            </div>
            <div class="sectionContainer">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="">
        <h4>
            <?php _e('FB Post','jhankar'); ?>
        </h4>
        <div class="fb-post" data-href="<?php echo esc_url(get_post_meta( get_the_ID(  ), '_jhankar_post_url', true)); ?>" data-width="466">
            <div class="fb-xfbml-parse-ignore">
                <a href="<?php echo esc_url(get_post_meta( get_the_ID(  ), '_jhankar_post_url', true)); ?>">
                    <?php 
                if(get_post_meta( get_the_ID(  ), '_jhankar_post_title', true)){
                    echo esc_html(get_post_meta( get_the_ID(  ), '_jhankar_post_title', true));
                }else{
                    the_title();
                }
                ?>
                </a>
                <?php _e('by','jhankar'); ?>
                <?php if(get_post_meta( get_the_ID(  ), '_jhankar_author_name', true)) : ?>
                <a href="<?php echo esc_url(get_post_meta( get_the_ID(  ), '_jhankar_author_url', true)); ?>">
                    <?php echo esc_html(get_post_meta( get_the_ID(  ), '_jhankar_author_name', true)); ?>
                </a>
                <?php else : ?>
                <a href="<?php echo esc_url(get_author_posts_url( 'ID' )); ?>">
                    <?php echo esc_html(get_the_author_meta( 'display_name' )); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    