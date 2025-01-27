import './bottom-brand-bonus.scss'

function bottomBrandBonusInit() {
  const bottomBrandBonus = document.querySelector<HTMLElement>('.lb-bottom-brand-bonus')
  const lbPromoBonus = document.querySelector<HTMLElement>('.lb-promo-bonus')

  if (bottomBrandBonus && lbPromoBonus) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            bottomBrandBonus.style.visibility = ''
          } else {
            bottomBrandBonus.style.visibility = 'visible'
          }
        })
      },
      {
        threshold: 0,
      }
    )

    observer.observe(lbPromoBonus)
  }
}

bottomBrandBonusInit()
