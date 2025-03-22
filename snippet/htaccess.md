## Файл .htaccess

Лимиты WordPress
```
# BEGIN my limit
php_value memory_limit 256M
php_value upload_max_filesize 64M
php_value post_max_size 64M
php_value max_execution_time 300
php_value max_input_time 1000

# END my limit
```
`max_execution_time` – конфигурация тайм-аута (Timeout), это время, необходимое для запуска команд и выполнения скриптов. Необходимо 
увеличить, если вы загружаете большие файлы на сервер.
В случае нехватки выдает ошибку Допустимый размер памяти ... байт исчерпан (Allowed memory size of ... bytes exhausted):
> Fatal error: Allowed memory size of 33554432 bytes exhausted (tried to allocate 2348617 bytes) in /home4/xxx/public_html/wp-includes/plugin.php
> on line xxx

Максимальное время в секундах, которое разрешено скрипту. запустить до того, как он будет завершен парсером. Это помогает
предотвратить загрузку сервера плохо написанными скриптами. настройка по умолчанию: 30. Apache имеет дерективу Timeout в IIS 
(Internet Information Services для Windows) имеют тайм-аут и CGI (Common Gateway Interface — общий интерфейс шлюза)/Server side 
(серверного движка). Оба значения по умолчанию 300 секунд (5 минут). При запуске PHP из команды строка настройка 
по умолчанию 0 — бесконечное время выполнения скрипта.

Отключить `xmlrpc.php` полностью
```
# BEGIN my disable 'xmlrpc.php' 
<Files xmlrpc.php>
Order Allow,Deny
Deny from all
</Files>

# END my disable 'xmlrpc.php'
```
