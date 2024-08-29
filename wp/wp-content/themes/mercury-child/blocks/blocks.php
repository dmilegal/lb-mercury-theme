<?php
add_action('init', 'register_acf_blocks');
function register_acf_blocks()
{
    register_block_type(__DIR__ . '/group-list');
    register_block_type(__DIR__ . '/group-list/title');
    register_block_type(__DIR__ . '/group-list/content');
    register_block_type(__DIR__ . '/our-team');
    register_block_type(__DIR__ . '/button');
    register_block_type(__DIR__ . '/blockquote');
    register_block_type(__DIR__ . '/review-list');
    register_block_type(__DIR__ . '/logo-text');
    register_block_type(__DIR__ . '/logo-text/content');
    register_block_type(__DIR__ . '/logo-text/media');
    register_block_type(__DIR__ . '/logo-text/title');
    register_block_type(__DIR__ . '/step-list');
    register_block_type(__DIR__ . '/step-list/item');
    register_block_type(__DIR__ . '/step-list/item-title');
    register_block_type(__DIR__ . '/sidebar-block');
    register_block_type(__DIR__ . '/sidebar-block/title');
    register_block_type(__DIR__ . '/contributor-list');
    register_block_type(__DIR__ . '/share-links');
    register_block_type(__DIR__ . '/toc');
    register_block_type(__DIR__ . '/bonus-card');
    register_block_type(__DIR__ . '/review-card');
    register_block_type(__DIR__ . '/layout');
    register_block_type(__DIR__ . '/relinking-list');
    register_block_type(__DIR__ . '/hero-banner');
}

function mg_disable_gutenberg_blocks($allowed_blocks)
{
    $blocks = array_diff(
        array_keys(WP_Block_Type_Registry::get_instance()->get_all_registered()),
        [
            'core/quote',
            'core/button'
        ]
    );
    return array_values($blocks);
}
add_filter('allowed_block_types', 'mg_disable_gutenberg_blocks', 9999);
