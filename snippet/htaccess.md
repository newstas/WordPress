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

Отключить `xmlrpc.php` полностью
```
# BEGIN my disable 'xmlrpc.php' 
<Files xmlrpc.php>
Order Allow,Deny
Deny from all
</Files>

# END my disable 'xmlrpc.php'
```
