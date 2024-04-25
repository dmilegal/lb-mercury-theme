import './casino-list.scss'

interface ResponseData {
  html: string
  message: string
}

function init() {
  const btns = document.querySelectorAll<HTMLButtonElement>('.lb-casino-list__load-more')

  btns.forEach((btn) => {
    btn.addEventListener('click', triggetLoad)
  })
}

async function triggetLoad(e: MouseEvent) {
  const btn = e.currentTarget as HTMLButtonElement
  const container = btn.closest<HTMLElement>('.lb-casino-list')

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
  const res = await fetch(`/wp-json/aces/v1/html/reviews?${query || ''}`)
  const data = (await res.json()) as ResponseData
  return data
}

function prepareQuery(query: string, data?: { paged?: number | string }) {
  const params = new URLSearchParams(query)

  Object.keys(data || {}).forEach((key) => {
    params.set(`query[${key}]`, data[key] + '')
  })

  return params.toString()
}

function render(html: string, container: HTMLElement) {
  const listEl = container.querySelector<HTMLElement>('.lb-casino-list__list')
  const btn = container.querySelector<HTMLElement>('.lb-casino-list__load-more')

  listEl.insertAdjacentHTML('beforeend', html)
  ;(window as any).CasinoCardsInit(listEl)
  ;(window as any).initPromoButton(listEl)

  btn.dataset.currentPage = (+btn.dataset.currentPage || 1) + 1 + ''

  if (+btn.dataset.currentPage >= +btn.dataset.totalPages) btn.style.display = 'none'
}

init()
