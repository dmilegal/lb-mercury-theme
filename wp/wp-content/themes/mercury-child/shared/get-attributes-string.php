<?
function getAttributesString($attributes)
{
  $output = '';

  foreach ($attributes as $name => $value) {
    if (is_bool($value)) {
      if ($value) $output .= $name . ' ';
    } if ($name == 'data') {
      foreach ($value as $k => $v) {
        $output .= sprintf('data-%s="%s"', $k, $v);
      }
        
    } else {
      $output .= sprintf('%s="%s"', $name, $value);
    }
  }

  return $output;
}
