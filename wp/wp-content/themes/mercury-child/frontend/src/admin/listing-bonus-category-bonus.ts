declare const acf: any
declare const jQuery: any
;(function ($) {
  if (!acf) return
  // Добавляем фильтр для модификации данных AJAX-запроса select2
  acf.add_filter('select2_ajax_data', function (data, args, $input, field, instance) {
    // Проверяем, что это поле 'bonus_category' (замените на ваш ключ поля)
    if (
      instance.data?.field?.get('key') === 'field_668d9b8bce1ad_block' ||
      instance.data?.field?.get('key') === 'field_668d9b8bce1ad_tpl'
    ) {
      let bonusEls = acf.findFields({
        key: 'field_670ea17e4269d_block',
        sibling: field,
      })

      if (!bonusEls.length) {
        bonusEls = acf.findFields({
          key: 'field_670ea17e4269d_tpl',
          sibling: field,
        })
      }

      if (!bonusEls.length) return

      // Получаем значение из поля 'bonus' (замените на ваш ключ поля)
      var bonusField = $(bonusEls[0]).data('acf')

      if (!bonusField) return

      var bonusValue = bonusField.val()
      // Добавляем параметр 'bonus' в данные AJAX-запроса
      data.bonus = bonusValue || ''
    }

    // Возвращаем измененные данные
    return data
  })
})(jQuery as any)
