# Highlight.js

Highlight.js — популярная библиотека для подсветки синтаксиса, которая поддерживает более 1
80 языков программирования. Она также может автоматически определяет язык программирования без необходимости 
вручную указывать его в классе.

```html copy
<pre><code class="language-LANGUAGES">
SUPPORTED LANGUAGES
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


## Руководство по стилю

[Руководство по стилю](https://docs.github.com/ru/contributing/style-guide-and-content-model/style-guide#links-to-a-specific-tool)


### Пример использования кнопки копирования 

<pre>
```javascript copy
const copyMe = true
```
</pre>

```javascript copy
const copyMe = true
```

### Списки

1. Under your repository name, click **Actions**.

   ![Screenshot of the tabs for the "github/docs" repository. The "Actions" tab is highlighted with an orange outline.](https://docs.github.com/assets/cb-12958/mw-1440/images/help/repository/actions-tab-global-nav-update.webp)

   This is another paragraph in the list.

1. This is the next item.

### Предуреждения

> [!NOTE]
> Generally alerts should be short.
>
> But occasionally may require more than one paragraph


<a href="https://github.com/DESTINATION/URL?ref_cta=CTA+NAME&ref_loc=LOCATION&ref_page=docs" target="_blank" class="btn btn-primary mt-3 mr-3 no-underline"><span>Try PRODUCT NAME</span> {% octicon "link-external" height:16 %}</a>

Внутренние ссылки с AUTOTITLE

При ссылке на другую страницу документов GitHub используйте стандартный синтаксис Markdown, например `[]()`, 
но введите `AUTOTITLE` вместо заголовка страницы. Приложение GitHub Docs заменит AUTOTITLE с заголовком связанной 
страницы во время рендеринга. Это специальное ключевое слово чувствительно к регистру, поэтому будьте осторожны 
при вводе, иначе замена не сработает.

Пример использования внутренних ссылок с AUTOTITLE

- `For more information, see "[AUTOTITLE](/path/to/page)."`
- `For more information, see "[AUTOTITLE](/path/to/page#section-link)."`
- `For more information, see the TOOLNAME documentation in "[AUTOTITLE](/path/to/page?tool=TOOLNAME)."`

> [!NOTE]
> Ссылки на разделы на одной странице не работают с этим ключевым словом. Вместо этого введите полный текст заголовка.

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M14.85 3c.63 0 1.15.52 1.14 1.15v7.7c0 .63-.51 1.15-1.15 1.15H1.15C.52 13 0 12.48 0 11.84V4.15C0 3.52.52 3 1.15 3ZM9 11V5H7L5.5 7 4 5H2v6h2V8l1.5 1.92L7 8v3Zm2.99.5L14.5 8H13V5h-2v3H9.5Z"></path></svg>

<svg width="100" height="100">
  <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
</svg>

<details>

<summary>Tips for collapsed sections</summary>

### You can add a header

You can add text within a collapsed section. 

You can add an image or a code block, too.

```ruby
   puts "Hello World"
```

</details>




