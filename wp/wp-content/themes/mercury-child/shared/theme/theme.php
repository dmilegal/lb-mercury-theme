<?
namespace Shared\Theme;

class LbThemeService
{
  static function getData()
  {
    $settings = \WP_Theme_JSON_Resolver::get_theme_data();
    return $settings->get_data();
  }
  static function getMainGroupColor()
  {
    $data = self::getData();
    return $data['settings']['color']['mainColorGroup'] ?? 'primary';
  }
}
