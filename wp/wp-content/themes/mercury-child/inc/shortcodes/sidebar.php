<?

/**
 * Create sidebar and shortcode
 */
// Register Sidebars

add_shortcode('lb_sidebar', 'lb_shortcode_sidebar');
function lb_shortcode_sidebar($atts)
{
  extract(shortcode_atts(array('name' => ''), $atts));

  ob_start();
  get_template_part('theme-parts/organisms/sidebar/sidebar', null, [
    'sidebar_variant' => 'default',
    'widget_id' => $name
  ]);
  $sidebar_left = ob_get_clean();
  $html = $sidebar_left;
  return $html;
}
