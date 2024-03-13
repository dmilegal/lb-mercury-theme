import './style.scss'

function init(zone: HTMLElement = document.body) {
  zone
    .querySelectorAll<HTMLElement>('.lb-casino-card:not(.lb-casino-card--initiated)')
    .forEach((el) => {
      const btns = el.querySelectorAll<HTMLButtonElement>(
        '.lb-casino-card__read-more, .lb-casino-card__read-less'
      )
      btns.forEach((btn) => btn.addEventListener('click', toggle))

      el.classList.add('lb-casino-card--initiated')
    })
}

function toggle(e: MouseEvent) {
  const container = (e.target as HTMLElement).closest('.lb-casino-card')
  container.classList.toggle('lb-casino-card--mr_closed')
  container.classList.toggle('lb-casino-card--mr_expanded')
}

init()
;(window as any).CasinoCardsInit = init
