import './promo-button.scss'
//import { LbTooltip } from '@/shared/scripts/components/tooltip'

function init(container: HTMLElement = document.body) {
  const btns = container.querySelectorAll<HTMLButtonElement>(
    '.lb-promo-button:not(.lb-button--initiated)'
  )

  btns.forEach((btn) => {
    btn.addEventListener('click', () => onCopy(btn))

    btn.classList.add('lb-button--initiated')
  })
}

async function onCopy(btn: HTMLElement) {
  if (!btn) return

  try {
    if (navigator?.clipboard?.writeText) {
      await navigator.clipboard.writeText(btn.dataset.code)
    }

    if (!btn) return
    const txtEl = btn.querySelector<HTMLElement>('.lb-button__content')

    txtEl.innerHTML = btn.dataset.text

    setTimeout(() => {
      txtEl.innerHTML = btn.dataset.code
    }, 2000)
  } catch (err) {
    console.error(err)
  }
}

;(window as any).initPromoButton = init

/*async function onCopy(btn: HTMLElement) {
  if (!btn) return

  try {
    if (navigator?.clipboard?.writeText) {
      await navigator.clipboard.writeText(btn.dataset.code)
    }

    const tp = document.getElementById(btn.getAttribute('aria-describedby'))

    if (!tp) return

    const tooltip = await new LbTooltip(btn, tp, {
      placement: 'bottom',
      offset: 2,
    })

    tooltip.show()

    setTimeout(() => {
      tooltip.hide()
    }, 2000)
  } catch (err) {
    console.error(err)
  }
}*/

init()
