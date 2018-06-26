<?php
add_action( 'admin_menu', 'Whats_create_admin_menu');
add_action('admin_init','Whats_settings');
function Whats_create_admin_menu() {
	add_menu_page (
		'Whats Plugin', 'Whats Plugin', 'administrator', 'Whats_opciones', 'Whats_create_admin_menu_function', '
		dashicons-align-center' );
}


function Whats_create_admin_menu_function() {
	?>
	<div class='wrap'>
		<h2>  <?= _e('Whatsapp settings','mark_whatsapp'); ?></h2>
		<form action="options.php" method="POST">
			<?php
			settings_fields('Whats_group');
			do_settings_sections('Whats_group');
			?>
      <label><?= _e('Phone Number','mark_whatsapp');  ?></label>
      <input type="number"
      name="Whats_number"
      id="Whats_number"
      value="<?= get_option('Whats_number'); ?>">
     


    <?= submit_button(); ?>
  </form>

   <h3 class="credits"><?= _e('Plugin by','mark_whatsapp');  ?>
     <a href="https://markdevs.com">Arón Yáñez</a>
   </h3>
</div>

<?php
}
function Whats_settings(){
  $args = array(
    'type' => 'number', 
    'sanitize_callback' => 'sanitize_text_field',
    'default' => NULL,
  );
  register_setting('Whats_group','Whats_number',$args);
}