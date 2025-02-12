<?
class TabsOfCharacteristics {
  static function mixSettingsChars($globalCharsSettings = [], $localCharsSettings = []) {

    $normSettings = self::normalizeSettingsChars($globalCharsSettings);
    return $normSettings;
  }

  private static function normalizeSettingsChars($globalCharsSettings) {
    return array_map(function ($setting) {

      $normChars = match ($setting['tab_type']) {
         'basic_info'=> array_map(fn($char) => $char['characteristic_basic'], $setting['list_of_chars']),
         'pag_info' => array_map(fn($char) => $char['characteristic_pg'], $setting['list_of_chars']),
         'other_info' => array_map(fn($char) => $char['characteristic_other'], $setting['list_of_chars']),
         default => []
      };

      return [
        'title' => $setting['tab_title'],
        'chars' => $normChars
      ];

    }, $globalCharsSettings);
  }
}