<h1>Hablu Custom Css </h1> 

<?php settings_errors(); ?>

<?php
	// $picture = esc_attr(get_option( 'profile_picture' ));
?>


<form action="options.php" method="post" class="hablu-general-form">
	<?php  settings_fields( 'hablu-custom-css-options-register' ); ?>
	<?php  do_settings_sections('mh_hablu_css'); ?>
	<?php  submit_button(); ?>
</form>