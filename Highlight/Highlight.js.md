title: About your personal dashboard
versions:
  fpt: '*'
  ghes: '>=2.20'

# Highlight.js

Highlight.js — популярная библиотека для подсветки синтаксиса, которая поддерживает более 1
80 языков программирования. Она также может автоматически определяет язык программирования без необходимости 
вручную указывать его в классе.

```html copy
<pre><code class="language-LANGUAGES">
CODE
</code></pre>
```
[Поддерживаемые языки Highlight.js | Supported Languages](https://github.com/highlightjs/highlight.js/blob/main/SUPPORTED_LANGUAGES.md)

[Репозиторий Highlight.js](https://github.com/highlightjs/highlight.js/tree/main)

[Комментарии для Highlight.js](https://github.com/github/docs/blob/main/data/code-languages.yml)

[Вложение файлов](https://docs.github.com/ru/get-started/writing-on-github/working-with-advanced-formatting/attaching-files)


## Примеры

Вставка кода в HTML языка Python через библиотеку Highlight.js (здесь не подключена библиотека Highlight.js, 
поэтому вставной код Python не подсвечивается):

```html
<pre><code class="language-python">
def greet(name): 
    print(f"Hello, {name}!") 
</code></pre>
```

Вставка кода в GitHub  языка Python через библиотеу Linguist:

```python
def greet(name): 
    print(f"Hello, {name}!")
```

GitHub использует библиотеку Linguist с открытым кодом для определения языков файлов с целью выделения синтаксиса 
и формирования статистики репозитория.

Пример подстветки кода Bush:

```bash

#!/bin/bash

# Пример скрипта, выводящего текст в терминал

# Объявление переменной

greeting="Добро пожаловать в мир bash скриптов!"

# Вывод значения переменной

echo $greeting

```

Октиконы — это набор значков SVG, созданных GitHub для GitHub. [Primer Octicons](https://github.com/primer/octicons/tree/main)



