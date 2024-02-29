declare const wp: any

export const S = wp.domReady(function () {
  wp.blocks.registerBlockStyle('core/list', {
    name: 'list-bordered',
    label: 'Bordered',
  })
})
