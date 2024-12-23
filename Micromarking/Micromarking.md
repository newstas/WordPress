## Micromarking — микроразметка

- **Micromarking** (микроразметка, емантическая разметка)
- **structured data** (структурированные данные)
- **metadata** (метаданные)

Под микроразметкой (или семантической разметкой) мы подразумеваем разметку страницы с дополнительными тегами и атрибутами в тегах, которые указывают поисковым роботам на то, о чем написано на странице.

**Сериализация** (в программировании) — процесс перевода структуры данных в битовую последовательность. Обратной к операции сериализации является операция десериализации (структуризации) — создание структуры данных из битовой последовательности.
Сериализация используется для передачи объектов по сети и для сохранения их в файлы.


## W3C (World Wide Web Consortium)

W3C публикует рекомендации, которые считаются веб-стандартами. Разрабатывает стандарты и рекомендации.


## WHATWG

**WHATWG** (Рабочая группа по технологиям веб-гипертекстовых приложений) — это сообщество людей. заинтересованы в развитии Интернета посредством стандартов и тестов.

> WHATWG была основана представителями Apple, Mozilla Foundation и Opera Software в 2004 г., после семинара W3C. Apple, Mozilla и Opera все больше беспокоились по поводу направление W3C в отношении XHTML, отсутствие интереса к HTML и явное пренебрежение потребностями реальные веб-разработчики.


## Словари и синтаксис

Микроразметка состоит из словаря и синтаксиса. 

> Взаимодействие словаря и синтаксиса
> **Словарь** микроразметки нужен, чтобы собрать все ее свойства и основы. Далее необходимо «обучить» им поисковую систему — в этом помогают выды **синтаксиса**.


### Словари

**Словарь** — это своеобразный «язык», набор классов и их свойств, с помощью которых указывается суть содержимого на странице. Например, словарь определяет, с помощью какого термина указывать название — «name», «title» или «n». 

Наиболее распространенные словари:
- **Open Graph**
- **Schema.org**
- **Microformats** — словарь и синтаксис
- и еще несколько других словарей: **FOAF**, **Dublin Core**, **Data Vocabulary** и **Good Relations**


## Синтаксис

**Синтаксис** — это способ использования такого языка, т.е. словаря. Он определяет, с помощью каких тегов и как будут указываться сущности и их свойства, например, на веб-страницах.

Варианты синтаксиса, которые применяются для разметки Schema.org:
- микроданные;
- микроформаты;
- RDFa;
- JSON-LD.

Первые три имеют ряд недостатков и теряют популярность, а последний (JSON-LD) — используется все чаще.

Недостаток первых трех способов в громоздкости синтаксиса и необходимости добавлять HTML-код внутрь тега <body>. Для упрощения работы используется формат передачи данных JSON-LD.



Семантическая разметка развивалась поэтапно, в свое время разные инициативные группы брались за разработку концепции. И в итоге получился винегрет из разных словарей и синтаксисов — их довольно много и сначала разобраться со всеми ними далеко непросто.





RDF

RDF Resource Description Framework — Структура описания ресурсов. RDF был принят в качестве рекомендации W3C в 1999 году. Спецификация RDF 1.0 была опубликована в 2004 году. Разработчики из W3C создали стандарт, который, по их мнению, подходил для «представления всего в мире».



Примерно через год несколько энтузиастов решили придумать свой «простой» стандарт, в котором использовались бы уже существующие элементы HTML. И придумали всем известные Микроформаты.



RDFa и RDFa Lite (в упрощенном виде RDFa рекомендуется создателями словаря Open Graph. Также встречается с другими словарями, например, со словарем Dublin Core или Data Vocabulary);



Microformat

Микроформат (англ.microformat; иногда сокращённо μF или uF) — это наделение тегов HTML или XHTML альтернативным смыслом или превращение тегов с помощью параметров тегов в поля базы данных и метатэги. Является способом семантической разметки документа. Микроформатов (hCard, hCalendar и др.).



