<?php
global $post;
$author_details = '';

// Detect if it is a single post with a post author
if (isset($post->post_author)) {

    // Get author's display name
    $display_name = get_the_author_meta('display_name', $post->post_author);

    // If display name is not available then use nickname as display name
    if (empty($display_name))
        $display_name = get_the_author_meta('nickname', $post->post_author);

    // Get author's biographical information or description
    $user_description = get_the_author_meta('user_description', $post->post_author);

    // Get author's social media URL
    $soc_links = getUserSocLinks($post->post_author);

    // Get link to the author archive page
    $user_posts = get_author_posts_url(get_the_author_meta('ID', $post->post_author));
/*
    if (!empty($user_description)) {

        if (!empty($display_name))
            $author_details = '<div class="author-name"><h3>Author: ' . $display_name . '</h3></div>';

        if (!empty($user_description)) {
            // Author avatar and bio
            $author_details .= '<p class="author-image">' . get_avatar(get_the_author_meta('user_email'), 90) . '</p>';
            if (count($soc_links)) {
                $author_details .= '<p class="author-socials">';
                foreach ($soc_links as $link) {
                    $author_details .= '<a href="' . $link[1] . '" title="' . esc_attr__($link[0], 'mercury-child') . '" rel="nofollow" target="_blank"><i class="fab fa-' . $link[0] . '"></i></a>';
                }
                $author_details .= '</p>';
            }
            $author_details .= '<p class="author-description">' . wp_kses_post(get_field('short_biographical_info', 'user_' . $post->post_author)) . '</p>';
            $author_details .= '<p class="author-links"><a href="' . $user_posts . '">View all posts by ' . $display_name . '</a>';
        }

        // Check if author has a website in their profile
        if (!empty($user_website)) {
            // Display author website link
            $author_details .= ' | <a href="' . $user_website . '" target="_blank" rel="nofollow">Website</a></p>';
        } else {
            // if there is no author website then just close the paragraph
            $author_details .= '</p>';
        }
    }
    // Pass all this info to post content
    echo $content = '<div class="author-bio-section" >' . $author_details . '</div>';*/
}

?>
<div class="lb-author-block">
    <div class="lb-author-block__head">
        <div class="lb-author-block__head-left">
            <?= get_avatar(get_the_author_meta('user_email'), 56, '', '', [
                'class' => 'lb-author-block__avatar'
            ]) ?>
            <div class="lb-author-block__info">
                <? if (!empty($display_name)) { ?>
                    <span class="lb-author-block__name"><?= $display_name ?></span>
                <? } ?>
                <? if (true) { ?>
                    <span class="lb-author-block__status"></span>
                <? } ?>
            </div>
        </div>
        <? if (count($soc_links)) { ?>
            <div class="lb-author-block__head-right lb-author-block__socs">
                <? foreach ($soc_links as $link) {
                    get_template_part('theme-parts/molecules/social-link', null, [
                        'size' => 'md',
                        'icon' => $link[0],
                        'link' => $link[1],
                        'rel' => "nofollow",
                        'target' => "_blank",
                    ]);
                } ?>
            </div>
        <? } ?>

    </div>
    <div class="lb-author-block__bio">
        <?= wp_kses_post(get_field('short_biographical_info', 'user_' . $post->post_author)) ?>
    </div>
</div>