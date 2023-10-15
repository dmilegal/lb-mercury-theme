<?php
add_action('init', 'on_w3tc_action');

function on_w3tc_action() {
    if (isset($_GET['w3tc_note']) && ($_GET['w3tc_note'] === 'flush_all' || $_GET['w3tc_note'] === 'flush_pgcache' || $_GET['w3tc_note'] === 'pgcache_purge_post')) {
        clear_exist_page_store();
    }
}

function clear_exist_page_store() {
    global $wpdb;

    $transients = array();

    if (is_multisite()) {
        $transients = $wpdb->get_col("
            SELECT meta_key
            FROM {$wpdb->sitemeta}
            WHERE meta_key LIKE '_site_transient_exist_%'
        ");
    } else {
        $transients = $wpdb->get_col("
            SELECT option_name
            FROM {$wpdb->options}
            WHERE option_name LIKE '_transient_exist_%'
        ");
    }

    foreach ($transients as $transient) {
        if (is_multisite())
            delete_site_transient(str_replace('_site_transient_', '', $transient)); 
        else
            delete_transient(str_replace('_transient_', '', $transient));

    }
}