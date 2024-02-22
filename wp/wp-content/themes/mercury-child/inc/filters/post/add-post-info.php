<?
add_filter('the_content', 'addPostInfoFilterHandler');

function addPostInfoFilterHandler($content)
{

  ob_start();
  get_template_part('theme-parts/organs/post-info', null);
  $tpl = ob_get_contents();
  ob_end_clean();


  if ((is_page() || is_single()) && !is_admin()) {
    return addPostInfo($tpl, $content);
  }

  return $content;
}
function addPostInfo($insertion, $content)
{
  /*if (strpos($content, '</h2>') > strpos($content, '</p>'))
    return  $insertion . $content;
  else*/ return preg_replace('/(<\/h2>)/i', '\1' . $insertion, $content, 1);
}
