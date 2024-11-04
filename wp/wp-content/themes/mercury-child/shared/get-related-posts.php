<?
function getRelatedPosts($postId = null, $limit = 3) {
  if (function_exists('yarpp_get_related'))
  return yarpp_get_related([
    'limit' => $limit
], $postId);

  return [];
}