<div class="comments">
	<h2>Comments</h2>

	<?php $args = array(
		'walker' => null,
		'max_depth' => '',
		'style' => 'ul',
		'callback' => null,
		'end-callback' => null,
		'type' => 'all',
		'reply_text' => 'Reply',
		'page' => '',
		'per_page' => '',
		'avatar_size' => 55,
		'reverse_top_level' => null,
		'reverse_children' => '',
		'format' => 'html5',
		'short_ping' => false,
		'echo' => true
	); 

	wp_list_comments($args, $comments);

	$comments_args = array(
		//send button title
		'label_submit' => 'Send',
		//Reply button title
		'reply_text' => 'Write a Reply or Comment',
		//write some after comment
		'comment_notes_after' => '',
		// Text area
		'comment_field' => '<p class="comment-form-comment"><label>Write Your Text</lable><br><textarea name="comment"></textarea></p>'
	); 
	comment_form($comments_args)

	?>
</div>