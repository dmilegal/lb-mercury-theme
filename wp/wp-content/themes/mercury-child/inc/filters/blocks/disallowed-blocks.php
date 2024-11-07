<?
function lb_disallowed_block_types_from_json( $allowed_blocks ) {
  // Путь к JSON файлу в директории активной темы или дочерней темы
  $json_file_path = get_stylesheet_directory() . '/disallowed-blocks.json';
 
  // Проверяем, существует ли файл и доступен ли для чтения
  if ( is_readable( $json_file_path ) ) {
      // Читаем содержимое файла
      $json_data = file_get_contents( $json_file_path );
      
      // Декодируем JSON с проверкой ошибок
      $blocks = json_decode( $json_data, true );
 
      if ( json_last_error() === JSON_ERROR_NONE ) {
          // Проверяем, что ключ 'disallowed_blocks' существует и является массивом
          if ( isset( $blocks['disallowed_blocks'] ) && is_array( $blocks['disallowed_blocks'] ) ) {
              // Получаем все зарегистрированные блоки
              $all_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();
              $all_block_names = array_keys( $all_blocks );

              // Исключаем запрещённые блоки
              $allowed_blocks = array_diff( $all_block_names, $blocks['disallowed_blocks'] );

              return array_values($allowed_blocks);
          } else {
              // Логируем ошибку при некорректном формате данных
              error_log( 'Ошибка: Ключ "disallowed_blocks" отсутствует или не является массивом в disallowed-blocks.json.' );
          }
      } else {
          // Логируем ошибку при некорректном JSON
          error_log( 'Ошибка декодирования JSON в disallowed-blocks.json: ' . json_last_error_msg() );
      }
  } else {
      // Логируем ошибку при недоступности файла
      // error_log( 'Ошибка: Файл disallowed-blocks.json не найден или недоступен для чтения.' );
  }

  // В случае ошибки возвращаем все блоки по умолчанию
  return $allowed_blocks;
}
//add_filter( 'allowed_block_types', 'lb_disallowed_block_types_from_json', priority: 9999 );
add_filter( 'allowed_block_types_all', 'lb_disallowed_block_types_from_json', priority: 9999 );