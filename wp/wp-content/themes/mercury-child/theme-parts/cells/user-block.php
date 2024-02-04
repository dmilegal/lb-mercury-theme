<?php
global $post;
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$userId = $args['user_id'] ?? null;
// 'sm' | 'md' | 'lg' | 'xl'
$size = $args['size'] ?? 'md';
$showBio = $args['show_bio'] ?? false;
$showSocials = $args['show_socials'] ?? false;

// Detect if it is a single post with a post author
if (!$userId)
    return;


$user = get_userdata($userId);
// Get author's display name
$display_name = $user->display_name;

// If display name is not available then use nickname as display name
if (empty($display_name))
    $display_name = $user->nickname;

// Get author's biographical information or description
$user_description = $user->user_description;

// Get author's social media URL
$soc_links = getUserSocLinks($userId);

$bio = get_field('short_biographical_info', 'user_' . $userId);

$job_title = get_field('job_title', 'user_' . $userId);
?>
<div class="<?= classNames($className, 'lb-user-block not-prose', 'lb-user-block--size_' . $size) ?>" style="<?= stylesValue($style) ?>">
    <div class="lb-user-block__head">
        <div class="lb-user-block__head-left">
            <?= get_avatar($userId, 56, '', '', [
                'class' => 'lb-user-block__avatar'
            ]) ?>
            <div class="<?= classNames("lb-user-block__info", !$job_title ? "lb-user-block__info--one-line" : '') ?>">
                <? if (!empty($display_name)) { ?>
                    <span class="lb-user-block__name"><?= $display_name ?></span>
                <? } ?>
                <? if ($job_title) { ?>
                    <span class="lb-user-block__job"><?= $job_title ?></span>
                <? } ?>
            </div>
        </div>
        <? if ($showSocials && count($soc_links)) { ?>
            <div class="lb-user-block__head-right lb-user-block__socs">
                <? foreach ($soc_links as $link) {
                    get_template_part('theme-parts/molecules/social-link', null, [
                        'icon' => $link[0],
                        'href' => $link[1],
                        'title' => $link[2] ?? '',
                        'rel' => "nofollow",
                        'target' => "_blank",
                    ]);
                } ?>
            </div>
        <? } ?>

    </div>
    <? if (false && $showBio && $bio) { ?>
        <div class="lb-user-block__bio">
            <p>
                <?= wp_kses_post($bio) ?>
            </p>
        </div>
    <? } ?>
</div>