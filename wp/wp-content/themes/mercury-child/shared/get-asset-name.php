<?
function getAssetName($path) {
  $string = explode('-mdl', (explode('mdl-', $path)[1]))[0];
  return (!!$string ? $string : pathinfo($path, PATHINFO_FILENAME));
}