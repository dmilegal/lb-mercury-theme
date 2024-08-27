<?
function getAssetName($path) {
  //$string = str_contains($path, '-mdl') && str_contains($path, 'mdl-') ?  explode('-mdl', explode('mdl-', $path)[1])[0] : pathinfo($path, PATHINFO_FILENAME);
  $string = str_contains($path, '-chk') && str_contains($path, 'chk-') ? 'chk-' . explode('-chk', explode('chk-', $path)[1])[0] : pathinfo($path, PATHINFO_FILENAME);
  return $string;
}