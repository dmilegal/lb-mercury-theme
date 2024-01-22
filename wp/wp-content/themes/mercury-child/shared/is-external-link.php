<?
function isExternalLink($url) {
  $site_url = get_site_url();

  $url_host = parse_url($url, PHP_URL_HOST);
  $site_url_host = parse_url($site_url, PHP_URL_HOST);

  if ($url_host && $site_url_host && $url_host !== $site_url_host) {
      return true;
  } else {
      return false;
  }
}
