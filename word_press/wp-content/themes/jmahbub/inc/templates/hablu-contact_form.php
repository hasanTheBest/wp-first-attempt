<h1>Hablu Contact Form</h1> 

<?php settings_errors(); ?>

<?php
	// $picture = esc_attr(get_option( 'profile_picture' ));
?>


<form action="options.php" method="post" class="hablu-general-form">
	<?php  settings_fields( 'hablu-contact-options' ); ?>
	<?php  do_settings_sections('mh_hablu_theme_contact'); ?>
	<?php  submit_button(); ?>
</form>