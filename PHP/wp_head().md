# wp_head 

## хук-событие │ WP 1.5.0

Событие срабатывает в `<head>` части страницы. В момент этого события обычно подключаются скрипты 
(jquery и другие), стили (css сайта) и разные SEO мета-теги страницы (title, description, robots). 
Это один из основных хуков темы (шаблона) WordPress.

> `wp_head()` — хук для подключения CSS, JS, jQuery и добавления мета-тегов

Функция, а точнее хук WordPress do_action('wp_head'), используется для заполнения тега `<head>`, 
а в него, как вы знаете, можно затолкать вот что:

- CSS,
- JavaScript (в том числе jQuery),
- какой-нибудь HTML-код, например мета-теги;

Возникает следующий вопрос — для чего собственно нужна эта функция, если я допустим могу открыть
файл темы и вставить туда всё, что захочу вручную? Да, возможно у вас и получится это сделать, 
а вот плагины не могут редактировать файлы темы и движка — как раз для них и нужны все эти хуки.

Это событие вызывается одноименной функцией `wp_head()`, которая в свою очередь вызывается в файле 
темы *header.php* перед тегом `</head>`.

Сама по себе функция не имеет никаких параметров и ничего не возвращает.

Вызов функции `wp_head()` обязателен для всех тем (шаблонов) WordPress. Делается так:

```php
    ...
	<?php wp_head(); ?>
</head>
```

В момент этого события срабатывает очень много «родных» функций WordPress. Например, одна из таких 
функций добавляет подключенные через `wp_enqueue_style()` стили.

Это событие активно используется самим WordPress и многими плагинами, например SEO плагинами. 
Поэтому это очень важное событие.

Этот хук предназначен в первую очередь для разработчиков тем. Они обязаны добавлять функцию `wp_head()` 
в создаваемую тему. Чтобы плагины могли подключаться к хуку и добавлять данные в заголовки HTML.

> Есть еще одно аналогичное событие - wp_footer - но оно вызывается функцией `wp_footer()` в подвале 
  шаблона - файле *footer.php*. 
  
  
  
## Удаление функций WP из wp_head

WordPress по умолчанию подключает кучу функций к хуку wp_head. Большая часть подключаемых к хуков находятся 
в файле ядра *wp-includes/default-filters.php*:

```php
add_action( 'wp_head',             '_wp_render_title_tag',            1     );
add_action( 'wp_head',             'wp_enqueue_scripts',              1     );
add_action( 'wp_head',             'wp_resource_hints',               2     );
add_action( 'wp_head',             'feed_links',                      2     );
add_action( 'wp_head',             'feed_links_extra',                3     );
add_action( 'wp_head',             'rsd_link'                               );
add_action( 'wp_head',             'wlwmanifest_link'                       );
add_action( 'wp_head',             'adjacent_posts_rel_link_wp_head', 10, 0 );
add_action( 'wp_head',             'locale_stylesheet'                      );
add_action( 'wp_head',             'noindex',                          1    );
add_action( 'wp_head',             'print_emoji_detection_script',     7    );
add_action( 'wp_head',             'wp_print_styles',                  8    );
add_action( 'wp_head',             'wp_print_head_scripts',            9    );
add_action( 'wp_head',             'wp_generator'                           );
add_action( 'wp_head',             'rel_canonical'                          );
add_action( 'wp_head',             'wp_shortlink_wp_head',            10, 0 );
add_action( 'wp_head',             'wp_site_icon',                    99    );
```

Чтобы удалить подключенный хук, используйте функцию `remove_action()` с нужным приоритетом, 
в плагине или файле темы functions.php.

Например, удалим ссылки на фиды:

```php
remove_action( 'wp_head', 'feed_links', 2 );
```

### Приоритет через хук `wp_head`

Если подключается не файл, а код и нужно учесть приоритет подключения, то его можно указать в третьем параметр add_action().


### Готовый код для удаления лишнего с `<head>`

```php
// Удаляем лишнее с head части сайта
// 2.0
remove_action( 'wp_head', 'feed_links_extra', 3 ); // ссылки доп. фидов (на рубрики)
remove_action( 'wp_head', 'feed_links',       2 ); // ссылки фидов (основные фиды)
// <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://example.com/xmlrpc.php?rsd" /> для публикации статей через сторонние сервисы
remove_action( 'wp_head', 'rsd_link'            );
// <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://example.com/wp-includes/wlwmanifest.xml" /> . Используется клиентом Windows Live Writer.
remove_action( 'wp_head', 'wlwmanifest_link'    );
//remove_action( 'wp_head', 'index_rel_link'      ); // не поддерживается с версии 3.3

add_filter('the_generator', '__return_empty_string'); // Убираем версию WordPress

// 3.0
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 ); // Ссылки на соседние статьи (<link rel='next'... <link rel='prev'...)
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );// Короткая ссылка - без ЧПУ <link rel='shortlink'

// 4.6
remove_action( 'wp_head', 'wp_resource_hints', 2); // Prints resource hints to browsers for pre-fetching, pre-rendering and pre-connecting to web sites.
```

