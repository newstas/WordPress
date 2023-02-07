<?php 


// ОТКЛЮЧЕНИЕ ЛИШНИХ ФУНКЦИЙ
/* --------------------------------------------------------------------------
 * Удаляем лишнее из шапки
 * -------------------------------------------------------------------------- */
// Удаляет информацию о версии WordPress
remove_action( 'wp_head',           'wp_generator' ); // Убирает вывод используемого движка и его версии

// Убирает канонические линки
remove_action('wp_head',            'rel_canonical');

// Убирает вывод лишнего css изи плагина WP-PageNavi
remove_action('wp_head',            'pagenavi_css'); 

// Удаляет RSD ссылку для удаленной публикации
remove_action( 'wp_head',           'rsd_link' ); // Используется различными блог-клиентами или веб-сервисами для публикации/изменения записей в блоге

// Удаляет ссылку Windows для Live Writer
remove_action( 'wp_head',           'wlwmanifest_link' );  // Используется блог-клиентами, а вернее лишь одним из них - Windows Live Writer

// Удаляет короткую ссылку
remove_action( 'wp_head',           'wp_shortlink_wp_head', 10, 0); // Убирает короткую ссылку к текущей странице
remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );

// Удаляет ссылки на предыдущую и следующую статьи
remove_action( 'wp_head',           'adjacent_posts_rel_link', 10, 0 ); // Убирает ссылку на следующую запись
remove_action( 'wp_head',           'adjacent_posts_rel_link_wp_head', 10, 0 ); // Убирает связь с родительской записью
remove_action( 'wp_head',           'index_rel_link' ); // Убирает ссылку на главную страницу
remove_action( 'wp_head',           'start_post_rel_link', 10, 0 ); // Убирает ссылку на первую запись
remove_action( 'wp_head',           'parent_post_rel_link', 10, 0 ); // Убирает ссылку на предыдущую запись

// Удаляем dns prefetch
remove_action( 'wp_head',  'wp_resource_hints', 2 ); // убираем meta rel='dns-prefetch' href='//s.w.org'

// Удаляет ссылки RSS-лент записи и комментариев
remove_action( 'wp_head',           'feed_links', 2 ); // Формально если запретить данное действие, то в блоге не должны выводиться ссылки на основную ленту RSS и на RSS ленту комментариев. А на практике это работать не будет, так как функция wp_head не выводит эти самые ссылки на RSS ленты записей и комментариев, их вывод должен осуществляться вручную в файле header.php
// Удаляет ссылки RSS-лент категорий и архивов
remove_action( 'wp_head',           'feed_links_extra', 3 ); // Запрещаем вывод RSS фида для записей, тегов, рубрик и т.д. Таким образом, мы запрещаем создавать такие фиды, но тем не менее, они будут доступны, если добавить /feed в конец урла
// Отключаем RSS канал
function fb_disable_feed() {
	wp_redirect(get_option('siteurl'));
}
add_action('do_feed',               'fb_disable_feed', 1);
add_action('do_feed_rdf',           'fb_disable_feed', 1);
add_action('do_feed_rss',           'fb_disable_feed', 1);
add_action('do_feed_rss2',          'fb_disable_feed', 1);
add_action('do_feed_atom',          'fb_disable_feed', 1);

/* --------------------------------------------------------------------------
 * Отключаем REST API
 * -------------------------------------------------------------------------- */
// Отключаем сам REST API
add_filter('rest_enabled',                   '__return_false');

// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );

// Отключаем события REST API
remove_action( 'init',                       'rest_api_init' );
remove_action( 'rest_api_init',              'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request',              'rest_api_loaded' );

// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init',              'wp_oembed_register_route');
remove_filter( 'rest_pre_serve_request',     '_oembed_rest_pre_serve_request', 10, 4 );

remove_action( 'wp_head',                    'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'wp_head',                    'rest_output_link_wp_head' );
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
remove_action( 'wp_head',                    'wp_oembed_add_host_js');

/* --------------------------------------------------------------------------
 * Отключаем Emojii
 * -------------------------------------------------------------------------- */
remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_styles',  'print_emoji_styles' ); 
remove_filter( 'the_content_feed',    'wp_staticize_emoji' );
remove_filter( 'comment_text_rss',    'wp_staticize_emoji' ); 
remove_filter( 'wp_mail',             'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins',       'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/* --------------------------------------------------------------------------
 * Удаление параметра ver из добавляемых скриптов и стилей
 * -------------------------------------------------------------------------- */
function rem_wp_ver_css_js($src) {

	if (strpos( $src, 'ver=' )) {
		$src = remove_query_arg( 'ver', $src );
	}

	return $src;
}

add_filter( 'style_loader_src',  'rem_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'rem_wp_ver_css_js', 9999 );


