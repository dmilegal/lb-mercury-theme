<?

/**
 * Perpare block id
 */
function getBlockId($block)
{
  $id = str_replace('acf/', '', $block['name']) . '-' . $block['id'];
  if (!empty($block['anchor'])) {
    $id = $block['anchor'];
  }

  return $id;
}
