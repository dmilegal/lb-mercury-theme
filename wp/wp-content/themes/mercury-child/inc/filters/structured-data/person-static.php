<?php

add_filter('wpseo_schema_graph_pieces', 'add_person_static_piece', 11, 2);

/**
 * Adds Schema pieces to our output.
 *
 * @param array                 $pieces  Graph pieces to output.
 * @param \WPSEO_Schema_Context $context Object with context variables.
 *
 * @return array Graph pieces to output.
 */
function add_person_static_piece($pieces, $context)
{
  $pieces[] = new PersonStatic($context);
  return $pieces;
}