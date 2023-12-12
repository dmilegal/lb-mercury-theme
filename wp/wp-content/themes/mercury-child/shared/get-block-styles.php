<?

/**
 * @return @return string[] Return base class and container class of the block
 */
function getBlockStyles($block, $is_preview = false)
{

  $styles = "";
  $tagStyle = "";

  if ($is_preview) return [$styles, $tagStyle];

  if (!empty($block['style'])) {
    $style = $block['style'];
    if (!empty($style['spacing'])) {
      $spacing = $style['spacing'];

      if (!empty($spacing['margin'])) {
        foreach ($spacing['margin'] as $key => $value) {
          $styles .= 'margin-' . $key . ': ' . $value . ';';
        }
      }
      if (!empty($spacing['padding'])) {
        foreach ($spacing['margin'] as $key => $value) {
          $styles .= 'padding-' . $key . ': ' . $value . ';';
        }
      }
    }
  }

  if ($styles) {
    $tagStyle = 'style="' . $styles . '"';
  }

  return [$styles, $tagStyle];
}
