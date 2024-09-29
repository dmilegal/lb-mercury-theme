import qs from 'qs'
import { API_URL } from '@/shared/scripts/consts'
import './review-list.scss'
import { Modal } from '@/shared/scripts/components/modal'

interface ResponseData {
  html: string
  message: string
}

function init() {
  const btns = document.querySelectorAll<HTMLButtonElement>('.lb-review-list__load-more')
  const listEls = document.querySelectorAll<HTMLButtonElement>('.lb-review-list')

  btns.forEach((btn) => {
    btn.addEventListener('click', triggetLoad)
  })

  listEls.forEach((el) => {
    el.addEventListener('click', (e) => {
      if ((e.target as HTMLElement).closest('button.lb-review-card__play'))
        triggetRefModal(el)
    })
  })
}

async function triggetLoad(e: MouseEvent) {
  const btn = e.currentTarget as HTMLButtonElement
  const container = btn.closest<HTMLElement>('.lb-review-list')

  const preparedQuery = prepareQuery(btn.dataset.query, {
    paged: (+btn.dataset.currentPage || 1) + 1,
  })

  btn.classList.add('lb-button--pending')
  btn.disabled = true

  try {
    const data = await load(preparedQuery)
    render(data.html, container)
  } catch (error) {
    console.error(error)
  }

  btn.classList.remove('lb-button--pending')
  btn.disabled = false
}

async function load(query?: string) {
  const res = await fetch(`${API_URL}aces/v1/html/reviews?${query || ''}`)
  const data = (await res.json()) as ResponseData
  return data
}

function prepareQuery(
  query: string,
  queryData?: Record<string, any>,
  data?: Record<string, any>
) {
  let params = qs.parse(query)
  params.query = {
    ...(params as Record<any, any>)?.query,
    ...queryData,
  }
  params = {
    ...params,
    ...data,
  }

  return qs.stringify(params)
}

function render(html: string, container: HTMLElement) {
  const listEl = container.querySelector<HTMLElement>('.lb-review-list__list')
  const btn = container.querySelector<HTMLElement>('.lb-review-list__load-more')

  listEl.insertAdjacentHTML('beforeend', html)
  ;(window as any).CasinoCardsInit(listEl)
  ;(window as any).initPromoButton(listEl)

  btn.dataset.currentPage = (+btn.dataset.currentPage || 1) + 1 + ''

  if (+btn.dataset.currentPage >= +btn.dataset.totalPages) btn.style.display = 'none'
}

async function triggetRefModal(container: HTMLElement) {
  const modalEl = document.querySelector<HTMLElement>('#ref-review-list')
  if (!container || !modalEl) return

  const list = container.dataset.refItems
  const type = container.dataset.type
  if (!list || !JSON.parse(list).length) return

  const modal = new Modal(modalEl)
  modal.openModal()

  const data = await load(
    prepareQuery(
      '',
      {
        post__in: JSON.parse(list),
        post_type: type,
        posts_per_page: -1,
      },
      {
        card_variant: 'compact-bet',
      }
    )
  )

  modal.setBody(data.html, '.lb-review-list__list')
  window.initCompactReviewBonus(modal.modal)
}

init()
