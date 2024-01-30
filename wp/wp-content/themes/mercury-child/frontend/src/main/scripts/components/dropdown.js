;(document.querySelectorAll('.lb-dropdown') ?? []).forEach((container) => {
  const btnEl = container.querySelector('.lb-dropdown__header')

  btnEl.addEventListener('click', () => {
    if (container.classList.contains('lb-dropdown--state_opened')) {
      container.classList.remove('lb-dropdown--state_opened')
      container.classList.add('lb-dropdown--state_closed')
    } else {
      container.classList.remove('lb-dropdown--state_closed')
      container.classList.add('lb-dropdown--state_opened')
    }
  })
})
