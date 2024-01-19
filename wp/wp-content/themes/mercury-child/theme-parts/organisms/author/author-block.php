<?php
global $post;

$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$authorId = $args['author_id'] ?? $post->post_author;

?>
<div class="<?= classNames($className, 'lb-author-block') ?>" style="<?= stylesValue($style) ?>">
    <? get_template_part('theme-parts/cells/user-block', null, [
        'user_id' => $authorId,
        'show_bio' => true,
        'show_socials' => true,
        'size' => 'xl'
    ]); ?>
</div>