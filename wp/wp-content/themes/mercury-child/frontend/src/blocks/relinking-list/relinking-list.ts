import { store, getElement, getContext } from '@wordpress/interactivity'
import './relinking-list.scss'

export interface RelinkingListContextProps {
  isLimited: boolean
}

store('relinkingList', {
  actions: {
    showMore() {
      const context = getContext<RelinkingListContextProps>()
      context.isLimited = false
      const el = getElement()

      el.ref
        ?.closest('[data-wp-interactive="relinkingList"]')
        .querySelectorAll<HTMLElement>('.lb-relinking-item[hidden]')
        .forEach((el) => {
          el.hidden = false
        })
    },
  },
})
