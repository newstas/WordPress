# Загоовки безопасности | SecurityHeaders

## Category: Security Headers от Really Simple SSL

(Category: Security Headers)(https://really-simple-ssl.com/security-headers/)

(Protecting site visitors with Security Headers - Защита посетителей сайта с помощью заголовков безопасности)(https://really-simple-ssl.com/protecting-site-visitors-with-security-headers/)

W3 Total Cache and Security Headers

How to set Security Headers on Apache and NGINX

How to find where (unwanted) security headers are set

How to use the Permission Policy header

[Manually adding recommended security headers on WordPress | Добавление рекомендуемых заголовков безопасности вручную в WordPress](https://really-simple-ssl.com/site-health-recommended-security-headers/)

Getting everything out of your security headers

How to use the Content Security Policy generator

Inserting HSTS header using PHP

HSTS: HTTP Strict Transport Security, and why it’s good to have it

## Расположение заголовков безопасности

По сути, есть три места, где можно установить заголовки безопасности для вашего веб-сайта WordPress, и последний установленный заголовок является активным. Порядок установки заголовков следующий:

- Плагины или файлы PHP (например, wp-config.php, function.php или плагин типа Really Simple SSL)
- Файлы конфигурации сервера (.htaccess, httpd.conf, nginx.conf)
- Прокси-серверы или службы сети доставки контента, такие как Cloudflare

### Плагины или файлы PHP

Существуют плагины, которые устанавливают заголовки в свои собственные файлы PHP, в wp-config.php или в файл function.php вашей темы. Если вы не можете найти, где были установлены заголовки безопасности, вы можете проверить эти файлы на наличие строк, устанавливающих эти заголовки. Примечание. Если вы не можете найти заголовок в wp-config.php или function.php, возможно, заголовок установлен внутри плагина. Затем вам нужно будет изменить настройку или удалить этот плагин, чтобы предотвратить повторное появление заголовка безопасности.

Apache и Litespeed

Если ваш сайт использует Apache, вам нужно будет найти файл .htaccess* в корневой папке вашего сайта. Для этого вы можете использовать плагин файлового менеджера. Откройте файл в режиме редактирования и найдите строку, начинающуюся с «заголовок (всегда) установлен», за которой следует заголовок, который вы хотите удалить, и удалите всю строку.

Примечание. Если вы не установили заголовок в .htaccess самостоятельно, возможно, это было сделано с помощью плагина. В этом случае вам нужно будет изменить настройку или удалить этот плагин, чтобы предотвратить повторное появление заголовка безопасности в .htaccess. Если заголовок безопасности не установлен в .htaccess, он может быть установлен в файле httpd.conf. На платформах общего хостинга у вас не будет доступа к файлу httpd.conf, и вам придется попросить вашего веб-хостера удалить установленные заголовки безопасности. в этом файле.

### Nginx 

Файлы конфигурации Nginx могут находиться в разных местах. На платформах общего хостинга у вас не будет доступа к файлам nginx.conf, и вам придется попросить вашего веб-хостера удалить заголовки безопасности, установленные в этих файлах.

### Cloudflare

В Cloudflare существует много разных способов установки заголовков безопасности. Есть работники Cloudflare, правила преобразования, настройки сертификатов и еще несколько непонятных способов. Если у вас есть нежелательные заголовки безопасности, установленные Cloudflare, проверьте этот URL-адрес , чтобы найти документацию о том, где их можно установить.

*В некоторых конфигурациях возможно, что .htaccess не доступен для прямой записи. На панели Really Simple SSL появится ошибка. Вы можете решить эту проблему, прочитав эту статью . Если вы следовали этой статье, перезагрузите панель управления, и уведомление должно исчезнуть.


## Добавление рекомендуемых заголовков безопасности вручную в WordPress

### Adding HSTS

```
# Really Simple SSL
Header always set Strict-Transport-Security: "max-age=31536000" env=HTTPS 
# End Really Simple SSL
```

Чтобы удалить HSTS. Установите  "max-age=0"

### Adding X-XSS-Protection

```
# Really Simple SSL
Header always set X-XSS-Protection "0"
# End Really Simple SSL
```

### Adding X-Content-Type-Options

```
# Really Simple SSL
Header always set X-Content-Type-Options "nosniff"
# End Really Simple SSL
```

### Adding Referrer Policy header

```
# Really Simple SSL
Header always set Referrer-Policy "strict-origin-when-cross-origin" 
# End Really Simple SSL
```

### Adding X-Frame-Options header

```
# Really Simple SSL
Header always set X-Frame-Options: "SAMEORIGIN"
# End Really Simple SSL
```

### Adding Permissions-Policy header

```
# Really Simple SSL
Header always set Permissions-Policy: "" 
# End Really Simple SSL
```




