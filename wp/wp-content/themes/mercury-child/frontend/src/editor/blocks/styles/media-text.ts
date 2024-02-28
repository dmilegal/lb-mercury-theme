declare const wp: any

export const S = wp.domReady(function () {
  wp.blocks.registerBlockStyle('core/media-text', {
    name: 'media-text-bordered',
    label: 'Bordered',
  })
  /* wp.blocks.registerBlockVariation('core/media-text', {
    name: 'lb-logo-text',
    title: 'Logo & Text',
    //isDefault: true,
    attributes: {
      className: 'lb-media-text--style_logo',
      mediaPosition: 'left',
      mediaSizeSlug: 'medium',
      verticalAlignment: 'top',
    },
    supports: {
      mediaWidth: false,
    },
    innerBlocks: [
      [
        'core/heading',
        {
          level: 3,
          size: 'text-lg',
          placeholder: 'Enter title...',
        },
      ],
      [
        'core/paragraph',
        {
          placeholder: 'Start writing your text...',
        },
      ],
    ],
  })*/
})
