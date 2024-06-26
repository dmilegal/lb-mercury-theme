<?

add_action( 'after_setup_theme', function(){
  add_theme_support( 'menus' );
  
	register_nav_menus([
    'page_not_found_menu' => 'Navigation links on the 404 page',
    'footer_sub_menu' => 'Footer Secondary Menu',
  ]);
} );
