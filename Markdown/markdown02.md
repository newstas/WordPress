## Руководство по стилю

[Базовый синтаксис записи и форматирования](https://docs.github.com/ru/enterprise-cloud@latest/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)

[Руководство по стилю](https://docs.github.com/ru/contributing/style-guide-and-content-model/style-guide#links-to-a-specific-tool)

[Использование Markdown и Liquid в документации GitHub](https://docs.github.com/ru/contributing/writing-for-github-docs/using-markdown-and-liquid-in-github-docs)

[Руководство по оформлению Markdown файлов | ru](https://gist.github.com/Jekins/2bf2d0638163f1294637)

[Content - ?](https://github.com/github/docs/blob/main/content/README.md#versions)

[Работа с расширенным форматированием](https://docs.github.com/ru/get-started/writing-on-github/working-with-advanced-formatting)

[Keyboard HTML Tag для Github Markdown](https://gist.github.com/RebeccaWhit3/dae70f3e781c355133e8d58b46e9a988)

Такие способы форматирования, как таблицы, выделение синтаксиса и автоматическое связывание, позволяют 
четко упорядочивать сложную информацию в запросах на вытягивание, сообщениях о проблемах и комментариях.


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

Стандартный
```md
![Описание изображения](https://picsite.photo-01)
```

HTML
```html
<image src="https://picsite.photo-01" alt="Описание изображения">
```


### Установка размера и оптимизация изображения

HTML метод (рекомендуется)

Для точного контроля над размерами:
```HTML
<img src="https://picsite.photo-01" alt="Описание изображения" width="500" height="300">
```

Маркдаун синтаксис.

Некоторые процессоры Markdown (например, GitHub) поддерживают аттрибуты размеров, но уточни это:
```md
![](https://picsite.photo-01 =100x200)
```

Или можно установить только ширину:
```md
![](https://picsite.photo-01 =500)
```

Поддержка такого синтаксиса варьируется в зависимости от процессора markdown, поэтому проверь документацию своей платформы

### Лучшие практики оптимизации изображений

Выбор формата файла:
- JPG: для фотографий
- PNG: для скриншотов и изображений с прозрачностью
- SVG: для логотипов и иконок
- WebP: для современных браузеров (с возможностью возврата).

Рекомендуемые размеры:
- Изображения для постов в блоге: 1200px-1600px в ширину
- Миниатюры: 150px-300px в ширину
- Изображения статей: 1600px-2000px в ширину

Рекомендации по размеру файлов:
- Изображения героев: < 200 КБ
- Изображения в контенте: < 100 КБ
- Миниатюры: < 30 КБ


### Расширенное форматирование — Добавление подписей

Маркдаун
```md
![Описание изображения](https://picsite.photo-01 "Текст под изображением")
```
Или же в HTML ты можешь задать атрибут &lt;figcaption&gt; внутри &lt;figure&gt;:
```HTML
<figure>
  <img src="https://picsite.photo-01" alt="Описание изображения">
  <figcaption>Текст под изображением</figcaption>
</figure>
```

## Списки - продвинутый уровень

### Добавление абзацев внутри

Чтобы добавить абзац в элемент списка, сделай отступ, чтобы текст абзаца совпадал с началом текста в элементе списка:
```md
1. Первый пункт
2. Второй элемент

   Это абзац внутри второго элемента списка.

   Это еще один абзац в том же элементе списка.

3. Третий пункт
```

**Это выглядит следующим образом:**

1. Первый пункт
2. Второй элемент

   Это абзац внутри второго элемента списка.

   Это еще один абзац в том же элементе списка.

3. Третий пункт

### Включение блоков кода

```md
1. Вот элемент списка с блоком кода:

       def hello_world():
           print("Hello, world!").

2. А вот следующий элемент списка.
```

**Это выглядит следующим образом:**

1. Вот элемент списка с блоком кода:

       def hello_world():
           print("Hello, world!").

2. А вот следующий элемент списка.


### Использование блоков

Ты также можешь включать блочные кавычки в элементы списка:
```md
1. Первый элемент
2. Второй элемент

   > Это блочная цитата
   > внутри второго элемента списка.

3. Третий элемент
```
**Это выглядит следующим образом**

1. Первый элемент
2. Второй элемент

   > Это блочная цитата
   > внутри второго элемента списка.

3. Третий элемент



### Использование списков задач

GitHub Flavored Markdown и некоторые другие Markdown flavors поддерживают списки задач, которые отлично подходят для составления списков дел:
```md
- [x] Выполненная задача
- [ ] Незавершенная задача
  - [x] Подзадача 1
  - [ ] Подзадача 2
- [ ] Другая задача
```

**Это выглядит следующим образом**

- [x] Выполненная задача
- [ ] Незавершенная задача
  - [x] Подзадача 1
  - [ ] Подзадача 2
- [ ] Другая задача


### Многострочные элементы

Для длинных элементов списка ты можешь продолжить текст на следующей строке, сделав отступ, чтобы он совпадал с началом текста в элементе списка
```md
1. Это длинный элемент списка, который
   который продолжается на следующей строке.

2. Это еще один элемент длинного списка.
   который занимает несколько строк и даже
   включает в себя разрыв строки.

3. Короткий пункт
```

**Это выглядит следующим образом**

1. Это длинный элемент списка, который
   который продолжается на следующей строке.

2. Это еще один элемент длинного списка.
   который занимает несколько строк и даже
   включает в себя разрыв строки.

3. Короткий пункт

Это сохраняет структуру списка, но при этом позволяет сделать каждый элемент более длинным.

Руководство по языку Markdown https://www.markdownguide.org/


## Редакторы Markdown

Многие редакторы Markdown предлагают функции автоформатирования списков. Некоторые популярные варианты включают:
- Visual Studio Code с расширением “Markdown All in One”.
- Typora
- IA Writer

Эти редакторы могут автоматически продолжать списки, настраивать отступы и даже обрабатывать флажки в списке задач.
