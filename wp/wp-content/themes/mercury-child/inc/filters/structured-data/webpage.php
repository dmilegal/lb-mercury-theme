<?php
add_filter('wpseo_schema_webpage', 'schema_change_webpage', 11, 2);

/**
 * Changes the Yoast SEO WebPage schema.
 *
 * @param array             $data    The Schema WebPage data.
 * @param Meta_Tags_Context $context Context value object.
 *
 * @return array $data The Schema WebPage data.
 */
function schema_change_webpage($data, $context)
{
  if (get_option('page_on_front') == $context->indexable->object_id)
    unset($data['breadcrumb']);

  return $data;
}