Микроформаты появились примерно в 2005 году и в основном были разработаны для использования поисковыми системами, веб-синдикацией и агрегаторами, такими как RSS.



По сравнению с OG и Schema.org, его используют все меньше и меньше.



Микроформаты разработаны энтузиастами из W3C, которые хотели сделать свой стандарт с использованием базовых элементов HTML.



Микроформаты — это инициатива энтузиастов из W3C, которые хотели сделать простой стандарт семантической разметки и для этого использовали базовые элементы HTML. Подходит для разметки товаров, отзывов, контактной информации и других видов контента. Раньше использовался более активно, сейчас имеет ряд недостатков, недостаточно быстро развивается и уступает Schema.org.



Microformats.org — Микроформаты (напоминаем, что это объединенный стандарт синтаксиса и словаря).



Особенность микроформатов — это применение тегов (обычно или ) c атрибутами class, rel, rev или title для передачи семантической информации. Для обозначения сущностей и их свойств используются только уже существующие атрибуты и не вводятся новые.



В настоящее время поисковыми системами поддерживаются такие микроформаты: 

hCard — формат разметки контактной информации (адресов, телефонов и т. д.);
hRecipe — формат для описания кулинарных рецептов;
hReview — формат разметки отзывов;
hProduct — формат разметки товаров.

Их использование дает возможность показывать специальные сниппеты в выдаче.



Пример небольшого HTML-блока, размеченного микроформатом hCard (с помощью этого микроформаты описывается человек или организация)



hCard (сокращение от «HTML vCard ») 

hCard — это микроформат, позволяющий встраивать vCard в HTML-страницу. vCard , также известный как VCF (Virtual Contact File), представляет собой стандарт формата файлов для электронных визитных карточек .

```

<ul class="vcard">
   

  <li class="fn">Joe Doe</li>
   

  <li class="org">The Example Company</li>
   

  <li class="tel">604-555-1234</li>
   

  <li><a class="url" href="http://example.com/">http://example.com/</a></li>
 

</ul>

```



Microdata

Microdata (микроданные) стал первым синтаксисом, в котором рекомендовали использовать словарь Schema.org.



Microdata – атрибуты HTML, которые предназначены для объяснения значений контента страницы. Эта разметка позволяет отметить объекты, такие как товары в интернет-магазине, рецепты блюд или рецензии на книги. Пример использования Microdata: разметка карточки товара, включающая данные о цене, производителе и доступности на складе, что положительно сказывается на видимости информации в поисковой выдаче. 

Microdata — Микроданные (словарь Schema.org чаще всего встречается именно в этом синтаксисе);



 Microdata (Микроданные)
Ключевые элементы микроданных — это атрибуты itemscope, itemtype и itemprop, указывающие на сущности и их свойства.



В микроданных используется язык разметке HTML (в JSON-LD — JavaScript). Работать с этим синтаксисом сложнее — код разметки нужно прописывать в теле контента.

В основе микроданных — три атрибута:

itemscope — указывает, что в блоке (<div>...</div>) задается элемент (сущность);
itemtype — указывает на тип сущности;
itemprop — обозначает свойства сущности



JSON-LD

JSON-LD (JavaScript Object Notation for Linked Data), который не только решил первоначальную задачу, но и реализовал идею по распространению Linked Data. JSON-LD — расширение JSON.



Linked data (с англ.связанные данные) — в информатике — коллекция взаимосвязанных наборов данных во Всемирной паутине.



JSON-LD в базовом виде выглядит так:

```

<script type="application/ld+json">

{

//здесь помещаются элементы

}

</script>

```



Эта конструкция — своего рода каркас, который всегда есть по умолчанию (как теги <html>, <head> и <body> в структуре любой html-страницы). Внутри каркаса размещается непосредственно код микроразметки, который содержит необходимые данные: сущность, свойства и их значения.



