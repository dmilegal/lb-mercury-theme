<?
$params = isset($args['prepared']) ? $args : relinkingListParams($args);

if ($params['theme'] == 'with-primary-image') {
  get_template_part("theme-parts/organs/relinking-list/slider", null, $params);
} else {
  get_template_part("theme-parts/organs/relinking-list/tile", null, $params);
}
