<?php
require_once 'shared/shared.php';

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    wp_register_style('pros-cons-css', get_theme_file_uri('blocks/pros-cons/pros-cons.css'));
    register_block_type( __DIR__ . '/pros-cons' );
}