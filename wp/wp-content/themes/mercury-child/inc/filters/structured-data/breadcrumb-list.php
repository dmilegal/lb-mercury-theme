<?php


add_filter('wpseo_schema_needs_breadcrumb', 'check_need_breadcrumb_schema');

function check_need_breadcrumb_schema($is_needed)
{
  if (is_front_page()) {
    return false;
  }

  return $is_needed;
}
