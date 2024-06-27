<?
function isBrandLocked($postId) {
  return get_post_status($postId) == 'draft' ||
  get_post_status($postId) == 'pending' ||
  get_post_status($postId) == 'auto-draft' ||
  get_post_status($postId) == 'private';
}