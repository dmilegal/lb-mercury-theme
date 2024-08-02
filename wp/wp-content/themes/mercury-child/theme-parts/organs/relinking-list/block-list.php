<?
$params = isset($args['prepared']) ? $args : relinkingListParams($args);
?>
<section data-wp-interactive="relinkingList" class="<?= classNames(
                                                      "lb-relinking-list",
                                                      "not-prose",
                                                      "lb-relinking-list--theme_blocks",
                                                      "lb-relinking-list--gap_{$params['gap']}",
                                                      "lb-relinking-list--col-count_{$params['col_count']}",
                                                      $params['className']
                                                    ) ?>" style="<?= stylesValue($params['style']) ?>">
  <? if ($params['title']) { ?>
    <header class="lb-relinking-list__header">
      <h2 class="lb-relinking-list__title"><?= $params['title'] ?></h2>
    </header>
  <? } ?>
  <div class="<?= classNames("lb-relinking-list__list") ?>">
    <? foreach ($params['block_list'] as $ind => $block) {
      get_template_part("theme-parts/cells/relinking-item/link-block", null, [
        'theme' => $params['theme'],
        ...$block
      ]);
    } ?>
  </div>
</section>