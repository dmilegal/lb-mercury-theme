<?php

add_filter('wpseo_schema_graph_pieces', 'add_review_piece', 11, 2);

/**
 * Adds Schema pieces to our output.
 *
 * @param array                 $pieces  Graph pieces to output.
 * @param \WPSEO_Schema_Context $context Object with context variables.
 *
 * @return array Graph pieces to output.
 */
function add_review_piece($pieces, $context)
{
  $pieces[] = new Review($context);
  return $pieces;
}

add_filter('wpseo_schema_needs_author', 'add_review_author_piece');

function add_review_author_piece($is_needed)
{
  if (is_singular('casino')) {
    return true;
  }

  return $is_needed;
}
