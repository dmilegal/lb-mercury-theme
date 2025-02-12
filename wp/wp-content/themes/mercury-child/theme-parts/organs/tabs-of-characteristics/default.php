<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$postId =  $args['post_id'];

if (!$postId) return;

$globalSettings = get_field('brand_chars_tab_list', 'option');

$tabs = TabsOfCharacteristics::mixSettingsChars($globalSettings);
$tabBtnList = array_map(fn($tab) =>  ['title' => $tab['title']], $tabs);
$tabContentList = array_map(fn($tab) =>  $tab['chars'], $tabs);

?>
<section class="<?= classNames('lb-tabs-of-chars', $className) ?>" style="<?= stylesValue($style) ?>">
  <? if ($tabBtnList) { ?>
    <div class="lb-tabs-of-chars__tabs">
      <? foreach ($tabBtnList as $tabBtn) {
        get_template_part('theme-parts/organs/tabs-of-characteristics/tabs', null, $tabBtn);
      } ?>
    </div>
  <? } ?>

  <? if ($tabContentList) { ?>
    <div class="lb-tabs-of-chars__contents">
      <? foreach ($tabContentList as $charList) { ?>
        <div class="lb-tabs-of-chars__content">
          <? get_template_part('theme-parts/organs/tabs-of-characteristics/tab-content', null, [
            'char_list' => $charList
          ]); ?>
        </div>
      <? } ?>
    </div>
  <? } ?>
</section>