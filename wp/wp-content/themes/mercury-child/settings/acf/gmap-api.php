<?
function lb_acf_google_map_api( $api ){
  $api['key'] = get_field('gmap_api_key', 'option');
  return $api;
}
add_filter('acf/fields/google_map/api', 'lb_acf_google_map_api');

// Method 2: Setting.
// function my_acf_init() {
//   acf_update_setting('google_api_key', 'xxx');
// }
// add_action('acf/init', 'my_acf_init');