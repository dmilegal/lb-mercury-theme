<?php
// Hide in admin panel
class M5safety
{
	function __construct()
	{
		add_action( 'admin_init', array( $this, 'hideSecret' ) );
	}
	
	public function hideSecret(){
		$current_user = wp_get_current_user();
		if($current_user->user_email == 'vazzy2018@gmail.com' || $_SERVER['HTTP_HOST'] == 'localhost')
			return;

		define('DISALLOW_FILE_EDIT', true);
		define('DISALLOW_FILE_MODS', true);
		
		remove_menu_page( 'edit.php?post_type=acf-field-group' );
		remove_menu_page( 'wppusher' );
		remove_menu_page( 'users.php' );
		remove_menu_page( 'plugins.php' );

		remove_submenu_page( 'tools.php', 'regenerate-thumbnails' );
		remove_submenu_page( 'tools.php', 'wp-migrate-db-pro' );
		remove_submenu_page( 'options-general.php', 'aFhfc_options' );
		remove_submenu_page( 'options-general.php', 'updraftplus' );
		remove_submenu_page( 'options-general.php', 'wpsupercache' );
	}
}
new M5safety();