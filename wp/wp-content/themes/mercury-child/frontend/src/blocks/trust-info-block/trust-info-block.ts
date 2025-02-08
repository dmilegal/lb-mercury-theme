import './trust-info-block.scss'

function initCollapsableInfoBlock() {
  const infoBlocks = document.querySelectorAll<HTMLElement>('.lb-trust-info-block')
  infoBlocks.forEach((infoBlock) => {
    const trigger = infoBlock.querySelector<HTMLElement>('.lb-trust-info-block__header')
    const icos = infoBlock.querySelectorAll<HTMLElement>(
      '.lb-trust-info-block__ico-plus, .lb-trust-info-block__ico-minus'
    )
    if (trigger) {
      trigger.addEventListener('click', () => {
        if ([...icos].some((ico) => ico.clientHeight)) {
          infoBlock.classList.toggle('lb-trust-info-block--closed')
        }
      })
    }
  })
}

initCollapsableInfoBlock()