Вот как выглядит разметка

```

<script type="application/ld+json">

{

"@context": "https://schema.org/", //здесь указывается словарь разметки — Schema.org

"@type": "Product", //объявляется сущность — товар

"name": "iPhone", // свойство — название товара

"image": "https://site.ru/iphone10.png", // URL изображения товара

"description": "iPhone 10", // описание

"brand": "Apple", // бренд-производитель

"aggregateRating": { //рейтинг товара

"@type": "AggregateRating",

"ratingValue": "5", //средняя оценка

"ratingCount": "56" //количество пользовательских оценок

}

}

</script>

```



Словари



Open Graph

Open Graph. Данная микроразметка была создана Facebook для структурирования информации в постах. Позже стала применяться другими социальными сетями и мессенджерами (Twitter, «ВКонтакте», Telegram, Viber, WhatsApp, LinkedIn, Pinterest, Slack). 



Пример использования Open Graph: описание статьи на новостном сайте, где указаны заголовок, краткое описание и изображение, что увеличивает привлекательность и кликабельность такой ссылки. 

Schema.org

Единый стандарт Schema.org возник в 2011 г. Инициаторами выступили Microsoft, Google и Yahoo. Позднее разработанная схема для улучшения качества поисковой выдачи была поддержана компанией «Яндекс». Спустя 10 лет, в 2021 г., технологию стали применять свыше 10 млн сайтов различной направленности, причем не только для обработки веб-страниц, но и сообщений электронной почты.



Schema.org включает широкий ассортимент сущностей, который регулярно обновляется. Применение того или иного типа сущности зависит от разновидности страницы и ее контента:

мероприятие (Event);
организация (Organization);
место (Place);
товар (Product);
несколько товаров (AggregateOffer);
товарное предложение (Offer);
книга (Book);
фильм (Movie);
рецепт (Recipe);
ресторан (Restaurant);
сводный рейтинг (AggregateRating);
аудио (AudioObject);
видео (VideoObject);
картинки (ImageObject);
игры (VideoGame);
программы (SoftwareApplication);
мобильные приложения (MobileApplication);
интернет-программы (WebApplication);
вопросы и ответы (Question и Answer);
отзывы (Review).



Dublin Core

Dublin Core - Этот словарь разметки используют библиотеки и музеи — позволяет описывать книги и музейные экспонаты.



FOAF

Словарь FOAF (акроним от Friend of a Friend — «друг друга») специализируется на связях между людьми, их взаимодействиях и объединениях. В нем присутствуют такие классы, как Agent, Organization, Group, Person. У них могут быть различные свойства, описывающие людей или группы в жизни. Есть обычные — age, gender, surname, birthday, а также есть свойства:

привязанные к социальным сетям: skypeID, yahooChatID. jabberID.
специфичные: например, knows — для описания знакомства людей между собой или myersBriggs, отражающее результаты профориентационного теста Майерс-Бриггс (да, мы тоже только узнали что это такое).

Data Vocabulary

Словарь Data Vocabulary разрабатывался компанией Google. На данный момент он уже не развивается, так как вся разработка плавно перетекла в Schema.org.





Good Relations

Good Relations. Используется для размещения деталей рекламных каталогов книг, электроники, автомобилей, туристических путевок и билетов на концерты.







Источники

[Как устроен мир семантической микроразметки](https://habr.com/ru/companies/yandex/articles/211638/)

[Сложный и противоречивый мир синтаксиса микроразметки. Почему стандартов так много? Опыт Яндекса](https://habr.com/ru/companies/yandex/articles/221881/)

[Зачем на самом деле используют микроразметку. Обзор от Яндекса](https://habr.com/ru/companies/yandex/articles/229929/)

[Schema.org своими руками: настраиваем микроразметку без программиста](https://habr.com/ru/companies/click/articles/486764/)