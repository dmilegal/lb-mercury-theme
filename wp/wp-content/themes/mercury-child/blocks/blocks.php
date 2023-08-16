<?php
require_once 'shared/shared.php';

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    wp_register_style('pros-cons-css', get_theme_file_uri('blocks/pros-cons/pros-cons.css'));
    wp_register_style('pros-cons-editor-css', get_theme_file_uri('blocks/pros-cons/pros-cons-editor.css'));
    register_block_type( __DIR__ . '/pros-cons' );

    wp_register_style('pros-cons-col-css', get_theme_file_uri('blocks/pros-cons-col/pros-cons-col.css'));
    register_block_type( __DIR__ . '/pros-cons-col' );

    wp_register_style('advantages-css', get_theme_file_uri('blocks/advantages/advantages.css'));
    register_block_type( __DIR__ . '/advantages' );

    wp_register_style('disadvantages-css', get_theme_file_uri('blocks/disadvantages/disadvantages.css'));
    register_block_type( __DIR__ . '/disadvantages' );
}