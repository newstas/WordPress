# Удаление/изменение метатегов WP Yoast SEO через фильтры

Большинство разработчиков сталкиваются с проблемами связанными с тем как выводятся метатеги 
в плагине Yoast SEO. Так например иногда могут появится дубликаты мета-тегов в head. 
Чтобы исправить такие проблемы, Yoast подготовил набор фильтров для решения подобных конфликтов 
с другими плагинами или темами.

## Исправление мета-тегов Yoast SEO через фильтры

Добавьте следующий код в файл темы functions.php. Другие хуки см. ниже в таблице.

```php
// Отключим роботс теги для страниц архивов
add_filter( 'wpseo_robots', 'joe_remove_yoast_meta' );
function joe_remove_yoast_meta( $filter ){

	// Добавьте сюда свои условия
	if( is_archive() ){
		return false;
	}

	return $filter;
}
```


## Удаление Нескольких Метатегов Yoast

Добавьте следующий код в файл темы functions.php. Другие хуки см. ниже в таблице.

```php
add_filter( 'wpseo_canonical', 'joe_remove_yoast_meta' );
add_filter( 'wpseo_metadesc', 'joe_remove_yoast_meta' );
function joe_remove_yoast_meta( $filter ){
	// Добавьте сюда свои условия
	if( is_archive() ){
		return false;
	}

	return $filter;
}
```


## Список всех фильтров мета-вывода Yoast

Ниже приведен полный список хуков для мета-тегов которые используются в Yoast:

**Название хука** | **Meta Output [# = Dynamic Value]**
```html
wpseo_title 	                        <title>#</title>
wpseo_robots 	                        <meta name="robots" content="#" />
wpseo_canonical 	                <link rel="canonical" href="#" />
wpseo_metadesc 	                        <meta name="description" content="#" />
wpseo_metakeywords 	                <meta name="keywords" content="#" />
wpseo_locale 	                        <meta property="og:locale" content="#" />
wpseo_opengraph_title 	                <meta property="og:title" content="#" />
wpseo_opengraph_desc 	                <meta property="og:description" content="#" />
wpseo_opengraph_url 	                <meta property="og:url" content="#" />
wpseo_opengraph_type 	                <meta property="og:type" content="website" />
wpseo_opengraph_site_name 	        <meta property="og:site_name" content="#" />
wpseo_opengraph_admin 	                <meta property="fb:admins" content="#" />
wpseo_opengraph_author_facebook 	<meta property="article:author" content="#" />
wpseo_opengraph_show_publish_date 	<meta property="article:published_time" content="#" />
wpseo_twitter_title 	                <meta name="twitter:title" content="#" />
wpseo_twitter_description 	        <meta name="twitter:description" content="#" />
wpseo_twitter_card_type 	        <meta name="twitter:card" content="#" />
wpseo_twitter_site 	                <meta name="twitter:site" content="#" />
wpseo_twitter_image 	                <meta name="twitter:image" content="#" />
wpseo_twitter_creator_account 	        <meta name="twitter:creator" content="#" />
wpseo_json_ld_output 	                <script type="application/ld+json">#<script/>
```

