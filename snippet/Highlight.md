# Highlight.js

Highlight.js — популярная библиотека для подсветки синтаксиса, которая поддерживает более 1
80 языков программирования. Она также может автоматически определяет язык программирования без необходимости 
вручную указывать его в классе.

Вставка кода в HTML языка Python (здесь не подключена библиотека Highlight.js, поэтому вставной код Python 
не подсвечивается):

```html
<pre><code class="language-python">
def greet(name): 
    print(f"Hello, {name}!") 
</code></pre>
```

Вставка кода с помощью синтаксиса MD в GitHub:

```python
def greet(name): 
    print(f"Hello, {name}!")
```

Пример подстветки кода Bush:

```bash

#!/bin/bash

# Пример скрипта, выводящего текст в терминал

# Объявление переменной

greeting="Добро пожаловать в мир bash скриптов!"

# Вывод значения переменной

echo $greeting

```