<?
function lb_set_in_widget_flag() {
  global $is_in_widget;
  $is_in_widget = true;
}
add_action('dynamic_sidebar_before', 'lb_set_in_widget_flag');

function lb_unset_in_widget_flag() {
  global $is_in_widget;
  $is_in_widget = false;
}
add_action('dynamic_sidebar_after', 'lb_unset_in_widget_flag');