<?
function disable_old_assets()
{
  wp_deregister_style('mercury-style');
  wp_deregister_style('mercury-media');
  wp_deregister_style('mercury-googlefonts');
  wp_deregister_style('mercury-block-editor-styles');

  wp_deregister_script('mercury-global-js');
  
}
add_action('wp_enqueue_scripts', 'disable_old_assets', 999);
add_action('enqueue_block_editor_assets', 'disable_old_assets', 999);


// Enqueue custom css and js
function enqueue_main_assets()
{
  enqueue_assets_by_name('main');

  //wp_enqueue_script( 'jquery-fix', get_stylesheet_directory_uri() . '/js/libs/jquery-fix.js', array() );
  //wp_enqueue_script('child-scripts', get_stylesheet_directory_uri() . '/js/child-scripts.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'enqueue_main_assets', 9);

// Enqueue components assets
function enqueue_components_assets($slug, $name, $args)
{
  $list = explode('/', $slug);
  if (!in_array('components', $list)) return;

  enqueue_assets_by_name(end($list));
}
add_action('get_template_part', 'enqueue_components_assets', 10, 3);

// enqueue editor styles
function enqueue_block_editor_styles()
{
  enqueue_assets_by_name('editor');
}
add_action('enqueue_block_editor_assets', 'enqueue_block_editor_styles');

// register all assets
function register_all_assets()
{
  foreach (['js/libs/', 'css/libs/', 'js/', 'css/', 'js/blocks/', 'css/blocks/', 'js/commons/', 'css/commons/'] as $path) {
    $dir = get_stylesheet_directory() . '/frontend/dist/' . $path;

    register_assets_by_path($dir . "*.css");
    register_assets_by_path($dir . "*.js");
  }
}
add_action('init', 'register_all_assets');

function enqueue_assets_by_name($name)
{
  foreach (['js/libs/', 'css/libs/'] as $path) {
    $dir = get_stylesheet_directory() . '/frontend/dist/' . $path;

    enqueue_assets_by_path($dir . "*chk-" . $name . "-chk*.css");
    enqueue_assets_by_path($dir . "*chk-" . $name . "-chk*.js");
  }

  wp_enqueue_style($name);

  wp_enqueue_script($name);

  foreach (['js/commons/', 'css/commons/'] as $path) {
    $dir = get_stylesheet_directory() . '/frontend/dist/' . $path;

    enqueue_assets_by_path($dir . "*chk-" . $name . "-chk*.css");
    enqueue_assets_by_path($dir . "*chk-" . $name . "-chk*.js");
  }
}

function enqueue_assets_by_path($assetPath)
{
  $files = glob($assetPath);
  $isJs = str_contains($assetPath, '.js');
  $isCss = str_contains($assetPath, '.css');

  foreach ($files as $file) {
    if ($isCss)
      wp_enqueue_style(getAssetName($file));
    elseif ($isJs)
      wp_enqueue_script(getAssetName($file));
  }
}

function register_assets_by_path($assetPath)
{
  $files = glob($assetPath);
  $isJs = str_contains($assetPath, '.js');
  $isCss = str_contains($assetPath, '.css');

  foreach ($files as $file) {
    $file_url = str_replace(get_template_directory(), get_template_directory_uri(), $file);
    if ($isCss)
      wp_register_style(getAssetName($file), $file_url, [], filemtime($file));
    elseif ($isJs)
      wp_register_script(getAssetName($file), $file_url, [], filemtime($file), [
        'in_footer' => true,
        'strategy'  => 'defer',
      ]);
  }
}
