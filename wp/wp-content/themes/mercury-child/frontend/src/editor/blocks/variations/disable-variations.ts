declare const WP_BLOCKS_DISALLOWED_VARIANTS: string[]

wp.domReady(function () {
  if (typeof WP_BLOCKS_DISALLOWED_VARIANTS != 'undefined') {
    WP_BLOCKS_DISALLOWED_VARIANTS.forEach(function (variant) {
      wp.blocks.unregisterBlockVariation(variant[0], variant[1])
    })
  }
})
