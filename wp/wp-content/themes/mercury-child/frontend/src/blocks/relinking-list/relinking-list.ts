import { store, getElement, getContext } from '@wordpress/interactivity'
import './relinking-list.scss'

export interface RelinkingListContextProps {
  listTail: any[]
  list: any[]
  limit: number
  isLimited: boolean
}

store('relinkingList', {
  actions: {
    showMore() {
      const context = getContext<RelinkingListContextProps>()
      context.isLimited = false
      context.list = [...context.list, ...context.listTail]
    },
  },
})
