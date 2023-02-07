# Удалить meta `generator`

В секции `<head>` по умолчанию выводится мета-тег generator, который содержит в себе версию WordPress. 
Никакой полезной роли это не несет, только позволяет злоумышленникам узнать версию движка, установленную 
на сайте.
  
```html
// Убираем версию WordPress <meta name="generator" content="WordPress 6.1.1" />
add_filter('the_generator', '__return_empty_string');
```

Это не единственное место, где отображается версия движка. Если хотите полностью скрыть её, 
читайте ниже:


# Скрываем версию WordPress из RSS-ленты и из `wp_head()`


Если вы загляните в свою RSS-ленту в виде XML, например через Google Chrome, то найдёте в ней эту строчку:

```
<generator>http://wordpress.org/?v=3.3.1</generator>
```

А теперь открываем исходный код сайта Ctrl + U в браузере и видим там:

```html
<meta name="generator" content="WordPress 3.3.1" />

```
Я не вижу смысла выставлять версию своего движка напоказ, поэтому просто суём эти несколько строк кода в файл functions.php:

```php
function remove_wp_version() {
	return '';
}
add_filter('the_generator', 'remove_wp_version');
```

> P.S. Также не забудьте удалить файл **readme.html**, ведь он тоже содержит версию WordPress, находится в корневой директории.


