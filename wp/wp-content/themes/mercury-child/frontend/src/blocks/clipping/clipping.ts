import './clipping.scss'

function init() {
  const els = document.querySelectorAll('.lb-clipping')

  els.forEach((container) => {
    const textContainer = container.querySelector<HTMLElement>('.lb-clipping__content')
    const showBtn = container.querySelector<HTMLElement>('.lb-clipping__toggle--more')
    const lessBtn = container.querySelector<HTMLElement>('.lb-clipping__toggle--less')

    showBtn.addEventListener('click', () => {
      container.classList.remove('lb-clipping--hidden')
      container.classList.add('lb-clipping--showed')
    })

    lessBtn.addEventListener('click', () => {
      container.classList.add('lb-clipping--hidden')
      container.classList.remove('lb-clipping--showed')
    })
    window.addEventListener('resize', () => showReadMoreButton(textContainer))

    showReadMoreButton(textContainer)
  })
}

function showReadMoreButton(element: HTMLElement) {
  if (
    element.offsetHeight < element.scrollHeight ||
    element.offsetWidth < element.scrollWidth
  ) {
    element.closest('.lb-clipping').classList.add('lb-clipping--hidden')
  } else {
    element
      .closest('.lb-clipping')
      .classList.remove('lb-clipping--hidden', 'lb-clipping--showed')
  }
}

init()
