import './style.scss'

function init(zone: HTMLElement = document.body) {
  zone
    .querySelectorAll<HTMLElement>('.lb-review-card:not(.lb-review-card--initiated)')
    .forEach((el) => {
      const btns = el.querySelectorAll<HTMLButtonElement>(
        '.lb-review-card__read-more, .lb-review-card__read-less'
      )
      btns.forEach((btn) => btn.addEventListener('click', toggle))

      el.classList.add('lb-review-card--initiated')
    })
}

function toggle(e: MouseEvent) {
  const container = (e.target as HTMLElement).closest('.lb-review-card')
  container.classList.toggle('lb-review-card--mr_closed')
  container.classList.toggle('lb-review-card--mr_expanded')
}

init()
;(window as any).CasinoCardsInit = init
