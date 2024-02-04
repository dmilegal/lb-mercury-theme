<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$authorId =  $args['author_id'] ?? null;

$casino_allowed_html = array(
  'a' => array(
    'href' => true,
    'title' => true,
    'target' => true,
    'rel' => true
  ),
  'img' => array(
    'src' => true,
    'alt' => true
  ),
  'br' => true,
  'em' => array(),
  'strong' => true,
  'span' => array(
    'class' => true
  ),
  'div' => array(
    'class' => true
  ),
  'p' => array(),
  'ul' => array(),
  'ol' => array(),
  'li' => array(),
);

if (!$authorId)
  return;

$user = get_userdata($authorId);

// Get author's display name
$display_name = $user->display_name;

// If display name is not available then use nickname as display name
if (empty($display_name))
  $display_name = $user->nickname;

// Get author's biographical information or description
$user_description = $user->user_description;

// Get author's social media URL
$soc_links = getUserSocLinks($user_id);


$job_title = get_field('job_title', 'user_' . $user_id);
?>

<div class="<?= classNames(
              'lb-hero-author-banner',
              $className

            ) ?>" style="<?= stylesValue($style) ?>">

  <div class="lb-hero-author-banner__inner">
    <div class="lb-hero-author-banner__content">
      <div class="lb-hero-author-banner__head">
        <?= get_avatar(get_the_author_meta('user_email', $authorId), 82, '', '', [
          'class' => 'lb-hero-author-banner__avatar'
        ]) ?>
        <? if (!empty($display_name)) { ?>
          <div class="lb-hero-author-banner__name"><?= $display_name ?></div>
        <? } ?>
      </div>
      <div class="lb-hero-author-banner__bio prose-colors prose-content">
        <? get_template_part('theme-parts/cells/clipping', null, [
          'content' => wp_kses_post($user_description)
        ]); ?>
      </div>
    </div>

  </div>
</div>