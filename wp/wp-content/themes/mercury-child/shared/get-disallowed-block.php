<?
function get_disallowed_block()
{
    $json_file_path = get_stylesheet_directory() . '/disallowed-blocks.json';
    if (is_readable($json_file_path)) {
        $json_data = file_get_contents($json_file_path);

        // Декодируем JSON с проверкой ошибок
        $blocks = json_decode($json_data, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            return $blocks;
        } else {
            // Логируем ошибку при некорректном JSON
            error_log('Ошибка декодирования JSON в disallowed-blocks.json: ' . json_last_error_msg());
        }
    }

    return null;
}