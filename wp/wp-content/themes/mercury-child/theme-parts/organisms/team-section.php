<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$title = $args['title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$teamMemberIds = $args['member_ids'] ?? [];

?>

<section class="<?= classNames(
                  'lb-team-section',
                  'not-prose',
                  $className,

                ) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-team-section__container">
    <? if ($title) { ?>
      <header class="lb-team-section__header lb-section__header">
        <h2 class="lb-team-section__title lb-section__title"><?= $title ?></h2>
      </header>
    <? } ?>
    <? if ($subtitle) { ?>
      <p class="lb-team-section__subtitle lb-section__subtitle"><?= $subtitle ?></p>
    <? } ?>
    <div class="lb-team-section__teams">
      <? foreach ($teamMemberIds as $teamMemberId) {
        get_template_part('theme-parts/cells/team-member-card/team-member-card', null, [
          'member_id' => $teamMemberId,
        ]);
      } ?>
    </div>
  </div>

</section>