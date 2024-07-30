<?
$params = isset($args['prepared']) ? $args : relinkingListParams($args);

ob_start();
if ($params['theme'] == 'with-large-image') {
  get_template_part("theme-parts/cells/relinking-list/slider", null, $params);
} else {
  get_template_part("theme-parts/cells/relinking-list/tile", null, $params);
}
$html = (string) ob_get_clean();
echo wp_interactivity_process_directives($html);