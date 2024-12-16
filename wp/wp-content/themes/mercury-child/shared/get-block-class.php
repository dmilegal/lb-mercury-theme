<?

/**
 * @return @return string[] Return base class and container class of the block
 */
function getBlockClass($block, $post_id, $is_preview = false)
{

  $baseClassName = str_replace('lb/', 'wp-block-', $block['name']);
  $containerClassName = $baseClassName;

  if (!empty($block['className'])) {
    $containerClassName .= ' ' . $block['className'];
  }
  if (!empty($block['align'])) {
    $containerClassName .= ' align' . $block['align'];
  }
  if (!empty($block['align_content'])) {
    $containerClassName .= ' is-vertically-aligned-' . $block['align_content'];
  }

  if (!empty($block['backgroundColor']) && !$is_preview) {
    $containerClassName .= ' has-background has-' . $block['backgroundColor'] . '-background-color';
  }

  if (!empty($block['textColor']) && !$is_preview) {
    $containerClassName .= ' has-text-color has-' . $block['textColor'] . '-color';
  }

  if ($is_preview) {
    $containerClassName .= ' is-preview';
  }

  foreach (['mobile', 'tablet', 'desktop'] as $type) {

    foreach (['top', 'bottom'] as $position) {
      $gap = get_field($type . '_block_gap_' . $position);
      if ($gap != null)
        $containerClassName .= " has-{$type}-{$gap}-margin-{$position}";
    }
  }

  $containerSizeClassName = getLayoutContainerSizeClassName();
  if ($containerSizeClassName)
    $containerClassName .= " " . getLayoutContainerSizeClassName();

  return [$baseClassName, $containerClassName];
}
