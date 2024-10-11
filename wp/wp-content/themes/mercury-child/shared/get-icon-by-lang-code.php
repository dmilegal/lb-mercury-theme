<?
function getIconByLangCode($langCode)
{
  $ico = "";
  if (!$langCode) return  $ico;
  if (file_exists(get_stylesheet_directory() . '/img/flags/round/' . strtolower(array_reverse(explode("_", $langCode))[0]) . '.svg')) {
    $ico = get_stylesheet_directory_uri() . '/img/flags/round/' . strtolower(array_reverse(explode("_", $langCode))[0]) . '.svg';
  } elseif (function_exists('get_msls_flag_url')) {
    $ico = get_msls_flag_url($langCode);
  }

  return $ico;
}
