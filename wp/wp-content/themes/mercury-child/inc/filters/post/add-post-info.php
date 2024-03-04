<?
add_filter('the_content', 'addPostInfoFilterHandler');

function addPostInfoFilterHandler($content)
{
  if ((is_page() || is_single()) && !is_admin() &&
    strpos($content, 'lb-post-info') === false &&
    get_post_meta(get_the_ID(), '_wp_page_template', true) !== 'page-templates/selection.php'
  ) {
    ob_start();
    get_template_part('theme-parts/organs/post-info', null);
    $tpl = ob_get_contents();
    ob_end_clean();

    return addPostInfo($tpl, $content);
  }


  return $content;
}
function addPostInfo($insertion, $content)
{
  /*if (strpos($content, '</h2>') > strpos($content, '</p>'))
    return  $insertion . $content;
  else*/
  return preg_replace('/(<\/h2>)/i', '\1' . $insertion, $content, 1);
}
