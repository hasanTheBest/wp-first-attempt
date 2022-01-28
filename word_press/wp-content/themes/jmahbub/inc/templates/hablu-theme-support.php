<h1>Hablu Theme Options</h1> 

<?php settings_errors(); ?>

<?php
	// $picture = esc_attr(get_option( 'profile_picture' ));
?>


<form action="options.php" method="post" class="hablu-general-form">
	<?php  settings_fields( 'hablu-theme-support' ); ?>
	<?php  do_settings_sections('mh_hablu_theme'); ?>
	<?php  submit_button(); ?>
</form>