<h1>Ewaste Contact Form</h1>
<?php settings_errors(); ?>



<form method="post" action="options.php" class="Ewaste-contact-form">
	<?php settings_fields( 'Ewaste-contact-options' ); ?>
	<?php do_settings_sections( 'Joon_Ewaste_theme_contact'' ); ?>
	<?php submit_button(); ?>
</form>
