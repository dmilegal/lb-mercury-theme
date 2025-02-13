<?
class TabsOfCharacteristics
{
  public static function mixSettingsChars(array $globalCharsSettings = [], array $localCharsSettings = [])
  {

    $normSettings = self::normalizeSettingsChars($globalCharsSettings);
    return $normSettings;
  }


  public static function getCharValue(string $charParam, int|string  $postId)
  {

    return match ($charParam) {
      'rtp' => '',
      'deposit_methods' => self::getDepositMethods($postId),
      'minimum_deposit' => '',
      'withdrawal' => self::getWithdrawalMethods($postId),
      'games' => self::getGames($postId),
      'number_of_slots' => '',
      'number_of_titles' => '',
      'software_providers' => self::getSoftwares($postId),
      'brand' => '',
      'owner' => self::getOwners($postId),
      'gaming_license' => self::getlicences($postId),
      'foundation_year' => self::getEstYear($postId),
      'device_suppot' => self::getSupportDevices($postId),
      'languages' => self::getLanguages($postId),
      'ssl' => '',
      'customer_support' => '',
      'laws_regulating' => '',
      'responsible_gambling_tools' => '',
      'independent_testing' => '',
      'time_out' => '',
      'encrypted_communication' => '',
      'demos_games' => ''
    };
  }

  public static function renderDepositMethods(array $depositMethods = [])
  {
    return implode(', ', array_map(fn($methid) => $methid->name, $depositMethods));
  }

  public static function renderWithdrawalMethods(array $withdrawalMethods = [])
  {
    return implode(', ', array_map(fn($methid) => $methid->name, $withdrawalMethods));
  }

  public static function renderLicences(array $licences = [])
  {
    return implode(', ', array_map(fn($license) => $license->name, $licences));
  }

  public static function renderLanguages(array $langs = [])
  {
    return implode(', ', array_map(fn($lang) => $lang->name, $langs));
  }

  public static function renderOwners(array $owners = [])
  {
    return implode(', ', array_map(fn($owner) => $owner->name, $owners));
  }

  public static function renderEstYear(array $estYears = [])
  {
    return implode(', ', array_map(fn($est) => $est->name, $estYears));
  }

  public static function renderSupportDevices(array $supportDevices = [])
  {
    return implode(', ', array_map(fn($device) => $device->name, $supportDevices));
  }

  public static function renderGames(array $games = [])
  {
    return implode(', ', array_map(fn($gameId) => get_the_title($gameId), $games));
  }

  private static function normalizeSettingsChars($globalCharsSettings)
  {
    return array_map(function ($setting) {

      $normChars = match ($setting['tab_type']) {
        'basic_info' => array_map(fn($char) => $char['characteristic_basic'], $setting['list_of_chars']),
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



  private static function getDepositMethods(string|int $postId)
  {
    $depositMethods = wp_get_object_terms($postId, 'deposit-method');

    return [
      'title' => get_option('casinos_deposit_method_title') ?: __('Deposit Methods', 'mercury-child'),
      'value' => $depositMethods,
    ];
  }

  private static function getWithdrawalMethods(string|int $postId)
  {
    $withdrawalMethods = wp_get_object_terms($postId, 'withdrawal-method');

    return [
      'title' => get_option('casinos_withdrawal_method_title') ?: __('Withdrawal Methods', 'mercury-child'),
      'value' => $withdrawalMethods,
    ];
  }

  private static function getlicences(string|int $postId)
  {
    $licences = wp_get_object_terms($postId, 'licence');

    return [
      'title' => get_option('casinos_licences_title') ?: __('Licences', 'mercury-child'),
      'value' => $licences,
    ];
  }

  private static function getLanguages(string|int $postId)
  {
    $licences = wp_get_object_terms($postId, 'casino-language');

    return [
      'title' => get_option('casinos_languages_title') ?: __('Languages', 'mercury-child'),
      'value' => $licences,
    ];
  }

  private static function getOwners(string|int $postId)
  {
    $owners = wp_get_object_terms($postId, 'owner');

    return [
      'title' => get_option('casinos_owner_title') ?: __('Owner', 'mercury-child'),
      'value' => $owners,
    ];
  }

  private static function getEstYear(string|int $postId)
  {
    $estYear = wp_get_object_terms($postId, 'casino-est');

    return [
      'title' => get_option('casinos_est_title') ?: __('Foundation year', 'mercury-child'),
      'value' => $estYear,
    ];
  }

  private static function getSoftwares(string|int $postId)
  {
    $sofwares = wp_get_object_terms($postId, 'software');

    return [
      'title' => get_option('casinos_software_title') ?: __('Software', 'mercury-child'),
      'value' => $sofwares,
    ];
  }

  private static function getSupportDevices(string|int $postId)
  {
    $supportDevices = wp_get_object_terms($postId, 'device');

    return [
      'title' => get_option('casinos_devices_title') ?: __('Devices', 'mercury-child'),
      'value' => $supportDevices,
    ];
  }

  private static function getGames(string|int $postId)
  {
    $games = get_posts(
      array(
        'fields' => 'ids',
        'posts_per_page'  => -1,
        'post_type' => 'game',
        'meta_query' => array(
          array(
            'key' => 'parent_casino',
            'value' => $postId,
            'compare' => 'LIKE'
          )
        )
      )
    );

    return [
      'title' => get_option('games_section_name') ?: __('Games', 'mercury-child'),
      'value' => $games,
    ];
  }
}
