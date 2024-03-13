import './style.scss'

function init(zone: HTMLElement = document.body) {
  zone
    .querySelectorAll<HTMLElement>(
      '.lb-compact-casino-bonus-card:not(.lb-compact-casino-bonus-card--initiated)'
    )
    .forEach((el) => {
      initTcMore(el)

      el.classList.add('lb-compact-casino-bonus-card--initiated')
    })
}

function initTcMore(el: HTMLElement) {
  const btn = el.querySelector<HTMLButtonElement>(
    '.lb-compact-casino-bonus-card__tc-more'
  )

  if (!btn) return

  btn.addEventListener('click', show)

  const content = el.querySelector('.lb-compact-casino-bonus-card__tc-content')
  if (content.scrollHeight > content.clientHeight) btn.style.display = null
}

function show(e: MouseEvent) {
  const container = (e.target as HTMLElement).closest(
    '.lb-compact-casino-bonus-card__tc--truncated'
  )
  container.classList.remove('lb-compact-casino-bonus-card__tc--truncated')
  ;(e.target as HTMLElement).style.display = 'none'
}

init()
