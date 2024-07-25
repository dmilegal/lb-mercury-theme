<?
add_filter("wpseo_breadcrumb_links", "wpse_100012_override_yoast_breadcrumb_trail");

function wpse_100012_override_yoast_breadcrumb_trail($links)
{
  if (!$links) return $links;
  
  foreach ($links as &$link) {

    if (isset($link['url']) && ($link['url'] == home_url('/') || $link['url'] == home_url())) {
      $link['text'] = '<i class="icon-home-solid"><span class="lb-breadcrumbs__hidden">' . $link['text'] . '</span></i>';
      break;
    }
  }

  return $links;
}
