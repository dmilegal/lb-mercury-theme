<?php
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/pros-cons' );
    register_block_type( __DIR__ . '/pros-cons-col' );
    register_block_type( __DIR__ . '/advantages' );
    register_block_type( __DIR__ . '/disadvantages' );
    register_block_type( __DIR__ . '/our-team' );
    register_block_type( __DIR__ . '/button' );
    register_block_type( __DIR__ . '/blockquote' );
}

