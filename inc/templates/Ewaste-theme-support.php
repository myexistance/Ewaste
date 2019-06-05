<h1>Ewaste Theme Support</h1>
<?php settings_errors(); ?>



<form method="post" action="options.php" class="Ewaste-general-form">
	<?php settings_fields( 'Ewaste-theme-support' ); ?>
	<?php do_settings_sections( 'Joon_Ewaste_theme' ); ?>
	<?php submit_button(); ?>
</form>
