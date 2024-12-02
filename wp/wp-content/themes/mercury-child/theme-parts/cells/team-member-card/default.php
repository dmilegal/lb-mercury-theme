<?
$className = $args['className'] ?? '';
$userId = $args['member_id'] ?? null;
$disableMemberLink = $args['disable_member_link'] ?? false;

$user = get_userdata($userId);
// Get author's display name
$display_name = $user->display_name;

// If display name is not available then use nickname as display name
if (empty($display_name))
  $display_name = $user->nickname;

// Get author's social media URL
$soc_links = getUserSocLinks($userId);
$job_title = get_field('job_title', 'user_' . $userId);

?>
<div class="<?= classNames("lb-team-member-card", $className) ?>">
  <div class="lb-team-member-card__inner">
    <? if (!$disableMemberLink) { ?>
      <a class="lb-team-member-card__link" href="<?= get_author_posts_url($userId); ?>">
      <? } ?>
      <?= get_avatar($userId, 64, '', '', [
        'class' => 'lb-team-member-card__avatar',
        'loading' => 'lazy'
      ]) ?>
      <div class="lb-team-member-card__info">
        <? if ($display_name) { ?>
          <div class="lb-team-member-card__name">
            <?= $display_name ?>
          </div>
        <? } ?>
        <? if ($job_title) { ?>
          <div class="lb-team-member-card__pos">
            <?= $job_title ?>
          </div>
        <? } ?>
      </div>
      <? if (!$disableMemberLink) { ?>
      </a>
    <? } ?>

    <? if ($soc_links) { ?>
      <div class="lb-team-member-card__soclinks">
        <? foreach ($soc_links as $link) {
          get_template_part('theme-parts/molecules/social-link', null, [
            'icon' => $link[0],
            'href' => $link[1],
            'title' => $link[2] ?? '',
            'rel' => "nofollow",
            'target' => "_blank",
            'variant' => 'inline',
            'size' => '2xl',
          ]);
        } ?>
      </div>
    <? } ?>
  </div>

</div>