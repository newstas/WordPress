# Удаляем линк `wlwmanifest` в WordPress

Ссылка wlw manifest – это возможность редактировать и изменять статьи на сайте WordPress при помощи 
программы Windows Live Writer.

Так выглядит `link` в коде:

```html
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://wpcourses.ru/wp-includes/wlwmanifest.xml" />
```

Убираем `link` с помощью код: при помощи кода в файле function.php можно отключить вывод wlw manifest.

```php
remove_action( 'wp_head', 'wlwmanifest_link' );
```
