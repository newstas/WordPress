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


## Руководство по стилю

[Руководство по стилю](https://docs.github.com/ru/contributing/style-guide-and-content-model/style-guide#links-to-a-specific-tool)

[Использование Markdown и Liquid в документации GitHub](https://docs.github.com/ru/contributing/writing-for-github-docs/using-markdown-and-liquid-in-github-docs)

[Руководство по оформлению Markdown файлов | ru](https://gist.github.com/Jekins/2bf2d0638163f1294637)

[Content - ?](https://github.com/github/docs/blob/main/content/README.md#versions)


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


## Работа с расширенным форматированием

Такие способы форматирования, как таблицы, выделение синтаксиса и автоматическое связывание, позволяют 
четко упорядочивать сложную информацию в запросах на вытягивание, сообщениях о проблемах и комментариях.

[Работа с расширенным форматированием](https://docs.github.com/ru/get-started/writing-on-github/working-with-advanced-formatting)


### Упорядочение сведений с помощью свернутых разделов

Можно упростить разметку Markdown, создав свернутый раздел с тегом `<details>`.

[Упорядочение сведений с помощью свернутых разделов](https://docs.github.com/ru/get-started/writing-on-github/working-with-advanced-formatting/organizing-information-with-collapsed-sections)

<details>

<summary>Tips for collapsed sections</summary>

### You can add a header

You can add text within a collapsed section. 

You can add an image or a code block, too.

```ruby
   puts "Hello World"
```

</details>

### Комментарии

Вы можете вставить комментарии в свой markdown-файл, которые не будут отображаться в окончательном отформатированном виде:

```
[//]: # (Это комментарий, он не будет отображаться)
```

Пример:

[//]: # (Это комментарий, он не будет отображаться)


## Изображения

```md
![Описание изображения](https://picsum.photos/800/600)
```

```html
<image src="https://picsum.photos/800/600" alt="Описание изображения">
```


