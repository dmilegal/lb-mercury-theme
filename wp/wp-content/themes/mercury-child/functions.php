<?php
#set translations for child theme
function mercury_child_setup() {
	$path = get_stylesheet_directory().'/languages';
	load_child_theme_textdomain( 'mercury-child', $path );
}
add_action( 'after_setup_theme', 'mercury_child_setup' );

require_once 'shared/shared.php';
require_once 'settings/settings.php';
require_once 'blocks/blocks.php';
require_once 'inc/inc.php';



# showing hreflang meta tags in the multisite subsites
add_action( 'wp_head', function(){
	if(!is_multisite() || is_404())
		return;

	global $wp;
	$curr_url = home_url( $wp->request ) . '/';

	switch_to_blog(1);
	$subsitez = get_field('ntw_webs_switcher','m5netw_opt1');
	restore_current_blog();

	$str = '<link rel="alternate" hreflang="%s" href="%s">';

	#subsite that is active now
	$current_subsite = $subsitez[0];

	foreach ($subsitez as $k=>$v) {
		if( $v['slug'] == '/' )
			continue;
		
		if(strpos($curr_url, $v['slug']) !== false){
			$current_subsite = $subsitez[$k];
			break;
		}
	}
	
	foreach ($subsitez as $k=>$v):
		if( !$v['show_lang_sw'] )
			continue;
		
		$urll = $v['url'] . $_SERVER['REQUEST_URI'];	
		if($current_subsite['slug'] === '/' && check_url_exists( $urll ) ){
			echo sprintf( $str, $v['hreflang'], $urll );
			echo ($v['slug'] === '/') ? sprintf( $str, 'x-default', $urll ) : '';
			continue;
		}

		$urll = str_replace($current_subsite['slug'], $v['slug'], $curr_url);	
		if(!check_url_exists($urll))
			continue;
			
		echo sprintf( $str, $v['hreflang'], $urll );
		echo ($v['slug'] === '/') ? sprintf( $str, 'x-default', $urll) : '';
	endforeach;

});


// For custom functions and hooks...
function include_child_scripts()
{
	wp_deregister_style('mercury-style');
	wp_deregister_style('mercury-media');
	wp_deregister_style('mercury-googlefonts');

	wp_enqueue_style( 'mercury-googlefonts', get_stylesheet_directory_uri() . '/fonts/stylesheet.css', array(), '20230829', 'all' );

	wp_enqueue_style( 'mercury-style', get_template_directory_uri() . '/style.css', array(), '20230829', 'all' );
	wp_enqueue_style( 'mercury-child-style', get_stylesheet_directory_uri() . '/css/child-styles.css', array('mercury-style'), '20230829', 'all' );
	wp_enqueue_style( 'mercury-media', get_template_directory_uri() . '/css/media.css',  array('mercury-child-style'), '20230829', 'all');
	wp_enqueue_style( 'mercury-child-media', get_stylesheet_directory_uri() . '/css/child-media.css',  array('mercury-child-style'), '20230829', 'all');

	wp_enqueue_script( 'jquery-fix', get_stylesheet_directory_uri() . '/js/libs/jquery-fix.js', array() );
	wp_enqueue_script('child-scripts', get_stylesheet_directory_uri() . '/js/child-scripts.js', array('jquery'));

}
add_action('wp_enqueue_scripts', 'include_child_scripts', 25);



// for dynamic template parts
function include_dynamic_child_scripts() {
	wp_register_style('member-block-css',  get_stylesheet_directory_uri() . '/css/dynamic/member-block.css');
}
add_action('init', 'include_dynamic_child_scripts');

function include_member_block_styles($slug, $name, $args) {
    wp_enqueue_style('member-block-css', '', array('mercury-child-style'));
}
add_action( 'get_template_part_theme-parts/member-block', 'include_member_block_styles', 10, 3 );

// remove wp version number from scripts and styles
function remove_css_js_version($src)
{
	if (strpos($src, '?ver='))
			$src = remove_query_arg('ver', $src);
	return $src;
}
add_filter('style_loader_src', 'remove_css_js_version', 9999);
add_filter('script_loader_src', 'remove_css_js_version', 9999);

if (function_exists('geoip_detect2_get_info_from_current_ip')) {
	add_filter('geoip_object', 'return_geoip_object');
	function return_geoip_object()
	{
			return geoip_detect2_get_info_from_current_ip();
	}
}

// Remove RSS links to feed from the header
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

// Show posts and custom posts types on author page
function post_types_author_archives($query)
{
	if ($query->is_author)
			$query->set('post_type', array('post', 'page', 'news'));
	remove_action('pre_get_posts', 'custom_post_author_archive');
}
add_action('pre_get_posts', 'post_types_author_archives');

function wpb_author_info_box()
{
  get_template_part('/theme-parts/author-block');
}
add_shortcode('show_wpb_author_info_box', 'wpb_author_info_box');

// Allow HTML in author bio section
remove_filter('pre_user_description', 'wp_filter_kses');






acf_add_options_page([
	'network' => true,
	'post_id' => 'm5netw_opt1',
	'page_title' => 'Network Options',
	'menu_title' => 'Network Options'
]);