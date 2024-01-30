import './scroll-to-top.scss'

function init() {
  const container = document.querySelector<HTMLElement>('.lb-scroll-to-top')
  const btn = document.querySelector<HTMLButtonElement>('.lb-scroll-to-top .lb-button')

  if (!btn) return

  btn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth',
    })
  })

  window.addEventListener('scroll', handle)

  function handle() {
    const pageOffset = document.documentElement.scrollTop || document.body.scrollTop

    if (pageOffset >= 1000) {
      container.classList.remove('lb-scroll-to-top--hidden')
    } else {
      container.classList.add('lb-scroll-to-top--hidden')
    }
  }

  handle()
}

init()
