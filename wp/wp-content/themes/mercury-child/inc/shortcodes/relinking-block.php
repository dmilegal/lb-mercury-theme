<?
function relinking_block_shortcode($atts) {
  $atts = shortcode_atts( array(
      'id' => '',
  ), $atts, 'relinking_block' );

  $post_id = $atts['id'];

  if (!$post_id) {
      return '';
  }

  $post = get_post($post_id);

  if (!$post || $post->post_type !== 'relinking_block') {
      return '';
  }

  ob_start();
  get_template_part('theme-parts/organs/relinking-list/relinking-list', null, [
    ...getRelinkingPostOpts($post_id)
  ]);

  $html = (string) ob_get_clean();

  return wp_interactivity_process_directives($html);
}

add_shortcode('relinking_block', 'relinking_block_shortcode');