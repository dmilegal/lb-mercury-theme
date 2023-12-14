<?
function splitColor($colorName) {
  $list = explode('-', $colorName);
  $offset = is_numeric(end($list)) ? (int) end($list) : -1;

  if ($offset == -1)
    return [$colorName, null];

  array_pop($list);

  return [implode('-', $list), $offset];
}

function getContrastTextColor($colorName)
{
  $list = explode('-', $colorName);
  $offset = is_numeric(end($list)) ? (int) end($list) : -1;

  if ($offset > 200) {
    return 'white';
  }

  if ($offset === -1)  {
    return $colorName;
  }

  array_pop($list);
  array_push($list, 700);

  return implode('-', $list);
}
