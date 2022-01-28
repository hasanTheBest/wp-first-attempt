<?php get_header(  ); ?>
<div class="container page-block">
	<div class="col-md-9 latest-writing">
		<div class="latest-writings writing-block">

			<?php if(have_posts(  )) :
				while(have_posts(  )) : the_post(  )
				 ?>
			<div <?php post_class( 'writing-piece' ); ?> id = post-
				<?php the_ID(  ); ?>>
				<h3 class="title">
					<a href="<?php the_permalink(  ); ?>">
						<?php the_title(  ); ?>
					</a>
				</h3>
				<div class="writing-highlight">
					<?php the_excerpt(  ); ?>
				</div>
				<p class="read-more">
					<a href="<?php the_permalink(  ); ?>">Read more...</a>
				</p>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="all-time-best writing-block">

			<?php 
			$jhankar_hit_posts = new WP_Query(array(
				'posts_per_page'=>5,
				'orderby'=>'comment_count',
				'ignore_sticky_posts'=>1

			));
			?>
			<?php if($jhankar_hit_posts->have_posts(  )) : ?>
			<?php while($jhankar_hit_posts->have_posts(  )) : $jhankar_hit_posts->the_post(); ?>

			<div class="writing-piece">
				<h3 class="title">
					<a href="<?php the_permalink(  ); ?>">
						<?php the_title(  ); ?>
					</a>
				</h3>
				<div class="writing-highlight">
					<?php the_excerpt(  ); ?>
				</div>
				<p class="read-more">
					<a href="<?php the_permalink(  ); ?>">Read more...</a>
				</p>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query(  ); ?>
			<?php endif; ?>


		</div>
	</div>
	<div class="col-md-3 left-side-section">
		<div class="side-series">
			<?php $jhankar_recent_videos = new WP_Query(array(
				'post_type' => 'post',
				'posts_per_page'=>6,
				'tax_query' => array(
					'relation' => 'OR',
					array(
						'taxonomy' => 'category',
						'field'    => 'slug',
						'terms'    => array( 'quotes' ),
					),
					array(
						'taxonomy' => 'post_format',
						'field'    => 'slug',
						'terms'    => array( 'post-format-quote' ),
					),
				),
			)); ?>
			<h5 class="text-center">
				<span class="section-title-last">
					<?php _e( 'Recent Videos', 'jhankar' ); ?>
				</span>
			</h5>
			<div class="page-link-collection">
				<?php if($jhankar_recent_videos->have_posts(  )) : ?>
				<?php while($jhankar_recent_videos->have_posts(  )) : $jhankar_recent_videos->the_post(); ?>
				<p class="page-link">
					<a target="_blank" href="<?php the_permalink(  ); ?>">
						<?php the_title(); ?>
					</a>
				</p>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				<?php endif; ?>


			</div>
		</div>

		<?php if(class_exists('CMB2')) : ?>

		<?php 
			$page_ids = get_all_page_ids();
			foreach($page_ids as $page_id){
				if(strtolower(get_the_title($page_id)) == 'about'){
					?>
		<?php 	$jhankar_books = get_post_meta( $page_id, '_jhankar_book', true ); ?>
		<?php foreach($jhankar_books as $jhankar_book): ?>
		<div class="side-series">
			<h5 class="text-center title-second-line">
				<?php echo esc_html($jhankar_book['_jhankar_book_title']); ?>
			</h5>

			<div class="section-description">
				<?php echo apply_filters( 'the_content', $jhankar_book['_jhankar_book_description'] ) ?>
			</div>
			<div class="page-link-collection">
				<p class="text-center">
					<a target="_blank" href="<?php echo esc_url($jhankar_book['_jhankar_buy_url']); ?>">
						<?php $jhankar_book_img=wp_get_attachment_image_src( $jhankar_book['_jhankar_book_thumbnail_id'], 'medium'); ?>
						<img src="<?php echo esc_url($jhankar_book_img[0]); ?>" alt="<?php echo esc_html($jhankar_book['_jhankar_book_title']); ?>"
						    height="150" width="180">
					</a>
				</p>
			</div>
		</div>
		<?php endforeach; ?>
		<?php
				}
			}
			?>
		<?php endif; ?>

		<?php 
				$jhankar_aside_categories[] = array(
					get_cat_ID('web programming'),
					get_cat_ID('Web Development'),
				);
				?>

		<pre><?php //print_r($jhankar_aside_categories);?></pre>
		<?php $jhankar_category_id=get_cat_ID('Web Development'); ?>
		<?php for($i = 0; $i<=count($jhankar_aside_categories); $i++) : ?>

		<div class="side-series">
			<h5 class="text-center">
				<span class="section-title-last">
					<?php echo esc_html(get_cat_name( $jhankar_aside_categories[0][$i] )); ?>
				</span>
			</h5>
			<div class="page-link-collection">
				<?php 
			if(have_posts(  )){
				while(have_posts(  )) {
					the_post(  ); 
					if(in_category($jhankar_aside_categories[0][$i])){
						?>

				<p class="page-link">
					<a href="<?php the_permalink(  ); ?>">
						<?php the_title(); ?>
					</a>
				</p>
				<?php
					}
				}
				?>
			</div>
			<p>
				<a class="btn btn-xs btn-default btn-side-series" href="<?php echo esc_url(get_category_link($jhankar_aside_categories[0][$i])) ?>">
					<?php echo esc_html(get_cat_name( $jhankar_aside_categories[0][$i] )). _e('Main Page ','jhankar'); ?>
				</a>
			</p>
		</div>
		<?php
			}
			?>
		<?php endfor; ?>


	</div>
</div>


<?php if(is_home()) : ; ?>
<?php 
$jhankar_all_categories = get_categories();
$all_cats_count = count($jhankar_all_categories);
$float = $all_cats_count/3;
if(is_float($float)){
	$cats_row_val = intval($float) + 1; 
}
else{
	$cats_row_val = count(get_categories())/3; 
}
?>

<?php for($i=1; $i<=$cats_row_val; $i++) : ; ?>

<section class="section-dream-job">
	<div class="container">
		<div class="row">

			<?php for($j = ($i*3)-2; $j <= $i*3; $j++ ) : ?>
			
			<?php if(have_posts() && count($jhankar_all_categories) >= $j ) : ?>
			<div class="col-md-4">
				<div class="piece-quater">
					<h3 class="text-center">
						<span class="section-title-last">
							<?php echo esc_html($jhankar_all_categories[$j]->name); ?>
						</span>
					</h3>
					<div class="section-description">
						<p class="left">
							<?php echo esc_html($jhankar_all_categories[$j]->description); ?>
						</p>
					</div>
					<div class="section-description">
						<ol class="right">
							<?php while(have_posts()) : the_post(); ?>
							<?php if(in_category( $jhankar_all_categories[$j]->term_id )):  ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</li>
							<?php endif; ?>
							<?php endwhile; ?>
						</ol>
					</div>
					<?php $cat_id =  $jhankar_all_categories[$j]->term_id; ?>
					<a href="<?php echo esc_url(get_category_link($cat_id)); ?>" class="btn btn-success btn-round">
						<?php echo esc_html(get_cat_name($cat_id)). _e('Main Page ','jhankar'); ?>
					</a>
				</div>
			</div>
			<?php endif; ?>
			<?php endfor; ?>
		</div>
	</div>
</section>

<?php endfor; ?>
<?php endif; ?>

<?php get_footer(  ); ?>


