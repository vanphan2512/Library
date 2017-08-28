<?php
	add_action('after_setup_theme', 'remove_admin_bar');
	 
	function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
	}
 
/* Theme Setup */
function ti_theme_setup() {

	/* Register Menus  */
	register_nav_menus( array(
		'main_menu' => __( 'Main Menu', 'themetext' ), // Main site menu
		'secondary_menu' => __( 'Secondary Menu', 'themetext' ), // Main site menu
        'page_menu' => __( 'page Menu', 'themetext' ) // Main site menu
	));
}
add_action( 'after_setup_theme', 'ti_theme_setup' );


?>