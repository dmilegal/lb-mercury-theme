import { store, getElement, getContext } from '@wordpress/interactivity'
import './relinking-list.scss'
import Swiper from 'swiper'
import { Navigation } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/navigation'

export interface RelinkingListContextProps {
  isLimited: boolean
}

store('relinkingList', {
  callbacks: {
    initSlider() {
      const { ref } = getElement()

      const container = ref.querySelector<HTMLElement>('.lb-relinking-list__slider')
      const nextEl = ref.querySelector<HTMLElement>('.lb-relinking-list__slider-next')
      const prevEl = ref.querySelector<HTMLElement>('.lb-relinking-list__slider-prev')
      console.log(nextEl, prevEl)
      new Swiper(container, {
        slidesPerView: 'auto',
        modules: [Navigation],
        // Navigation arrows
        navigation: {
          nextEl: nextEl,
          prevEl: prevEl,
        },
        ...(ref.classList.contains('lb-relinking-list--mod_only-mobile-slider')
          ? {
              breakpoints: {
                // when window width is >= 320px
                576: {
                  enabled: false,
                },
              },
            }
          : {}),
      })
    },
  },
  actions: {
    showMore() {
      const context = getContext<RelinkingListContextProps>()
      context.isLimited = false
      const el = getElement()

      el.ref
        ?.closest('[data-wp-interactive="relinkingList"]')
        .querySelectorAll<HTMLElement>('.lb-relinking-item')
        .forEach((el) => {
          el.hidden = false
          el.style.display = ''
        })
    },
  },
})
