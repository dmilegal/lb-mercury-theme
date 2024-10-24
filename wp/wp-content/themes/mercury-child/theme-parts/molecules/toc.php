<?php
// Получаем значения полей из $args
$header_label = $args['header_label'] ?? '';
$display_header_label = !empty($args['display_header_label']) ? $args['display_header_label'] : 'inherit';
$toggle_view = !empty($args['toggle_view']) ? $args['toggle_view'] : 'inherit';
$initial_view = !empty($args['initial_view']) ? $args['initial_view'] : 'inherit';
// $display_counter = !empty($args['display_counter']) ? $args['display_counter'] : true;
// $post_types = $args['post_types'] ?? array('post', 'page');
// $post_in = $args['post_in'] ?? '';
$device_target = $args['device_target'] ?? 'both';
// $view_more = $args['view_more'] ?? 5;


// Формируем атрибуты шорткода
$shortcode_atts = array();

if (!empty($header_label)) {
    $shortcode_atts[] = 'header_label="' . esc_attr($header_label) . '"';
}

if ($display_header_label == 'yes' || $display_header_label == 'no') {
    $shortcode_atts[] = 'display_header_label="' . esc_attr($display_header_label) . '"';
}

if ( $toggle_view == 'yes' || $toggle_view == 'no') {
    $shortcode_atts[] = 'toggle_view="' . esc_attr($toggle_view) . '"';
}

if ($initial_view === 'hide' || $initial_view === 'show') {
    $shortcode_atts[] = 'initial_view="' . esc_attr($initial_view) . '"';
}

// if (!$display_counter) {
//     $shortcode_atts[] = 'display_counter="no"';
// } else {
//     $shortcode_atts[] = 'display_counter="yes"';
// }

// if (!empty($post_types)) {
//     if (is_array($post_types)) {
//         $post_types_str = implode(',', $post_types);
//     } else {
//         $post_types_str = $post_types;
//     }
//     $shortcode_atts[] = 'post_types="' . esc_attr($post_types_str) . '"';
// }

// if (!empty($post_in)) {
//     $shortcode_atts[] = 'post_in="' . esc_attr($post_in) . '"';
// }

if ($device_target && $device_target !== 'both') {
    $shortcode_atts[] = 'device_target="' . esc_attr($device_target) . '"';
}

// if ($view_more && $view_more != 5) {
//     $shortcode_atts[] = 'view_more="' . intval($view_more) . '"';
// }

// Объединяем атрибуты шорткода
$shortcode_str = implode(' ', $shortcode_atts);

if (shortcode_exists('ez-toc')) { ?>
    [ez-toc <?= $shortcode_str ?>]
<? } ?>