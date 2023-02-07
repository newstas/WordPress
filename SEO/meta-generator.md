# Удалить meta `generator`

В секции `<head>` по умолчанию выводится мета-тег generator, который содержит в себе версию WordPress. 
Никакой полезной роли это не несет, только позволяет злоумышленникам узнать версию движка, установленную 
на сайте.
  
```html
// Убираем версию WordPress <meta name="generator" content="WordPress 6.1.1" />
add_filter('the_generator', '__return_empty_string');
```


