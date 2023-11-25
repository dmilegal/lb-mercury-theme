<?php
function check_url_exists($url) {
    $cache_key = 'exist_' . md5($url);

    $cache = get_site_transient($cache_key);

    if ($cache !== false)
        return $cache == '1';

    $response = wp_remote_head($url);
    $result = !is_wp_error($response) && wp_remote_retrieve_response_code($response) == 200;

    set_site_transient($cache_key, $result ? 1 : 0, 4 * WEEK_IN_SECONDS);

    return $result;
}