Также вместе с этим можно удалить REST API


## Где используется хук в WordPress

```php
// wp-activate.php 117

add_action( 'wp_head', 'wpmu_activate_stylesheet' );

// wp-activate.php 98

add_action( 'wp_head', 'do_activate_header' );

// wp-activate.php 118

add_action( 'wp_head', 'wp_strict_cross_origin_referrer' );

// wp-includes/block-template.php 110

add_action( 'wp_head', '_block_template_viewport_meta_tag', 0 );

//wp-includes/block-template.php 113

remove_action( 'wp_head', '_wp_render_title_tag', 1 ); // Remove conditional title tag rendering...

// wp-includes/block-template.php 114

add_action( 'wp_head', '_block_template_render_title_tag', 1 ); // ...and make it unconditional.

// wp-includes/class-wp-admin-bar.php 60

add_action( 'wp_head', 'wp_admin_bar_header' );

// wp-includes/class-wp-admin-bar.php 77

add_action( 'wp_head', $header_callback );

// wp-includes/class-wp-customize-manager.php 1933

add_action( 'wp_head', array( $this, 'customize_preview_loading_style' ) );

// wp-includes/class-wp-customize-manager.php 1934

add_action( 'wp_head', array( $this, 'remove_frameless_preview_messenger_channel' ) );

// wp-includes/default-filters.php 341

add_action( 'wp_head', 'wp_custom_css_cb', 101 );

// wp-includes/default-filters.php 338

add_action( 'wp_head', 'wp_generator' );

// wp-includes/default-filters.php 339

add_action( 'wp_head', 'rel_canonical' );

// wp-includes/default-filters.php 340

add_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

// wp-includes/default-filters.php 646

add_action( 'wp_head', 'wp_oembed_add_host_js' ); // Back-compat for sites disabling oEmbed host JS by removing action.

// wp-includes/default-filters.php 342

add_action( 'wp_head', 'wp_site_icon', 99 );

// wp-includes/default-filters.php 457

add_action( 'wp_head', 'wp_post_preview_js', 1 );

// wp-includes/default-filters.php 520

add_action( 'wp_head', '_custom_logo_header_styles' );

// wp-includes/default-filters.php 591

add_action( 'wp_head', 'wp_maybe_inline_styles', 1 ); // Run for styles enqueued in <head>.

// wp-includes/default-filters.php 645

add_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// wp-includes/default-filters.php 337

add_action( 'wp_head', 'wp_print_head_scripts', 9 );

// wp-includes/default-filters.php 335

add_action( 'wp_head', 'print_emoji_detection_script', 7 );

// wp-includes/default-filters.php 336

add_action( 'wp_head', 'wp_print_styles', 8 );

// wp-includes/default-filters.php 327

add_action( 'wp_head', 'wp_preload_resources', 1 );

// wp-includes/default-filters.php 311

add_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );

// wp-includes/default-filters.php 334

add_action( 'wp_head', 'wp_robots', 1 );

// wp-includes/default-filters.php 325

add_action( 'wp_head', 'wp_enqueue_scripts', 1 );

// wp-includes/default-filters.php 326

add_action( 'wp_head', 'wp_resource_hints', 2 );

// wp-includes/default-filters.php 324

add_action( 'wp_head', '_wp_render_title_tag', 1 );

// wp-includes/default-filters.php 328

add_action( 'wp_head', 'feed_links', 2 );

// wp-includes/default-filters.php 329

add_action( 'wp_head', 'feed_links_extra', 3 );

// wp-includes/default-filters.php 330

add_action( 'wp_head', 'rsd_link' );

// wp-includes/default-filters.php 331

add_action( 'wp_head', 'wlwmanifest_link' );

// wp-includes/default-filters.php 332

add_action( 'wp_head', 'locale_stylesheet' );

// wp-includes/deprecated.php 2405

remove_action( 'wp_head', 'feed_links_extra', 3 ); // Just do this yourself in 3.0+.

// wp-includes/theme.php 2858

add_action( 'wp_head', $args[0]['wp-head-callback'] );

// wp-includes/theme.php 2872

add_action( 'wp_head', $args[0]['wp-head-callback'] );

// wp-includes/theme.php 3013

remove_action( 'wp_head', $support[0]['wp-head-callback'] );

// wp-includes/theme.php 3027

remove_action( 'wp_head', $support[0]['wp-head-callback'] );

// wp-includes/widgets/class-wp-widget-recent-comments.php 35

add_action( 'wp_head', array( $this, 'recent_comments_style' ) );

// wp-signup.php 30

add_action( 'wp_head', 'do_signup_header' );

// wp-signup.php 87

add_action( 'wp_head', 'wpmu_signup_stylesheet' );


