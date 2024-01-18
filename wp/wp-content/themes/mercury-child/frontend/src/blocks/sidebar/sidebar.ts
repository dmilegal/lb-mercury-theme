import './sidebar.scss'

document.querySelectorAll('.lb-sidebar__block--collapse').forEach((container) => {
  const btnEl = container.querySelector('.lb-sidebar__block-title')

  btnEl.addEventListener('click', () => {
    if (container.classList.contains('lb-sidebar__block--state_opened')) {
      container.classList.remove('lb-sidebar__block--state_opened')
      container.classList.add('lb-sidebar__block--state_closed')
    } else {
      container.classList.remove('lb-sidebar__block--state_closed')
      container.classList.add('lb-sidebar__block--state_opened')
    }
  })
})
