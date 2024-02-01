import './share-links.scss'

async function init() {
  const linkBtns = document.querySelectorAll<HTMLAnchorElement>('.lb-share-links__copy')
  if (!linkBtns.length) return

  linkBtns.forEach((linkBtn) => {
    let copiedDelay = false

    linkBtn.addEventListener('click', async (e) => {
      e.preventDefault()

      if (copiedDelay) return
      copiedDelay = true

      try {
        if (navigator?.clipboard?.writeText) {
          await navigator.clipboard.writeText(linkBtn.dataset.href)
        }

        const prevHtml = linkBtn.innerHTML

        linkBtn.innerHTML = prevHtml.replace('icon-link', 'icon-check')

        setTimeout(() => {
          linkBtn.innerHTML = prevHtml
          copiedDelay = false
        }, 1500)
      } catch (err) {
        console.error(err)
      }
    })
  })
}

init()
