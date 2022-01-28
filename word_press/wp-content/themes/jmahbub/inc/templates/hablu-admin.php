<h1>Hablu Sidebar Options</h1> 

<?php settings_errors(); ?>

<?php
	
	$picture = esc_attr(get_option( 'profile_picture' ));
	$firstName = esc_attr(get_option( 'first_name' ));
	$lastName = esc_attr(get_option( 'last_name' ));
	$fullName = $firstName . ' ' . $lastName;
	$description = esc_attr(get_option( 'user_description' ));
?>

<div class="hablu-sidebar-preview">
	<div class="hablu-sidebar">
		<div class="image-container">
			<div class="profile-picture" id="profile-picture-preview" style="background-image: url(<?php print $picture; ?>);"></div>
		</div>
		<h1 class="hablu-username"><?php print $fullName; ?></h1>
		<h3 class="hablu-description"><?php print $description; ?></h3>
		<div class="icons"></div>
	</div>
</div>


<form action="options.php" method="post" class="hablu-general-form">
	<?php settings_fields( 'hablu-settings-group' ); ?>
	<?php do_settings_sections('mh_hablu'); ?>
	<?php submit_button( 'Save Chages', 'primary', 'btnSubmit' ); ?>
</form>