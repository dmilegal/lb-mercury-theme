<?
function getAttributesString($attributes)
{
  $output = '';

  foreach ($attributes as $name => $value) {
    if (is_bool($value)) {
      if ($value) $output .= $name . ' ';
    } else {
      $output .= sprintf('%s="%s"', $name, $value);
    }
  }

  return $output;
}
