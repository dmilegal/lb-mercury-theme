<?
//////// Emoji optimize
function disable_wp_emojicons()
{
  // Remove the inlined emoji script from the head
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  //remove_action('wp_print_styles', 'print_emoji_styles');

  // Add the external script with wp_enqueue_script
  add_action('wp_enqueue_scripts', 'enqueue_wp_emoji_min_js');
}

add_action('init', 'disable_wp_emojicons');

function enqueue_wp_emoji_min_js()
{
  wp_enqueue_script('wp-emoji-loader', includes_url('js/wp-emoji-loader' . wp_scripts_get_suffix() . '.js'), [], wp_get_theme()->get('Version'), [
    'in_footer' => true,
    'strategy'  => 'async',
  ]);
}

function custom_print_emoji_detection_script() {
	ob_start();
	print_emoji_detection_script();
	$output = ob_get_clean();
  
	$pattern = '/' . preg_quote( file_get_contents( ABSPATH . WPINC . '/js/wp-emoji-loader' . wp_scripts_get_suffix() . '.js' ), '/' ) . '/';
	$output = preg_replace( $pattern, '', $output );

	echo $output;
}

add_action('wp_head', 'custom_print_emoji_detection_script');


