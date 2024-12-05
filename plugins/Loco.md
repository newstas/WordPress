# Loco Translate — переводчик сайта

По умолчанию стоит путь для **«Индивидуального»** кастомного перевода, так и оставьте. Именно он является 
приоритетным при загрузке сайта. Если вы перевели только часть строк, то недостающие добавятся из системного файла.

Кроме того, только эта директория является защищённой — **работа не исчезнет после очередного обновления**. 
**Авторский** и **Системный** варианты сохранения оставьте **для разработчиков**.

> Непереведённые английские строчки выделены жирным шрифтом.

```
// Файл русификации должен быть расположен по адресу:

wp-content/languages/loco/themes/***-ru.po

// Оригинальный шаблон перевода

wp-content/themes/***/languages/***.pot
```

> Если в оригинальной фразе стоят специальные символы, скопируйте их и в точности вставьте в русский вариант.

Три расширениея файлов перводов:

- `.POT` (Portable Object Template) — содержит только оригинальный английский текст.
- `.PO` (Portable Object) — хранит оригинальный текст и его перевод.
- `.MO` (Machine Object) — перекодированный PO файл в двоичный формат, создаётся автоматически, не предназначен
для чтения людьми. Именно его использует WordPress. 

На сервере находятся целых два файла с расширениями `.mo` и `.po` — это и есть файлы русификации. Оригинальный `.pot`, 
который используется как шаблон для перевода.