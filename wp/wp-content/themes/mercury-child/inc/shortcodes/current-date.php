<?
function lb_current_date_shortcode_handler($atts)
{
  $atts = shortcode_atts(
    array(
      'format' => 'F Y', // Формат по умолчанию: Полное имя месяца и год (например, January 2024)
      'capitalize' => ''
    ),
    $atts,
    'current_date'
  );

  // Получаем текущие дату и время в соответствии с локалью сайта
  $current_date = current_time('timestamp');
  $formatted_date = date_i18n($atts['format'], $current_date);
  
  if (strtolower($atts['capitalize']) === 'false') {
    $formatted_date = lcfirst($formatted_date); // Переводим первую букву в нижний регистр
  } elseif (strtolower($atts['capitalize']) === 'true') {
    $formatted_date = ucfirst($formatted_date); // Переводим первую букву в верхний регистр
  }

  return $formatted_date;
}
add_shortcode('current_date', 'lb_current_date_shortcode_handler');
