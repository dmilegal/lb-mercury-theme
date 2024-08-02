<?
$params = isset($args['prepared']) ? $args : relinkingListParams($args);

get_template_part("theme-parts/organs/relinking-list/{$params['theme_list']}", null, $params);