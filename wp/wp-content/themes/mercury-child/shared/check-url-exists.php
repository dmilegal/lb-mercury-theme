<?php
function check_url_exists($url) {
    $cache = wp_cache_get($url, 'url_exists');
    
    if ($cache !== false)
        return !!$cache;

    $response = wp_remote_head($url);
    $result = !is_wp_error($response) && wp_remote_retrieve_response_code($response) == 200;

    wp_cache_set($url, $result ? 1 : 0, 'url_exists');

    return $result;
}