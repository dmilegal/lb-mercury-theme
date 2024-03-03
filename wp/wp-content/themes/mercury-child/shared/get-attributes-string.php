<?
function getAttributesString($attributes)
{
  $output = '';

  foreach ($attributes as $name => $value) {
    if (is_bool($value)) {
      if ($value) $output .= $name . ' ';
    } elseif ($name == 'data') {
      foreach ($value as $k => $v) {
        $output .= sprintf('data-%s="%s"', $k, $v);
      }
    } elseif ($name == 'aria') {
      foreach ($value as $k => $v) {
        $output .= sprintf('aria-%s="%s"', $k, $v);
      }
    } else {
      if ($value)
        $output .= sprintf('%s="%s"', $name, $value);
    }
  }

  return $output;
}
