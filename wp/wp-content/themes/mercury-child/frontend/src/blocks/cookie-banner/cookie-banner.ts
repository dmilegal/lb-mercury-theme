import './cookie-banner.scss'
;(function () {
  const body = document.body
  const content = document.getElementById('cmplz-cookiebanner-container') as HTMLElement
  const list = ['age-restriction']

  if (!content) return

  function checkAgeRestriction() {
    if (list.some((cl) => body.classList.contains(cl))) {
      // Если класс есть, элемент должен быть скрыт дольше
      body.classList.add('cb-hide')

      // Начинаем наблюдение за body
      observer.observe(body, observerOptions)
    }
  }

  // Обработчик для наблюдения за изменениями классов на body
  const observer = new MutationObserver(() => {
    if (!list.some((cl) => body.classList.contains(cl))) {
      // Если классы удалены, запускаем анимацию через 4с
      setTimeout(() => {
        body.classList.remove('cb-hide')
      }, 4000)

      observer.disconnect()
    }
  })

  // Опции для наблюдения за изменениями атрибутов (классов)
  const observerOptions = {
    attributes: true,
    attributeFilter: ['class'],
  }

  // Проверяем начальное состояние
  checkAgeRestriction()
})()
