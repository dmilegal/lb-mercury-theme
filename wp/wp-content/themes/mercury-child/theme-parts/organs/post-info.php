<?
global $post;

if (!$post) return;

$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$authorId = $args['author_id'] ?? $post->post_author;

[$publishedDate, $time] = getPostDateTime($post->ID, 'Y-m-d');

// Get author's display name
$display_name = get_the_author_meta('display_name', $authorId);

// If display name is not available then use nickname as display name
if (empty($display_name))
  $display_name = get_the_author_meta('nickname', $authorId);
?>
<div class="<?= classNames($className, "lb-post-info") ?>" style="<?= stylesValue($style) ?>">

  <div class="lb-post-info__col not-prose">
    <span class="lb-post-info__title">
      <?= __('Written by', 'mercury-child') ?>
    </span>
    <span rel="author" class="lb-post-info__value">
      <?= $display_name ?>
    </span>
  </div>
  <div class="lb-post-info__col not-prose">
    <span class="lb-post-info__title">
      <?= __('Published on', 'mercury-child') ?>
    </span>
    <time class="lb-post-info__value" datetime="<?= $publishedDate ?>" pubdate="pubdate">
      <?= wp_date('j M Y', strtotime($publishedDate)) ?>
    </time>
  </div>
</div>