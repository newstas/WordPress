# Highlight.js

Highlight.js — популярная библиотека для подсветки синтаксиса, которая поддерживает более 1
80 языков программирования. Она также может автоматически определяет язык программирования без необходимости 
вручную указывать его в классе.

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

Проба:

{% vscode %}
This content is specific to Visual Studio Code.
{% endvscode %}

{% visualstudio %}
This content is specific to Visual Studio.
{% endvisualstudio %}

{% jetbrains %}
This content is specific to JetBrains IDEs.
{% endjetbrains %}


1. Under your repository name, click **Actions**.

   ![Screenshot of the tabs for the "github/docs" repository. The "Actions" tab is highlighted with an orange outline.](https://docs.github.com/assets/cb-12958/mw-1440/images/help/repository/actions-tab-global-nav-update.webp)

   This is another paragraph in the list.

1. This is the next item.


> [!NOTE]
> Generally alerts should be short.
>
> But occasionally may require more than one paragraph

{% octicon markdown height:16 %}

