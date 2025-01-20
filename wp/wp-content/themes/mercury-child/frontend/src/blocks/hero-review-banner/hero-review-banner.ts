import { LbTooltip } from '@/shared/scripts/components/tooltip'
import './hero-review-banner.scss'
import { flip, shift } from '@floating-ui/dom'

document
  .querySelectorAll<HTMLButtonElement>('.lb-hero-review-banner__license-tp')
  .forEach(async (btn) => {
    const tp = btn.previousElementSibling as HTMLElement
    const tooltip = await new LbTooltip(btn, tp, {
      placement: 'top',
      offset: 6,
      middleware: [flip(), shift()],
      enableBind: true,
      closeOnClickOutside: true,
    })
  })
