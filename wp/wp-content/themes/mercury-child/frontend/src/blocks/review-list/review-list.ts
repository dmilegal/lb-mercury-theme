import qs from 'qs'
import { API_URL } from '@/shared/scripts/consts'
import './review-list.scss'
import { Modal } from '@/shared/scripts/components/modal'
import Swiper from 'swiper'
import { Navigation } from 'swiper/modules'

let signal = null
interface ResponseData {
  html: string
  message: string
  page: number
  total_pages: number
}

function init() {
  const btns = document.querySelectorAll<HTMLButtonElement>('.lb-review-list__load-more')
  const filterForm = document.querySelectorAll<HTMLFormElement>(
    '.lb-review-list__cat-filter'
  )
  const listEls = document.querySelectorAll<HTMLButtonElement>('.lb-review-list')

  btns.forEach((btn) => {
    btn.addEventListener('click', () => {
      const container = btn.closest<HTMLElement>('.lb-review-list')
      nextPaga(container)
    })
  })

  filterForm.forEach((form) => {
    form.addEventListener('change', () => {
      const container = form.closest<HTMLElement>('.lb-review-list')
      filter(container)
    })
  })

  listEls.forEach((el) => {
    el.addEventListener('click', (e) => {
      if ((e.target as HTMLElement).closest('button.lb-review-card__play'))
        triggetRefModal(el)
    })

    initCatFilterSlider(el)
  })
}

function nextPaga(container: HTMLElement) {
  const btn = container.querySelector<HTMLButtonElement>('.lb-review-list__load-more')
  triggerLoad(container, (+btn.dataset.currentPage || 1) + 1)
}

function filter(container: HTMLElement) {
  triggerLoad(container, 1)
}

async function triggerLoad(container: HTMLElement, page = 1) {
  const btn = container.querySelector<HTMLButtonElement>('.lb-review-list__load-more')
  const preparedQuery = prepareQuery(
    btn.dataset.query,
    {
      paged: page,
    },
    getFilterData(container)
  )
  let continueLoad = false

  btn.classList.add('lb-button--pending')
  container.classList.add('lb-review-list--loading')
  btn.disabled = true

  try {
    const data = await load(preparedQuery)
    render(container, data.html, data.page, data.total_pages)
  } catch (error) {
    if (error.name === 'AbortError') continueLoad = true

    console.error(error)
  }

  if (continueLoad) return

  container.classList.remove('lb-review-list--loading')
  btn.classList.remove('lb-button--pending')
  btn.disabled = false
}

async function load(query?: Record<string, unknown>) {
  signal?.abort()
  signal = new AbortController()
  const res = await fetch(`${API_URL}aces/v1/html/reviews`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(query),
    signal: signal.signal,
  })
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

  return params //qs.stringify(params)
}

function render(container: HTMLElement, html: string, page: number, total_pages: number) {
  const listEl = container.querySelector<HTMLElement>('.lb-review-list__list')
  const btn = container.querySelector<HTMLElement>('.lb-review-list__load-more')

  if (page == 1) {
    listEl.innerHTML = ''
  }
  listEl.insertAdjacentHTML('beforeend', html)
  ;(window as any).CasinoCardsInit(listEl)
  ;(window as any).initPromoButton(listEl)

  btn.dataset.currentPage = page + ''
  btn.dataset.totalPages = total_pages + ''

  if (+btn.dataset.currentPage >= +btn.dataset.totalPages) btn.style.display = 'none'
  else btn.style.display = ''
}

async function triggetRefModal(container: HTMLElement) {
  const modalEl = document.querySelector<HTMLElement>('#ref-review-list')
  if (!container || !modalEl) return

  const list = container.dataset.refItems
  const type = container.dataset.type

  const config = JSON.parse(container.dataset.refConfig)

  if (!list || !JSON.parse(list).length) return

  const modal = new Modal(modalEl)

  if (config.title) modal.setTitle(config.title)
  if (config.subtitle) modal.setSubtitle(config.subtitle)
  if (config.hideTitle) modal.removeTitle()
  if (config.hideSubtitle) modal.removeSubtitle()

  modal.openModal()

  const listIn = JSON.parse(list)

  const limit = config.limit ?? -1

  const data = await load(
    prepareQuery(
      '',
      {
        post__in: listIn,
        post_type: type,
        post_status: ['publish', 'draft', 'private'],
        posts_per_page: limit,
        orderby: limit != -1 && listIn.length > limit ? 'rand' : '',
      },
      {
        card_variant: 'compact-bet',
      }
    )
  )

  modal.setBody(data.html, '.lb-review-list__list')
  window.initCompactReviewBonus(modal.modal)
}

function getFilterData(container: HTMLElement) {
  const form = container.querySelector<HTMLFormElement>('.lb-review-list__cat-filter')

  if (!form) return {}

  const filterData = Object.fromEntries(new FormData(form))

  return filterData
}

function initCatFilterSlider(container: HTMLElement) {
  const catContainer = container.querySelector<HTMLElement>(
    '.lb-review-list__cat-filter > .swiper'
  )
  if (!catContainer) return
  const nextEl = container.querySelector<HTMLButtonElement>(
    '.lb-review-list__cat-filter-nav-next'
  )
  const prevEl = container.querySelector<HTMLButtonElement>(
    '.lb-review-list__cat-filter-nav-prev'
  )

  new Swiper(catContainer, {
    slidesPerView: 'auto',
    spaceBetween: 0,
    modules: [Navigation],
    navigation: {
      nextEl: nextEl,
      prevEl: prevEl,
    },
  })
}

init()
