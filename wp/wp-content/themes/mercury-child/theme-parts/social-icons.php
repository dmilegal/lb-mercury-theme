<?php if(get_theme_mod('mercury_facebook_url') == '') {} else { ?>

<a href="<?php echo esc_url( get_theme_mod('mercury_facebook_url') ); ?>" title="<?php esc_attr_e( 'Facebook', 'mercury-child' ); ?>" target="_blank"><i class="fab fa-facebook"></i></a>

<?php } ?>

<?php if(get_theme_mod('mercury_twitter_url') == '') {} else { ?>

<a href="<?php echo esc_url( get_theme_mod('mercury_twitter_url') ); ?>" title="<?php esc_attr_e( 'Twitter', 'mercury-child' ); ?>" target="_blank"><i class="fab fa-twitter"></i></a>

<?php } ?>

<?php if(get_theme_mod('mercury_youtube_url') == '') {} else { ?>

<a href="<?php echo esc_url( get_theme_mod('mercury_youtube_url') ); ?>" title="<?php esc_attr_e( 'YouTube', 'mercury-child' ); ?>" target="_blank"><i class="fab fa-youtube"></i></a>

<?php } ?>

<?php if(get_theme_mod('mercury_instagram_url') == '') {} else { ?>

<a href="<?php echo esc_url( get_theme_mod('mercury_instagram_url') ); ?>" title="<?php esc_attr_e( 'Instagram', 'mercury-child' ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>

<?php } ?>

<?php if(get_theme_mod('mercury_linkedin_url') == '') {} else { ?>

<a href="<?php echo esc_url( get_theme_mod('mercury_linkedin_url') ); ?>" title="<?php esc_attr_e( 'LinkedIn', 'mercury-child' ); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>

<?php } ?>

<?php if(get_theme_mod('mercury_reddit_url') == '') {} else { ?>

<a href="<?php echo esc_url( get_theme_mod('mercury_reddit_url') ); ?>" title="<?php esc_attr_e( 'Reddit', 'mercury-child' ); ?>" target="_blank"><i class="fab fa-reddit-alien"></i></a>

<?php } ?>

<?php if(get_theme_mod('mercury_other_link_url') == '') {} else { ?>

<a href="<?php echo esc_url( get_theme_mod('mercury_other_link_url') ); ?>" title="<?php esc_attr_e( 'Website', 'mercury-child' ); ?>" target="_blank"><i class="fas fa-globe"></i></a>

<?php } ?>