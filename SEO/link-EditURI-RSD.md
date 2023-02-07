# Удаляем RSD

Этот тег выглядит следующим образо:

```html
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://ваш-сайт.ru/xmlrpc.php?rsd" />
```

Если вы публикуете\редактируете свои посты только через админку и не используете для этих 
целей какие-либо сервисы или клиенты (например приложения для iPhone или iPad), то можете удалить этот тег:

```php
remove_action( 'wp_head', 'rsd_link' );
```
