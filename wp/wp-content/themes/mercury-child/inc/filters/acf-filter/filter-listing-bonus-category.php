<?
add_filter('acf/fields/taxonomy/query/key=field_668d9b8bce1ad_block', 'filter_bonus_category_terms', 10, 3);
add_filter('acf/fields/taxonomy/query/key=field_668d9b8bce1ad_tpl', 'filter_bonus_category_terms', 10, 3);

function filter_bonus_category_terms($args, $field, $post_id)
{
	$selected_bonus = null;

	// Получаем параметр 'bonus' из AJAX-запроса
	if (isset($_POST['bonus'])) {
		$selected_bonus = sanitize_text_field($_POST['bonus']);
	}

	// Если бонус выбран
	if ($selected_bonus) {
		// Получаем связанные категории бонусов
		$terms = wp_get_post_terms($selected_bonus, 'bonus-category', array('fields' => 'ids'));
    
		if (!is_wp_error($terms) && !empty($terms)) {
			// Устанавливаем аргументы запроса для фильтрации терминов
			$args['include'] = $terms;
		} else {
			// Если терминов нет, предотвращаем отображение любых терминов
			$args['include'] = array(-1);
		}
	} else {
		// $args['include'] = array(0);
	}

	return $args;
}
