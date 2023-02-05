# wp_head 

## хук-событие │ WP 1.5.0

Событие срабатывает в `<head>` части страницы. В момент этого события обычно подключаются скрипты 
(jquery и другие), стили (css сайта) и разные SEO мета-теги страницы (title, description, robots). 
Это один из основных хуков темы (шаблона) WordPress.

Это событие вызывается одноименной функцией `wp_head()`, которая в свою очередь вызывается в файле 
темы *header.php* перед тегом `</head>`.

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
