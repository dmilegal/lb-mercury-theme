<?
#### Для заголовка
add_filter('the_title', 'do_shortcode');

// Обработка шорткодов в мета-заголовке Yoast SEO

#### Для мета-заголовка
add_filter('wpseo_title', 'do_shortcode', 10, 1);

#### Для мета-описания
add_filter('wpseo_metadesc', 'do_shortcode', 10, 1);
// Обработка шорткодов в Open Graph заголовке
add_filter('wpseo_opengraph_title', 'do_shortcode', 10, 1);

// Обработка шорткодов в Open Graph описании
add_filter('wpseo_opengraph_desc', 'do_shortcode', 10, 1);

// Обработка шорткодов в Twitter заголовке
add_filter('wpseo_twitter_title', 'do_shortcode', 10, 1);

// Обработка шорткодов в Twitter описании
add_filter('wpseo_twitter_description', 'do_shortcode', 10, 1);