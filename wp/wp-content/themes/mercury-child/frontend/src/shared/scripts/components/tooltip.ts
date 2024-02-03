import {
  ComputePositionReturn,
  OffsetOptions,
  computePosition,
  offset as offsetF,
} from '@floating-ui/dom'

type Opts = Pick<Parameters<typeof computePosition>[2], 'placement'> & {
  offset?: OffsetOptions
}

export class LbTooltip {
  public cp: ComputePositionReturn

  constructor(
    public reference: HTMLElement,
    public floating: HTMLElement,
    public params: Opts
  ) {}

  private async computePosition() {
    const { offset, ...params } = this.params

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
  }

  hide() {
    this.floating.classList.remove('lb-tooltip--showed')
    this.floating.classList.add('lb-tooltip--hidden')
  }
}
