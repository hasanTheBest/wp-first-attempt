<?php get_header(); ?>
<div class="jumbotron">
    <div class="container">
        <h2>
            <?php 
            single_cat_title(  );
            ?>
        </h2>
        <?php if(category_description()) : ?>
        <p>
            <?php echo category_description(); ?>
        </p>
        <?php endif; ?>
    </div>
</div>
<div class="container">
    <h2 class="hide">
        <a href="enroll.html">রেজিস্ট্রেশন করুন</a>
    </h2>
    <div class="row center">
        <iframe width="640" height="480" src="http://www.youtube.com/embed/o07n8_uWcns" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="row">
        <h2 class="hide">
            <a href="enroll.html">রেজিস্ট্রেশন করুন</a>
        </h2>
        <h2>
            <strong>
                <?php 
            single_cat_title( 'Currently Updated Category: ' );
            ?>
            </strong>
        </h2>
        <ol>
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
                <li>
                    <h4>
                        <a href="<?php the_permalink(  ); ?>">
                            <?php the_title();; ?>
                        </a>
                    </h4>
                </li>

                <?php
                    }
                }
                ?>

        </ol>
    </div>
    <?php get_footer(); ?>