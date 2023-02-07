# Удаляем RSD-ссылку

Используется разными блог-клиентами или веб-сервисами для удаленной публикации или изменений 
в блогах. Ссылка прописывается в `<head> по умолчанию и выглядит следующим образом:

```html
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://ваш-сайт.ru/xmlrpc.php?rsd" />
```

Если вы публикуете\редактируете свои посты только через админку и не используете для этих 
целей какие-либо сервисы или клиенты (например приложения для iPhone или iPad), то можете удалить этот тег:

```php
remove_action( 'wp_head', 'rsd_link' );
```
  
Внешние соединения — это потенциальная уязвимость в безопасности всего сайта. Хакеры с их 
помощью могут получать доступ к ресурсу и управлять им как захотят. 