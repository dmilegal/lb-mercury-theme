declare const wp: any

wp.domReady(function () {
  wp.blocks.registerBlockVariation('core/list', {
    name: 'list-with-ico-check',
    title: 'List - ✓ Icon',
    attributes: {
      className: 'is-list-ico-check',
    },
  })

  wp.blocks.registerBlockVariation('core/list', {
    name: 'list-with-ico-cross',
    title: 'List - ✘ Icon',
    attributes: {
      className: 'is-list-ico-cross',
    },
  })
})
