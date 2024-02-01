<?php
function getUserSocLinks($user_id) {
  $user_facebook = get_the_author_meta( 'facebook', $user_id );
  $user_twitter = get_the_author_meta( 'twitter', $user_id );
  $user_linkedin = get_the_author_meta( 'linkedin', $user_id );
  $user_instagram = get_the_author_meta( 'instagram', $user_id );
  $soc_links = array_filter([
  ['facebook', $user_facebook,  __('go to facebook', 'mercury-child')], 
  ['twitter', $user_twitter ? 'https://twitter.com/' . $user_twitter : '',  __('go to x', 'mercury-child')], 
  ['linkedin', $user_linkedin,  __('go to linkedin', 'mercury-child')], 
  ['instagram', $user_instagram, __('go to instagram', 'mercury-child')]], fn($v) => $v[1]);

  return $soc_links;
}