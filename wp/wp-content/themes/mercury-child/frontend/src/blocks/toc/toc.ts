import './toc.scss'

document.querySelectorAll<HTMLAnchorElement>('.ez-toc-link').forEach((el) => {
  el.addEventListener('click', (e) => {
    e.preventDefault()
    const elementWithText = [
      ...document.querySelectorAll<HTMLElement>('h1,h2,h3,h4,h5,h6'),
    ].find((sEl) => sEl.textContent.includes(el.textContent))
    if (!elementWithText) return

    const headerEl = document.querySelector('.lb-header')
    const adminBarEl = document.querySelector('#wpadminbar')
    console.log(headerEl?.clientHeight || 0, adminBarEl?.clientHeight || 0)
    window.scrollTo({
      top:
        elementWithText.offsetTop -
        (headerEl?.clientHeight || 0) -
        (adminBarEl?.clientHeight || 0),
      behavior: 'smooth',
    })
  })
})
