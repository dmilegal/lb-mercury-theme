<?
use Shared\Theme\LbThemeService;

if (!is_multisite())
  return;

global $wp;
$curr_url = home_url($wp->request) . '/';

switch_to_blog(1);
$subsitez = get_field('ntw_webs_switcher', 'm5netw_opt1');
restore_current_blog();

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

    #subsite that is active now
    $current_subsite = $subsitez[0];

    foreach ($subsitez as $k => $v) {
      if ($v['slug'] == '/')
        continue;

      if (strpos($curr_url, $v['slug']) !== false) {
        $current_subsite = $subsitez[$k];
        break;
      }
    }
    #actual country where page is loaded html
    ?>

    <span class="lb-lang-switcher__trigger">
      <img width="32" height="32" class="lb-lang-switcher__ico lb-lang-switcher__ico--main" alt="<?= $current_subsite['title'] ?>" src="<?= (get_stylesheet_directory_uri() . '/img/flags/round/' . $current_subsite["flag"]) ?>">
    </span>
    <ul class="lb-lang-switcher__list">
      <?
      # generating links for others subsites
      foreach ($subsitez as $k => $v) :

        if ($v['slug'] == $current_subsite['slug'])
          continue;

        if (!$v['show_lang_sw'])
          continue;


        $href = $current_subsite['slug'] == '/' ? $v['url'] . $_SERVER['REQUEST_URI'] : str_replace($current_subsite['slug'], $v['slug'], $curr_url);
      ?>
        <li class="lb-lang-switcher__item">
          <div class="lb-lang-switcher__link" data-href="<?= $href ?>" onclick="location.href=this.dataset.href;">
            <img width="20" height="20" class="lb-lang-switcher__ico lb-lang-switcher__ico--sub" alt="<?= $v["title"] ?>" src="<?= (get_stylesheet_directory_uri() . '/img/flags/round/' . $v["flag"]) ?>">
            <?= $v['title'] ?>
          </div>
        </li>
      <?
      endforeach;
      ?>
    </ul>
  </li>
</ul>