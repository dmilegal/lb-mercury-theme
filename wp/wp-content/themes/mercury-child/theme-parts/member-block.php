<?php
$user_id = isset($args['id']) ? $args['id'] : null;

if ( $user_id ) { ?>
<div class="member-section">
    <?
    $user = get_userdata( $user_id );
    $meta = get_user_meta( $user_id );
    $display_name = $user->display_name ?: $meta['nickname'];
        
    $user_description = $meta['description'];
        
    // Get author's social media URL
    $soc_links = getUserSocLinks($user_id);

    // Get link to the author archive page
    $user_posts = get_author_posts_url($user_id);

    if ( ! empty( $user_description ) ) {
       
        if ( ! empty( $display_name ) ) { ?>
            <div class="member-name">
                <h3><?= $display_name ?></h3>
            </div>
        <? }
        
        if ( ! empty( $user_description ) ) { ?>
        <div class="member-content">
            <div class="member-preview">
                <div class="member-image"><?= get_avatar( get_the_author_meta('user_email') , 160 ) ?></div>
                <?  if (count($soc_links)) { ?>
                    <div class="member-socials">
                    <? foreach ($soc_links as $link) { ?>
                        <a href="<?= $link[1] ?>" title="<?= esc_attr__( $link[0], 'mercury-child' ) ?>" rel="nofollow" target="_blank"><i class="fab fa-<?= $link[0] ?>"></i></a> 
                <? } ?>
                    </div>
                <? } ?>
            </div>
            <p class="member-description"><?= wp_kses_post(get_field('short_biographical_info', 'user_'.$user_id)) ?></p>
        </div>
        <? } ?>
          
        <div class="member-links">
            <a href="<?= $user_posts ?>">View all posts by <?= $display_name ?></a>
        <? if ( ! empty( $user_website ) ) { ?>
            <a href="<?= $user_website ?>" target="_blank" rel="nofollow">Website</a></p>
        <?} else { ?>
            </div>
        <?}
    }
}
?>
</div>

