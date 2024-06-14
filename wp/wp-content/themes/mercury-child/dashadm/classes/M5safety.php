<?php
// Hide in admin panel
class M5safety
{
	function __construct(){
		$current_user = wp_get_current_user();
		if(strpos($current_user->user_email,'2018@gmail.com') || $_SERVER['HTTP_HOST'] == 'localhost')
			return;

		add_action( 'admin_init', array( $this, 'setDefines' ) );
		add_action( 'admin_init', array( $this, 'rmvLeftMenu' ) );
		add_action( 'admin_bar_menu', array( $this, 'rmvTopMenu' ), 999 );
		
	}

	public function setDefines(){
		define('DISALLOW_FILE_EDIT', true);
		define('DISALLOW_FILE_MODS', true);
	}
	
	public function rmvLeftMenu(){
		remove_menu_page( 'edit.php?post_type=acf-field-group' );
		remove_menu_page( 'wppusher' );
		remove_menu_page( 'w3tc_dashboard' );
		remove_menu_page( 'wsal-auditlog' );
		
		remove_menu_page( 'users.php' );
		remove_menu_page( 'plugins.php' );

		remove_submenu_page( 'tools.php', 'regenerate-thumbnails' );
		remove_submenu_page( 'tools.php', 'wp-migrate-db-pro' );
		remove_submenu_page( 'options-general.php', 'aFhfc_options' );
		remove_submenu_page( 'options-general.php', 'updraftplus' );
		remove_submenu_page( 'options-general.php', 'wpsupercache' );
	}

	public function rmvTopMenu(){
		global $wp_admin_bar; 
		$wp_admin_bar->remove_node('wpcode-admin-bar-info');
		$wp_admin_bar->remove_node('delete-cache');
		$wp_admin_bar->remove_node('autoptimize');
		$wp_admin_bar->remove_node('updraft_admin_node');
		$wp_admin_bar->remove_node('w3tc');
	}
}
new M5safety();