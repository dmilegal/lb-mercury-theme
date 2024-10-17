<?php
#set translations for child theme
function mercury_child_setup()
{
	$path = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain('mercury-child', $path);
}
add_action('after_setup_theme', 'mercury_child_setup');

require_once 'dashadm/dashadm.php';
require_once 'shared/shared.php';
require_once 'settings/settings.php';
require_once 'blocks/blocks.php';
require_once 'inc/inc.php';

// Disable css and js

// remove wp version number from scripts and styles
function remove_css_js_version($src)
{
	if (strpos($src, '?ver='))
		$src = remove_query_arg('ver', $src);
	return $src;
}
//add_filter('style_loader_src', 'remove_css_js_version', 9999);
//add_filter('script_loader_src', 'remove_css_js_version', 9999);

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
	get_template_part('/theme-parts/organisms/author/author-block');
}
add_shortcode('show_wpb_author_info_box', 'wpb_author_info_box');

// Allow HTML in author bio section
remove_filter('pre_user_description', 'wp_filter_kses');


add_action('acf/init', 'mercury_acf_op_init');

function mercury_acf_op_init()
{
	if (function_exists('acf_add_options_page')) {

		acf_add_options_page([
			'network' => true,
			'post_id' => 'm5netw_opt1',
			'page_title' => 'Network Options',
			'menu_title' => 'Network Options'
		]);
	}
}
