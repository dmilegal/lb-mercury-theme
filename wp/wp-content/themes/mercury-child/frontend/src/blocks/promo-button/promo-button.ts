import './promo-button.scss'
import { LbTooltip } from '@/shared/scripts/components/tooltip'

function init() {
  const btns = document.querySelectorAll<HTMLButtonElement>('.lb-promo-button')

  btns.forEach((btn) => {
    btn.addEventListener('click', () => onCopy(btn))
  })
}

async function onCopy(btn: HTMLElement) {
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
}

init()
