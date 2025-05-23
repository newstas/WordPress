# Файл .htaccess

## Лимиты WordPress (2025)

 Мои лимиты
 ```
# BEGIN my limit
php_value memory_limit 256M
php_value upload_max_filesize 256M
php_value post_max_size 256M
php_value max_execution_time 300
php_value max_input_time 1000

# END my limit
```

Настройки от [presscustomizr](https://docs.presscustomizr.com/article/171-fixing-maximum-upload-and-php-memory-limit-issues)
```
php_value memory_limit 256M
php_value upload_max_filesize 64M
php_value post_max_size 64M
php_value max_execution_time 300
php_value max_input_time 1000
```

Настройки от [wpbeginner](https://www.wpbeginner.com/wp-tutorials/how-to-increase-the-maximum-file-upload-size-in-wordpress/)
```
php_value upload_max_filesize 256M
php_value post_max_size 256M
php_value max_execution_time 300
php_value max_input_time 300
```

**Максимальные** загрузки и лимиты памяти PHP для WordPress
```
php_value   memory_limit          3000M 
php_value   upload_max_filesize   1000M 
php_value   post_max_size         2000M 
php_value   max_execution_time    1000 
php_value   max_input_time        1000 
php_value   max_input_vars        9000
```


# Файл php.ini

Настройки от [presscustomizr](https://docs.presscustomizr.com/article/171-fixing-maximum-upload-and-php-memory-limit-issues)
```
memory_limit = 256M
upload_max_filesize = 64M
upload_max_size = 64M
post_max_size = 64M
max_execution_time = 300
max_input_time = 1000
```

Настройки от [wpbeginner](https://www.wpbeginner.com/wp-tutorials/how-to-increase-the-maximum-file-upload-size-in-wordpress/)

Если вы используете общий хостинг , то вы можете не увидеть файл php.ini в вашем каталоге хостинга. Если вы его не видите, 
то просто создайте файл с именем php.ini и загрузите его в корневую папку.

Затем добавьте в файл следующий фрагмент кода: 
```
upload_max_filesize = 256M
post_max_size = 256M
max_execution_time = 300
```

PHP использует представленные здесь значения **по умолчанию**, только если не подключили файл php.ini:
```
memory_limit =          128M
upload_max_filesize =   2M 	
post_max_size =         8M
max_input_vars =        1000 	 	 
max_file_uploads =      20
```


# Файл wp-config.php

Вставьте следующий код в конец файла:

Настройки от [presscustomizr](https://docs.presscustomizr.com/article/171-fixing-maximum-upload-and-php-memory-limit-issues)
```
define('WP_MEMORY_LIMIT', '256M');
```

# Файл functions.php

Настройки от [wpbeginner](https://www.wpbeginner.com/wp-tutorials/how-to-increase-the-maximum-file-upload-size-in-wordpress/)

Редактируем с помощью плагина WPCode
```
@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );
```


## Ограничения ресурсов

### memory_limit 

`memory_limit` в Core – объем памяти, необходимой для загрузки файлов и выполнения команд. Изменение предела памяти поможет вам разместить 
длинный контент и множество изображений. По умолчанию он установлен на 256 МБ, но вы можете увеличить предел памяти.

Директива задаёт максимальный объем памяти в байтах, который разрешается использовать скрипту. Это помогает предотвратить ситуацию, 
при которой плохо написанный скрипт съедает всю доступную память сервера. Чтобы убрать ограничения, установите для директивы значение `-1`.
Объём измеряется в байтах, если значение параметра указали как целое число (int). 

В случае нехватки памяти, если вашему коду WordPress требуется больше, чем выделено памяти по умолчанию, вы увидите следующее сообщение об ошибке: 
**Allowed memory size of ... bytes exhausted** (Допустимый размер памяти ... байт исчерпан):
> Fatal error: **Allowed memory size of 33554432 bytes exhausted (tried to allocate 2348617 bytes) in
> /home4/xxx/public_html/wp-includes/plugin.phpon line xxx**

### upload_max_filesize 

`upload_max_filesize` в Core – редактирование этого параметра позволяет загружать большие медиафайлы и увеличивать лимит.  `post_max_size` 
должен быть больше, чем это значение. 

Возможная ошибка при загрузки темы — **The uploaded file exceeds the upload_max_filesize directive in php.ini** (Загруженный 
файл превышает директиву upload_max_filesize в php.ini):

> The uploaded file exceeds the upload_max_filesize directive in php.ini

Возможная ошибка при загрузке изображения — **...exceeds the maximum upload size for this site** (превышает максимальный размер 
загрузки для этого сайта)

> ...exceeds the maximum upload size for this site (превышает максимальный размер загрузки для этого сайта)

### post_max_size 

`post_max_size` в Core – если ваши записи в блоге содержат много изображений и видео, то размер записи увеличится. Чтобы избежать ошибок, 
вы можете увеличить `post_max_size`, чтобы разместить более обширные статьи.

Устанавливает максимально допустимый размер данных, отправляемых методом POST. Это значение также влияет на загрузку файлов. 
Для загрузки больших файлов это значение должно быть больше значения директивы `upload_max_filesize`. В сущности, `memory_limit` должна 
быть больше чем `post_max_size`. Объём измеряется в байтах, если значение параметра указали как целое число (int). 

## Конфигурация времени выполнения

### max_execution_time 

`max_execution_time` (максимальное_время_выполнения) в Core – конфигурация тайм-аута (Timeout), это время, необходимое для запуска 
команд и выполнения скриптов. Необходимо увеличить, если вы загружаете большие файлы на сервер. 

> Директива `max_execution_time` влияет только на время выполнения самого скрипта. 

Максимальное время в секундах, которое разрешено скрипту запустить до того, как он будет завершен парсером. Это помогает
предотвратить загрузку сервера плохо написанными скриптами. настройка по умолчанию: `30`. Apache имеет директиву Timeout, а IIS имеет 
функцию тайм-аута CGI\* (Common Gateway Interface — общий интерфейс шлюза) / Server side (серверного движка). Оба значения по умолчанию 
составляют `300` секунд (5 минут). При запуске PHP из команды строка настройка по умолчанию `0` — бесконечное время выполнения 
скрипта — это оптимальное решение для разработки и тестирования проектов, когда с ним ещё не работают пользователи.

> \* CGI (от англ. Common Gateway Interface — «общий интерфейс шлюза») — стандарт, в котором описано, как веб-сервер должен запускать 
прикладные программы (скрипты), как именно должен передавать им HTTP-запросы, о том, как программы должны передавать серверу результаты 
своей работы. Программу, работающую с веб-сервером по протоколу CGI иногда называют шлюзом, хотя чаще называют CGI-скрипт или CGI-программа.

### max_input_time 

`max_input_time` (максимальное_время_ввода) в Core — устанавливает максимальное время в секундах, которое разрешено скрипту парсить входные данные, 
такие как POST и GET. Отсчет времени начинается с момента PHP вызывается на сервере и завершается с началом выполнения. 
Значение по умолчанию `-1` означает, что вместо этого используется `max_execution_time.` Установите значение `0`, чтобы разрешить 
неограниченное время.

> Директива `max_input_time` устанавливает максимальное время в секундах, в течение которого скрипту разрешается получать входные данные;
время загрузки файла тоже включается.

### max_input_vars (факультативно) 

`max_input_vars` в Core — сколько входных переменных может быть принято (ограничение применяется к суперглобальным $_GET, $_POST и $_COOKIE по 
отдельности). Использование этой директивы снижает вероятность атак типа «отказ в обслуживании», использующих коллизии хэшей. Если входных 
переменных больше, чем указано в этой директиве, выдается E_WARNING, и дальнейшие входные переменные отсекаются из запроса.)

### max_file_uploads (факультативно) 

`max_file_uploads` в Core — максимально разрешённое количество одновременно закачиваемых файлов. Пустые поля загрузки не рассматриваются 
этим ограничением.

### PHP-директивы принимают сокращённые байтовые значения

Доступные варианты: `K` — **килобайты**, `M` — **мегабайты** и `G` — **гигабайты**; значения регистронезависимы. Всё остальное рассматривается 
как байты. Значение `1M` равно одному мегабайту или `1 048 576` байтам. Значение `1K` равно одному килобайту или `1024 байтам`. Эти сокращения 
можно указывать в файле php.ini и в функции ini_set(). Обратите внимание, что числовое значение приводится к **целому числу** (**int**); *например, 
значение `0.5M` интерпретируется как `0`*. 
> **Замечание: килобайт и кибибайт**
>
> В PHP-нотации один килобайт равен **1024 байтам**, тогда как стандарт IEC считает это кибибайтом. В итоге: и **килобайт** (k), и **кибибайт** (K)
рассматриваются как равные 1024 байтам. 

### Значения

`64`/`128`/`192`/`256`/`384`/`512`/`1024` M


# Отключить `xmlrpc.php` полностью

```
# BEGIN my disable 'xmlrpc.php' 
<Files xmlrpc.php>
Order Allow,Deny
Deny from all
</Files>

# END my disable 'xmlrpc.php'
```
