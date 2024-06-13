<?

use Shared\Theme\LbThemeService;

if (!is_multisite() || !function_exists('msls_blog_collection'))
  return;

global $wp;

$collection = msls_blog_collection();
$subsites = $collection->get_objects();
$current_subsite = $collection->get_current_blog();

$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
/**
 * sm | md | lg
 */
$size = $args['size'] ?? 'md';

$color = $args['color'] ?? LbThemeService::getMainGroupColor();
$content = $args['content'] ?? '';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id'])));
?>
<ul class="<?= classNames('lb-lang-switcher', $className, 'lb-lang-switcher--color_' . $color, 'lb-lang-switcher--size_' . $size) ?>" <?= $attrsStr ?> style="<?= stylesValue($style) ?>">
  <li class="lb-lang-switcher__current-item">
    <?
    $ico_link = getIconByLangCode($current_subsite->get_language());
    $title = $current_subsite->get_description() && $current_subsite->get_description() != $current_subsite->get_language() ? $current_subsite->get_description() : get_blog_details(['blog_id' => $current_subsite->userblog_id])->blogname;
    ?>
    <span class="lb-lang-switcher__trigger">
      <img width="32" height="32" class="lb-lang-switcher__ico lb-lang-switcher__ico--main" alt="<?= $title ?>" src="<?= $ico_link ?>">
    </span>
    <?

    $filteredSubsites = array_filter($subsites, fn (\lloc\Msls\MslsBlog $subsite) =>  $subsite->userblog_id != $current_subsite->userblog_id &&
      get_msls_permalink($subsite->get_language()) && !intval($subsite->__get("deleted")) && !intval($subsite->__get("archived"))
      && !(!is_front_page() && get_msls_permalink($subsite->get_language()) == $subsite->__get("siteurl") . '/')
    );

    if ($filteredSubsites) {
    ?>
      <ul class="lb-lang-switcher__list">
        <?
        # generating links for others subsites
        foreach ($filteredSubsites as $subsite) :
          if ($subsite->userblog_id == $current_subsite->userblog_id)
            continue;

          $ico_link = getIconByLangCode($subsite->get_language());
          $href = get_msls_permalink($subsite->get_language());
          $title = $subsite->get_description() && $subsite->get_description() != $subsite->get_language() ? $subsite->get_description() : get_blog_details(['blog_id' => $subsite->userblog_id])->blogname;

          if (!$href)
            continue;
        ?>
          <li class="lb-lang-switcher__item">
            <a class="lb-lang-switcher__link" href="<?= $href ?>">
              <img width="20" height="20" class="lb-lang-switcher__ico lb-lang-switcher__ico--sub" alt="<?= $title ?>" src="<?= $ico_link ?>">
              <?= $title ?>
            </a>
          </li>
        <?
        endforeach;
        ?>
      </ul>
    <? } ?>
  </li>
</ul>