<?
global $post;
$variant = $args['sidebar_variant'] ?? 'universal';

get_template_part("theme-parts/organisms/sidebar/sidebar-$variant", null, $args);