<?
remove_editor_styles('style-editor.css');
function disable_old_assets()
{
  wp_deregister_style('mercury-style');
  wp_deregister_style('mercury-media');
  wp_deregister_style('mercury-googlefonts');
  wp_deregister_style('mercury-block-editor-styles');
  wp_deregister_style('aces-style');
  wp_deregister_style('fontawesome');


  wp_deregister_script('mercury-global-js');
  wp_deregister_script('fontawesome');
  wp_deregister_script('mercury-floating-header');
}
add_action('wp_enqueue_scripts', 'disable_old_assets', 999);
add_action('enqueue_block_editor_assets', 'disable_old_assets', 999);


add_filter('wp_default_scripts', 'remove_jquery_migrate');
function remove_jquery_migrate($scripts)
{

  if (empty($scripts->registered['jquery']) || is_admin()) {
    return;
  }

  $deps = &$scripts->registered['jquery']->deps;

  $deps = array_diff($deps, ['jquery-migrate']);
}

// Enqueue custom css and js
function enqueue_main_assets()
{
  enqueue_assets_by_name('main');
  enqueue_assets_by_name('blocks');

  // style ea accordion plugin
  wp_enqueue_style('ea-accordion', '', ['sp-ea-style'], wp_get_theme()->get('Version'));

  // style cmplz plugin
  wp_enqueue_style('cookie-banner', '', ['cmplz-general'], wp_get_theme()->get('Version'));

  // style age gate plugin
  wp_enqueue_style('age-gate-banner', '', ['age-gate'], wp_get_theme()->get('Version'));

  //wp_enqueue_script( 'jquery-fix', get_stylesheet_directory_uri() . '/js/libs/jquery-fix.js', array() );
  //wp_enqueue_script('child-scripts', get_stylesheet_directory_uri() . '/js/child-scripts.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'enqueue_main_assets', 9);


// Enqueue components assets
function enqueue_components_assets($slug, $name, $args)
{
  $list = explode('/', $slug);
  if (!in_array('theme-parts', $list) || !(in_array('atoms', $list)
    || in_array('molecules', $list) || in_array('organisms', $list) || in_array('cells', $list)
    || in_array('templates', $list) || in_array('organs', $list))) return;

  enqueue_assets_by_name(end($list));
}
//add_action('get_template_part', 'enqueue_components_assets', 10, 3);

// enqueue editor styles
function add_editor_styles()
{
  add_theme_support('editor-styles');
  add_editor_style('frontend/dist/css/editor.css');
};
add_action('after_setup_theme', 'add_editor_styles');

function enqueue_block_editor_styles()
{
  enqueue_assets_by_name('editor-reset');
  enqueue_assets_by_name('blocks');
  enqueue_assets_by_name('editor-blocks');
}
add_action('enqueue_block_editor_assets', 'enqueue_block_editor_styles');

function enqueue_block_editor_scripts()
{
  wp_enqueue_script(
    'editor-custom',
    get_stylesheet_directory_uri() . '/frontend/dist/js/editor.js',
    array('wp-blocks'),
    wp_get_theme()->get('Version'),
    false
  );
}
add_action('enqueue_block_editor_assets', 'enqueue_block_editor_scripts');

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

  wp_enqueue_style($name, '', [], wp_get_theme()->get('Version'));

  wp_enqueue_script($name, '', [], wp_get_theme()->get('Version'), [
    'in_footer' => true,
    'strategy'  => 'async',
  ]);

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
      wp_enqueue_style(getAssetName($file), '', [], wp_get_theme()->get('Version'));
    elseif ($isJs)
      wp_enqueue_script(getAssetName($file), '', [], wp_get_theme()->get('Version'), [
        'in_footer' => true,
        'strategy'  => 'defer',
      ]);
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
      wp_register_style(getAssetName($file), $file_url, [], wp_get_theme()->get('Version'));
    elseif ($isJs)
      wp_register_script(getAssetName($file), $file_url, [], wp_get_theme()->get('Version'), [
        'in_footer' => true,
        'strategy'  => 'defer',
      ]);
  }
}

require_once "emoji-fix.php";