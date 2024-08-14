<?
$params = isset($args['prepared']) ? $args : relinkingListParams($args);
?>
<section data-wp-interactive="relinkingList" class="<?= classNames(
                                                      "lb-relinking-list",
                                                      "lb-relinking-list--theme_blocks",
                                                      $params['className']
                                                    ) ?>" style="<?= stylesValue($params['style']) ?>--lb-relinking-list-col-count-real:<?= isset($params['block_list']) ? count($params['block_list']) : 1 ?>">
  <? if ($params['title']) { ?>
    <header class="<?= classNames("not-prose", "lb-relinking-list__header ") ?>">
      <h2 class="<?= classNames(
                    "lb-relinking-list__title",
                    "lb-relinking-list__title--size_{$params['title_size']}",
                    "lb-relinking-list__title--color_{$params['title_color']}",
                  ) ?>"><?= $params['title'] ?></h2>
    </header>
  <? } ?>
  <div class="<?= classNames(
                "lb-relinking-list__blocks",
                "lb-relinking-list__blocks--gap_{$params['gap']}",
                "lb-relinking-list__blocks--col-count_{$params['col_count']}",
              ) ?>">
    <? foreach ($params['block_list'] as $ind => $block) {
      get_template_part("theme-parts/cells/relinking-item/link-block", null, [
        'theme' => $params['theme'],
        ...$block
      ]);
    } ?>
  </div>
</section>