<!-- Showing All Tags Items -->
<?php 
$jhankar_tag_title = apply_filters( 'jhankar_tag_heading', __('Tags','jhankar') );
$jhankar_tag_items = apply_filters( 'jhankar_tag_items', get_tags() );
?>
<div class="text-center text-success">
	<h3 class="text-center">
		<?php echo $jhankar_tag_title; ?>
	</h3>
	<?php 
	// echo '<pre>';
	// print_r($jhankar_tag_items);
	// echo '</pre>';
	foreach($jhankar_tag_items as $tag_item){
		printf('<a href="%s" class="btn">%s</a>',get_tag_link($tag_item->term_id),$tag_item->name);
	}
	?>
</div>
<?php 
if(is_home()){
	get_template_part( 'template-parts/page-footer' );
}else{
	get_template_part( 'template-parts/blog-footer');	
}
?>

<?php wp_footer(  ); ?>
</body>

</html>