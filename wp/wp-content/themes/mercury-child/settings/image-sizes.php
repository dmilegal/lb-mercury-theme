<?
add_action( 'after_setup_theme', 'remove_plugin_image_sizes', 100 );
function remove_plugin_image_sizes(){
	remove_image_size( 'mercury-custom-logo');
	//remove_image_size( 'mercury-50-50' );
	//remove_image_size( 'mercury-100-100');
	//remove_image_size( 'mercury-120-120');
	remove_image_size( 'mercury-135-135'); //
	remove_image_size( 'mercury-270-270'); //
	remove_image_size( 'mercury-270-430');
	remove_image_size( 'mercury-340-447');
	remove_image_size( 'mercury-450-254');
	remove_image_size( 'mercury-450-317'); //
	remove_image_size( 'mercury-450-338'); //
	//remove_image_size( 'mercury-450-450');
	remove_image_size( 'mercury-450-600');
	remove_image_size( 'mercury-450-717');
	remove_image_size( 'mercury-479-479'); //
	remove_image_size( 'mercury-570-270');
	remove_image_size( 'mercury-570-430');
	remove_image_size( 'mercury-570-570'); //
	remove_image_size( 'mercury-585-505');
	remove_image_size( 'mercury-737-556');
	remove_image_size( 'mercury-737-983');
	remove_image_size( 'mercury-767-767'); //
	remove_image_size( 'mercury-768-576');
	remove_image_size( 'mercury-900-675'); //
	remove_image_size( 'mercury-994-559');
	remove_image_size( 'mercury-1170-505');
	remove_image_size( 'mercury-2000-400'); //
	//remove_image_size( 'mercury-9999-32');
	remove_image_size( 'mercury-9999-80'); //
	remove_image_size( 'mercury-9999-135'); //
}