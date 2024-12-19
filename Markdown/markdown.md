# Синтаксис Markdown 


# Якорь (anchor)


### Якорь из слов
```md
### Якорь из слов
```

[Переход на якорь из слов](#якорь-из-слов)

```md
[Переход на якорь из слов](#якорь-из-слов)
```
Пишем в круглых скобках все буквы в нижнем регистре и слова разделены дефисом. 
Если в названии есть скобки, знаки пунктуации и т.д. их писать не следует. 
Еще момент: неважно какого уровня заголовок, в круглых скобках всегда один символ решетки!
Подходит только для заголовков.



### Якорь из тега &lt; а &gt; с атрибутом name <a name="твоё_название"></a>

```md
Якорь из тега < а > с атрибутом name <a name="твоё_название"></a>
```

[Переход на якорь из тега &lt; а &gt; с атрибутом name](#твоё_название)
```md
[Переход на якорь из тега < а > с атрибутом name](#твоё_название)
```
Можно применять не только к заголовкам, но и к строках



<h3><a name="section-name"></a>Якорь из тегов &lt; h &gt; и &lt; а &gt; с атрибутом name</h3> <!-- Этот метод по-прежнему используется на практике! -->

```html
<h3><a name="section-name"></a>Якорь из тегов < h > и < а > с атрибутом name</h3>
```

[Переход на якорь из тегов &lt; h &gt; и &lt; а &gt; с атрибутом name](#section-name)
```htnl
[Переход на якорь из тегов < h > и < а > с атрибутом name](#section-name)
```


<h2 id="target-section">Якорь из атрибута id</h2> <!-- В Markdown данный пример также актуален! -->

```html
<h2 id="target-section">Якорь из атрибута id</h2>
```

[Перейти к якорю из атрибута id](#target-section)
```md
[Перейти к якорю из атрибута id](#target-section)
```


# Heading 1 `#` 

```
Heading 1
=========
```

## Heading 2 `##`

```
Heading 2
--------
```


### Heading 3 `###`

This text is **bold**  - `**bold**`
 
This text is _italic_ - `_italic_`

This text is ~~crossed out~~ - `~~crossed out~~`

This text is `code` - знак (`) обратные кавычки

This is a [link](http://www.trello.com) - `[link](http://www.trello.com)`

Ссылка и размещения оригинальной ссылки внизу:

```
[Ссылка] [1]
⋮
[1]: http://www.trello.com
```


## Горизонтальня линия (Horizontal line)

--- 
Горизонтальная линия - строка, по крайней мере, с тремя дефисами создаст горизонтальную линию по всему описанию или комментарию. В описании карточки добавьте дополнительный разрыв строки после любого текста перед строкой дефиса, чтобы дефис не интерпретировался как синтаксис заголовка.


## Code block (подсветка синтаксиса)


Вот пример того, как вы можете использовать подсветку синтаксиса с помощью GitHub Flavored Markdown — отформатированный абзац в виде блока кода с помощью трех (```):

```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```

Вы также можете просто сделать отступ в коде четырьмя пробелами:

```
    function fancyAlert(arg) {
      if(arg) {
        $.facebox({div:'#foo'})
      }
    }
```

Блок кода - включите отформатированный код, заключив его в три обратных знака (```) в начале и конце блока или начав строку с четырех пробелов. Обратите внимание, что тройные обратные кавычки должны находиться на отдельной строке и обеспечить наличие пустой строки до и после блока кода.


## Цитаты

Indent text / Block Quotes (Отступ текста / блок цитаты) - Отступ текста, добавив «>» перед каждой строкой текста, который вы хотите сделать отступ или цитату.

```
As Kanye West said:

> We're living the future so
> the present is our past.
```
Результат:

As Kanye West said:

> We're living the future so
> the present is our past.



# Маркированный (bullet) и нумерованный (numbered) список (list)


## Маркированный список

```
* List
* List
* List
```

```
- List
- List
- List
```

- List
- List
- List


Для создания списка предварите ряд строк с маркерами или цифрами. Списки будут отформатированы, только если вы начинаете новый абзац (оставляя пустую строку перед списком). Вы можете добавить пробел перед маркером для создания вложенных маркеров. Чтобы сделать отступ в маркированном или нумерованном списке, начните новую строку с пробелов до начала букв предедыщего уровня. 

- Начало списка
- Вторая строка списка
  - Вложенный маркер, строка начатая с пробела
  - Вторая строка вложенного маркера



## Нумерованный список

```
1. One
2. Two
3. Three
```

```
1) One
2) Two
3) Three
```

1. One
2. Two
3. Three

Любая строка, которая начинается с нумерованного формата, даже если число не равно 1, автоматически создает упорядоченный список. Это как ожидалось и в соответствии со спецификациями экранирования. 

```
2. Нумерованный список
4. Не зависит от поставленной цифры (нумерует строки по порядку следования, начиная с 1)
```

2. Нумерованный список
4. Не зависит от поставленной цифры (нумерует строки по порядку следования, начиная с 1)

Вы можете сохранить форматирование, поставив «\» перед точкой, например, 28 \. Маршрут.

```
28\. Маршрут
```

28\. Маршрут



## Escaping (Экранирование) Markdown 


Экранирование Markdown - чтобы буквально использовать синтаксис экранирования, вы можете избежать форматирования, используя обратную косую черту «\» перед символами, например, \ \* экранируем звездочки \ \*.

\* Пример экранирования звездочек \*.


## Изображения Markdown

Вы можете изменить размер изображения в GitHub markdown, используя ссылку на изображение в теге HTML img:

Из формата markdown:

```md
![Image](https://commonmark.org/help/images/favicon.png)
```
![Image](https://commonmark.org/help/images/favicon.png)

Переписать в тег HTML img:

```html
<img src="https://commonmark.org/help/images/favicon.png" width="200" />
```
<img src="https://commonmark.org/help/images/favicon.png" width="200" />


Если использовать абзац для выравнивания изображений бок о бок:

```html
<p align="center">
  <img src="screen1.png" width="256" height="455">
  <img src="screen2.png" width="256" height="455">
  <img src="screen3.png" width="256" height="455">
</p>
```

<p align="center">
  <img src="https://commonmark.org/help/images/favicon.png">
  <img src="https://commonmark.org/help/images/favicon.png">
  <img src="https://commonmark.org/help/images/favicon.png">
</p>

### Изображение ссылкой и размещения оригинала внизу

```
! [Изображение] [1]
⋮
[1]: http: //url/b.jpg
```


Speed Class

![Image](https://trello-attachments.s3.amazonaws.com/5c605366a247873a414dc030/600x612/8dc418921a48b2185e90455e553203ea/SD_Speed_Class.jpg)


# Открыть Markdown с расширением .md в Eclipse


Нужно нажать клавиши **CTRL + PgUp** сразу после открытия \*.md файла, чтобы переключиться на экран предварительного просмотра
и **CTRL+PgUp** для возврата


***

## Источники

[Mastering Markdown - GitHub](https://guides.github.com/features/mastering-markdown/)

[Writing on GitHub](https://docs.github.com/en/github/writing-on-github)

[emoji-cheat-sheet](https://github.com/ikatyang/emoji-cheat-sheet/blob/master/README.md)

[Carbon - оформить код](https://carbon.now.sh/)

[Помощник с тренажером по Markdown](https://commonmark.org/help/) 	

[Освоение Markdown за 3 минуты на GitHub](https://guides.github.com/features/mastering-markdown/)

[Основной синтаксис написания и форматирования на GitHub](https://help.github.com/en/github/writing-on-github/basic-writing-and-formatting-syntax)

[Создание и выделение блоков кода на GitHub](https://help.github.com/en/github/writing-on-github/creating-and-highlighting-code-blocks)

[Организация информации с помощью таблиц на GitHub](https://help.github.com/en/github/writing-on-github/organizing-information-with-tables)

[Инструкция на Trello](https://help.trello.com/article/821-using-markdown-in-trello)

[Справочник тренажер](https://dillinger.io/)

[Шпаргалка по Markdown](http://bustep.ru/markdown/shpargalka-po-markdown.html) - имеется пример вставки с ютуб



#### Проба укзать число строк


[Теперь вот решение для добавления номеров строк в Markdown](https://shd101wyy.github.io/markdown-preview-enhanced/#/markdown-basics?id=line-numbers)

Вы можете включить номер строки для блока кода, добавив класс line-numbers . 



