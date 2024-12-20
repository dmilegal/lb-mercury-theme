export class Modal {
  public modal: HTMLElement
  private content: HTMLElement | null = null
  private templateContent: DocumentFragment | null = null
  private overlay: HTMLElement | null = null
  private body: HTMLElement | null = null

  constructor(element: HTMLElement | string) {
    if (typeof element === 'string') {
      const elem = document.querySelector(element)
      if (elem instanceof HTMLTemplateElement) {
        this.templateContent = elem.content.cloneNode(true) as DocumentFragment
        this.modal = this.templateContent.querySelector(
          '.lb-modal__overlay'
        ) as HTMLElement
      } else if (elem instanceof HTMLElement) {
        this.modal = elem.cloneNode(true) as HTMLElement
      } else {
        throw new Error(
          'Element not found with the provided selector or invalid HTML element.'
        )
      }
    } else if (element instanceof HTMLTemplateElement) {
      this.templateContent = element.content.cloneNode(true) as DocumentFragment
      this.modal = this.templateContent.querySelector('.lb-modal__overlay') as HTMLElement
    } else if (element instanceof HTMLElement) {
      this.modal = element.cloneNode(true) as HTMLElement
    } else {
      throw new Error('Invalid element provided')
    }

    this.setupModal()
    this.attachModal()
  }

  private setupModal() {
    document.addEventListener('keydown', this.handleEscClose)

    // Attach event listeners for closing the modal
    this.modal
      .querySelector('[data-close]')
      ?.addEventListener('click', () => this.closeModal())
    this.overlay = this.modal
    this.overlay?.addEventListener('click', (event) => {
      if (event.target === this.overlay) {
        this.closeModal()
      }
    })

    this.body = this.modal.querySelector('.lb-modal__body')
    this.content = this.modal.querySelector('.lb-modal__content')
  }

  private attachModal() {
    document.body.appendChild(this.modal)
  }

  private handleEscClose = (event: KeyboardEvent) => {
    if (event.key === 'Escape') {
      this.closeModal()
    }
  }

  public openModal() {
    this.modal.classList.remove('lb-modal--animating-out')
    this.modal.classList.add('lb-modal--active')

    setTimeout(() => {
      this.modal.classList.add('lb-modal--animating-in')
      this.modal.focus()
      this.disableScroll()
    }, 60)
  }

  public closeModal() {
    this.modal.classList.remove('lb-modal--animating-in')
    this.modal.classList.add('lb-modal--animating-out')
    this.modal.classList.remove('lb-modal--active')
    this.enableScroll()
    this.modal.addEventListener('transitionend', () => this.destroy())
  }

  public destroy() {
    this.modal.remove()
    document.removeEventListener('keydown', this.handleEscClose)
  }

  public setBody(content: string | HTMLElement, specificSelector?: string) {
    const container = specificSelector
      ? this.body.querySelector(specificSelector)
      : this.body
    container.innerHTML = ''
    if (typeof content === 'string') {
      container.innerHTML = content
    } else {
      container.appendChild(content)
    }
  }

  public setTitle(title: string) {
    const titleEl = this.content.querySelector<HTMLElement>('.lb-modal__title')
    const subtitleEl = this.content.querySelector<HTMLElement>('.lb-modal__subtitle')
    const headerEl = this.content.querySelector<HTMLElement>('.lb-modal__header')

    if (!titleEl) {
      const newHeader = `<div class="lb-modal__header">
      <div class="lb-modal__title">
      ${title}
      </div>
      ${
        subtitleEl?.innerHTML
          ? `<div class="lb-modal__subtitle">
      ${subtitleEl.innerHTML}
      </div>`
          : ''
      }
      </div>`

      headerEl?.remove()

      this.content.insertAdjacentHTML('afterbegin', newHeader)
    }

    titleEl.innerHTML = title
  }

  public removeTitle() {
    const titleEl = this.content.querySelector<HTMLElement>('.lb-modal__title')
    const subtitleEl = this.content.querySelector<HTMLElement>('.lb-modal__subtitle')
    const headerEl = this.content.querySelector<HTMLElement>('.lb-modal__header')

    if (titleEl && !subtitleEl) {
      headerEl?.remove()
    } else if (titleEl) {
      titleEl.remove()
    }
  }

  public setSubtitle(subtitle: string) {
    const titleEl = this.content.querySelector<HTMLElement>('.lb-modal__title')
    const subtitleEl = this.content.querySelector<HTMLElement>('.lb-modal__subtitle')
    const headerEl = this.content.querySelector<HTMLElement>('.lb-modal__header')

    if (!subtitleEl) {
      const newHeader = `<div class="lb-modal__header">
      ${
        titleEl?.innerHTML
          ? `<div class="lb-modal__title">
      ${titleEl.title}
      </div>`
          : ''
      }
    
       <div class="lb-modal__subtitle">
      ${subtitle}
      </div>
      </div>`

      headerEl?.remove()

      this.content.insertAdjacentHTML('afterbegin', newHeader)
    }

    subtitleEl.innerHTML = subtitle
  }

  public removeSubtitle() {
    const titleEl = this.content.querySelector<HTMLElement>('.lb-modal__title')
    const subtitleEl = this.content.querySelector<HTMLElement>('.lb-modal__subtitle')
    const headerEl = this.content.querySelector<HTMLElement>('.lb-modal__header')

    if (!titleEl && subtitleEl) {
      headerEl?.remove()
    } else if (subtitleEl) {
      subtitleEl.remove()
    }
  }

  private disableScroll() {
    document.body.style.overflow = 'hidden'
    document.documentElement.style.scrollbarGutter = 'stable'
  }

  private enableScroll() {
    document.body.style.overflow = ''
    document.documentElement.style.scrollbarGutter = ''
  }
}
