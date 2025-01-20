import {
  ComputePositionReturn,
  OffsetOptions,
  computePosition,
  offset as offsetF,
} from '@floating-ui/dom'

type Opts = Pick<Parameters<typeof computePosition>[2], 'placement' | 'middleware'> & {
  offset?: OffsetOptions
  enableBind?: boolean
  closeOnClickOutside?: boolean
}

export class LbTooltip {
  public cp: ComputePositionReturn
  public refEscClose: (e: KeyboardEvent) => void
  // Добавим ссылку на функцию, которая будет отслеживать клики снаружи:
  public refClickOutside?: (e: MouseEvent) => void

  constructor(
    public reference: HTMLElement,
    public floating: HTMLElement,
    public params: Opts
  ) {
    const { enableBind, closeOnClickOutside } = this.params

    this.refEscClose = this.escClose.bind(this)

    // Если хотим закрывать по клику снаружи — привязываем соответствующий обработчик:
    if (closeOnClickOutside) {
      this.refClickOutside = this.clickOutsideClose.bind(this)
    }

    if (enableBind) {
      this.bindControl()
    }

    return arguments[0]
  }

  private async computePosition() {
    const { offset, enableBind, closeOnClickOutside, ...params } = this.params

    this.cp = await computePosition(this.reference, this.floating, {
      ...params,
      middleware: [offsetF(offset || 0)],
    }).then(({ x, y }) => {
      Object.assign(this.floating.style, {
        left: `${x}px`,
        top: `${y}px`,
      })

      return arguments[0]
    })

    return this
  }

  show() {
    this.floating.classList.remove('lb-tooltip--hidden')
    setTimeout(() => {
      this.floating.classList.add('lb-tooltip--showed')
      this.computePosition()
    })

    // При показе добавляем слушатели:
    window.addEventListener('keydown', this.refEscClose)
    if (this.params.closeOnClickOutside && this.refClickOutside) {
      // Ставим захват (true), чтобы сначала обработать клик,
      // прежде чем он дойдет до других обработчиков
      document.addEventListener('click', this.refClickOutside, true)
    }
  }

  hide() {
    this.floating.classList.remove('lb-tooltip--showed')
    this.floating.classList.add('lb-tooltip--hidden')

    // При скрытии убираем слушатели:
    window.removeEventListener('keydown', this.refEscClose)
    if (this.params.closeOnClickOutside && this.refClickOutside) {
      document.removeEventListener('click', this.refClickOutside, true)
    }
  }

  toggle() {
    if (this.floating.classList.contains('lb-tooltip--showed')) {
      this.hide()
    } else {
      this.show()
    }
  }

  escClose(e: KeyboardEvent) {
    if (e.code === 'Escape') {
      this.hide()
    }
  }

  // Обработчик клика снаружи:
  clickOutsideClose(e: MouseEvent) {
    const target = e.target as Node
    // Проверяем, что клик не по самой кнопке (reference) и не по тултипу (floating)
    if (!this.reference.contains(target) && !this.floating.contains(target)) {
      this.hide()
    }
  }

  private bindControl() {
    this.reference.addEventListener('click', () => this.toggle())
  }
}
