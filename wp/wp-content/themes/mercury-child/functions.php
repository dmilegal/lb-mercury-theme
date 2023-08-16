<?php
require_once 'shared/shared.php';
require_once 'settings/settings.php';
require_once 'blocks/blocks.php';
require_once 'inc/inc.php';

// For custom functions and hooks...
function include_child_scripts()
{
    wp_register_style('child-styles', get_stylesheet_directory_uri() . '/css/child-styles.css', 'all');
    wp_enqueue_style('child-styles');
    wp_enqueue_script('child-scripts', get_stylesheet_directory_uri() . '/js/child-scripts.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'include_child_scripts', 25);

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
        $query->set('post_type', array('casino', 'post', 'page', 'news'));
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
