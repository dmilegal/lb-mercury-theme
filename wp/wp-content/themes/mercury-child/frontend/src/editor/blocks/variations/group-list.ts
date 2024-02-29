wp.domReady(function () {
  wp.blocks.registerBlockVariation('lb/group-list', {
    name: 'advantages',
    title: 'Advantages',
    icon: 'plus-alt',
    keywords: ['advantages', 'list', 'group', 'pros'],
    attributes: {
      data: {
        mark_ico: 'check',
        title: wp.i18n.__('Advantages', 'mercury-child'),
      },
    },
  })

  wp.blocks.registerBlockVariation('lb/group-list', {
    name: 'disadvantages',
    title: 'Disadvantages',
    icon: 'minus',
    keywords: ['disadvantages', 'list', 'group', 'cons'],
    attributes: {
      data: {
        mark_ico: 'cross',
        title: wp.i18n.__('Disadvantages', 'mercury-child'),
      },
    },
  })

  wp.blocks.registerBlockVariation('core/columns', {
    name: 'pros-cons',
    title: 'Pros & Cons',
    icon: 'star-half',
    keywords: ['pros', 'cons', 'compare', 'advantages', 'disadvantages'],
    attributes: {
      className: 'lb-pros-cons',
      templateLock: 'all',
      flexWrap: 'nowrap',
    },
    innerBlocks: [
      [
        'core/column',
        {},
        [
          [
            'lb/group-list',
            {
              data: {
                mark_ico: 'check',
                title: wp.i18n.__('Advantages', 'mercury-child'),
              },
            },
          ],
        ],
      ],
      [
        'core/column',
        {},
        [
          [
            'lb/group-list',
            {
              data: {
                mark_ico: 'cross',
                title: wp.i18n.__('Disadvantages', 'mercury-child'),
              },
            },
          ],
        ],
      ],
    ],
  })
})
