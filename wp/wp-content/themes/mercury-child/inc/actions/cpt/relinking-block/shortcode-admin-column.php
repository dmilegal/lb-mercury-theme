<?
// Добавляем новую колонку в админку
function add_relinking_block_columns($columns) {
  $columns['relinking_block_shortcode'] = __('Shortcode', 'textdomain');
  return $columns;
}
add_filter('manage_relinking_block_posts_columns', 'add_relinking_block_columns');

// Заполняем нашу новую колонку контентом
function relinking_block_column_content($column, $post_id) {
  if ($column == 'relinking_block_shortcode') {
      echo '[relinking_block id="' . $post_id . '"]';
  }
}
add_action('manage_relinking_block_posts_custom_column', 'relinking_block_column_content', 10, 2);

// Сделать колонку Shortcode копируемой
function relinking_block_shortcode_column_css() {
  echo '<style>
      .column-relinking_block_shortcode { width: 20%; }
      .column-relinking_block_shortcode input { 
          width: 100%; 
          border: none; 
          background: transparent;
          box-shadow: none;
          cursor: pointer;
      }
  </style>';
}
add_action('admin_head', 'relinking_block_shortcode_column_css');

// Добавить поле для копирования шорткода при клике
function relinking_block_shortcode_column_content($column, $post_id) {
  if ($column == 'relinking_block_shortcode') {
      $shortcode = '[relinking_block id="' . $post_id . '"]';
      echo '<input type="text" value="' . esc_attr($shortcode) . '" readonly onclick="this.select();document.execCommand(\'copy\');alert(\'Shortcode copied!\');">';
  }
}

// Перерегистрируем действие с новым контентом
remove_action('manage_relinking_block_posts_custom_column', 'relinking_block_column_content', 10, 2);
add_action('manage_relinking_block_posts_custom_column', 'relinking_block_shortcode_column_content', 10, 2);