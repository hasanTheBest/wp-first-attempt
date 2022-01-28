<!-- custom search form -->
<form role="search" method="get" action="<?php echo home_url('/'); ?>">
	<input type="search" class="form-control" name="s" title="Search" placeholder="Serach..." value="<?php echo get_search_query(); ?>" >
</form>