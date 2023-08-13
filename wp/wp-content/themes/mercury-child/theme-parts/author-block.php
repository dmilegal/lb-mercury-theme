<script type="application/ld+json">
{
	"@context": "http://schema.org",
  	"@type": "Person",
  	"name": "<?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>",
  	"image": "<?php echo esc_url( get_avatar_url( get_the_author_meta('user_email'), ['size' => '200'] )); ?>",
  	"jobTitle": "<?php echo esc_html( get_field( 'job_title', 'user_'.get_the_author_meta('ID') ) ); ?>",
  	"description": "<?php echo esc_html( get_field ('short_biographical_info', 'user_'.$post->post_author ) ); ?>",
    "url": "<?php echo get_author_posts_url(get_the_author_meta( 'ID' , $post->post_author)); ?>"
}
</script>


<?php
global $post;
$author_details = '';

// Detect if it is a single post with a post author
if ( isset( $post->post_author ) ) {
    
    // Get author's display name
    $display_name = get_the_author_meta( 'display_name', $post->post_author );
        
    // If display name is not available then use nickname as display name
    if ( empty( $display_name ) )
        $display_name = get_the_author_meta( 'nickname', $post->post_author );
        
    // Get author's biographical information or description
    $user_description = get_the_author_meta( 'user_description', $post->post_author );
        
    // Get author's social media URL
    $user_facebook = get_the_author_meta( 'facebook' );
    $user_twitter = get_the_author_meta( 'twitter' );
    $user_linkedin = get_the_author_meta( 'linkedin' );
    $user_instagram = get_the_author_meta( 'instagram' );
    $soc_links = array_filter([['facebook', $user_facebook], ['twitter', $user_twitter ? 'https://twitter.com/' . $user_twitter : ''], ['linkedin', $user_linkedin], ['instagram', $user_instagram]], fn($v) => $v[1]);

        
    // Get link to the author archive page
    $user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));

    if ( ! empty( $user_description ) ) {
       
        if ( ! empty( $display_name ) )
            $author_details = '<p class="author-name"><h3>Author: ' . $display_name . '</h3></p>';
        
        if ( ! empty( $user_description ) ) {
            // Author avatar and bio
            $author_details .= '<p class="author-image">' . get_avatar( get_the_author_meta('user_email') , 90 ). '</p>';
            if (count($soc_links)) {
                $author_details .= '<p class="author-socials">';
                foreach ($soc_links as $link) {
                    $author_details .= '<a href="'.$link[1] .'" rel="nofollow" target="_blank" alt="'. $link .'"><i class="fab fa-'. $link[0] .'"></i></a>';
                }
                $author_details .= '</p>';
            }
            $author_details .= '<p class="author-description">' . wp_kses_post(get_field('short_biographical_info', 'user_'.$post->post_author)). '</p>';
            $author_details .= '<p class="author-links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>'; 
        }
    
        // Check if author has a website in their profile
        if ( ! empty( $user_website ) ) {
            // Display author website link
            $author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';
        } else {
        // if there is no author website then just close the paragraph
            $author_details .= '</p>';
        }
    }
    // Pass all this info to post content
    echo $content = '<div class="author-bio-section" >' . $author_details . '</div>';
}