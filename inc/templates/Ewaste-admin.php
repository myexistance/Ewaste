<h1>Ewaste Theme Options</h1>
<?php settings_errors(); ?>
<?php
$firstName = esc_attr( get_option( 'first_name' ) );
$lastName = esc_attr( get_option( 'last_name' ) );
$fullName = $firstName . ' ' . $lastName;
?>

<div class="Ewaste-sidebar-preview">
  <div class="Ewaste-sidebar">
    <h1 class="Ewaste-username"><?php print $fullname; ?></h1>
  </div>
</div>
<form method="post" action="options.php" class="Ewaste-general-form">
	<?php settings_fields( 'Ewaste-settings-group' ); ?>
	<?php do_settings_sections( 'Joon_Ewaste' ); ?>
	<?php submit_button(); ?>
</form>
