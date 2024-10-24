<?

function add_custom_ez_toc_class($classes)
{
  // Добавляем ваш кастомный класс к существующим классам
  $classes .= ' not-prose';

  return $classes;
}
add_filter('ez_toc_get_option_css_container_class', 'add_custom_ez_toc_class');

function modify_ez_toc_shortcode_output($output)
{
  global $is_in_widget;

  // Регулярное выражение для поиска блока с иконками
  $pattern = '/<span class="ez-toc-cssicon">.*?<\/span>/s';

  // Ваш кастомный HTML для иконок
  $replacement = '
          <i class="icon-minus-circle ez-toc-icon-opened"></i>
          <i class="icon-plus-circle ez-toc-icon-closed"></i>
      ';

  // Заменяем стандартные иконки на кастомные
  $output = preg_replace($pattern, $replacement, $output);

  $classes = "lb-toc";

  if ($is_in_widget) {
    $classes .= " lb-toc--variant_default";
  } else {
    $classes .= " lb-toc--variant_contained";
  }

  $output = '<div class="' . $classes . '">' . $output . '</div>';

  return $output;
}

add_filter('eztoc_autoinsert_final_toc_html', 'modify_ez_toc_shortcode_output', 20, 1);
//add_filter('eztoc_shortcode_final_toc_html', 'modify_ez_toc_shortcode_output', 20, 1);
