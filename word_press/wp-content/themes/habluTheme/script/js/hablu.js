jQuery(document).ready(function($){
	
	$(document).on( 'click', '.hablu-load-more', function(){
		var that = $(this);
		var page = that.data('page'); 
		var newPage = page + 1;
		var ajaxurl = that.data('url');

		$.ajax({
			url : ajaxurl,
			type: 'post',
			data: {
				page: page,
				action: 'hablu_load_more'
			},
			error: function( response ){
				console.log(response);
			},
			success:  function( response ){
				$('.hablu_post_container').append( response );
			}
		}); // ajax calling
	});
});