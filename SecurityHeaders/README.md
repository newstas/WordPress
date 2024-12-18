

Схема или протокол (Scheme & Protocol)

![Иллюстрация к проекту](/img/mdn-url-protocol@x2.png)

****

## Краткий справочник по заголовкам безопасности

### Заголовки безопасности, рекомендуемые для веб-сайтов, которые обрабатывают конфиденциальные данные пользователей:

[Политика безопасности контента (CSP)](#csp)

[Доверенные типы](#tt)

### Заголовки безопасности, рекомендуемые для всех веб-сайтов:

[Параметры X-Content-Type](#xcto)

[Параметры X-Frame](#xfo)

[Политика ресурсов перекрестного происхождения (CORP)](#corp)

[Политика открытия перекрестного происхождения (COOP)](#coop)

[Строгая транспортная безопасность HTTP (HSTS)](#hsts)

### Заголовки безопасности для веб-сайтов с расширенными возможностями:

[Совместное использование ресурсов между источниками (CORS)](#cors)

[Политика внедрения перекрестного происхождения (COEP)](#coep)

Известные угрозы в Интернете

Прежде чем углубляться в заголовки безопасности, узнайте об известных угрозах в Интернете и о том, почему вы хотите использовать эти заголовки безопасности.



#### Политика безопасности контента - Content Security Policy (CSP) (CSP)

[Межсайтовый скриптинг (XSS)](https://www.google.com/about/appsecurity/learning/xss/?hl=ru) — это атака, при которой уязвимость на веб-сайте позволяет внедрить и выполнить вредоносный скрипт.

`Content-Security-Policy` предоставляет дополнительный уровень для смягчения XSS-атак, ограничивая сценарии, которые могут выполняться на странице.

Рекомендуется включить строгий CSP, используя один из следующих подходов:

*   Если вы отображаете свои HTML-страницы на сервере, используйте **строгий CSP на основе nonce** .
*   Если ваш HTML-код должен обслуживаться статически или кэшироваться, например, если это одностраничное приложение, используйте **строгий CSP на основе хэша** .

Пример использования: CSP на основе nonce.

    Content-Security-Policy:
      script-src 'nonce-{RANDOM1}' 'strict-dynamic' https: 'unsafe-inline';
      object-src 'none';
      base-uri 'none';


Как использовать CSP

### Рекомендуемое использование

**Примечание.** CSP может служить _дополнительной_ защитой от XSS-атак; вам все равно следует избегать (и очищать) пользовательский ввод.

#### 1\. Используйте строгий CSP на основе nonce {: #nonce-based-csp}

Если вы отображаете свои HTML-страницы на сервере, используйте **строгий CSP на основе nonce** .

**Внимание:** Nonce — это случайное число, используемое только один раз. CSP на основе nonce безопасен только в том случае, если вы можете генерировать разные nonce для каждого ответа. Если вы не можете этого сделать, используйте вместо этого [CSP на основе хэша](#step_1_decide_if_you_need_a_nonce-_or_hash-based_csp) .

Сгенерируйте новое значение nonce скрипта для каждого запроса на стороне сервера и установите следующий заголовок:

файл конфигурации сервера

Content\-Security\-Policy:  script\-src 'nonce-{RANDOM1}' 'strict-dynamic' https: 'unsafe-inline';  object\-src 'none';  base\-uri 'none';  

В HTML, чтобы загрузить скрипты, установите для атрибута `nonce` всех тегов `<script>` одну и ту же строку `{RANDOM1}` .

index.html

<script nonce\="{RANDOM1}" src\="https://example.com/script1.js"\></script>  
<script nonce\="{RANDOM1}"\>  // Inline scripts can be used with the <code>nonce</code> attribute.  
</script>  

[Google Photos](https://photos.google.com/?hl=ru) — хороший пример строгого CSP на основе nonce. Используйте DevTools, чтобы увидеть, как он используется.

#### 2\. Используйте строгий CSP на основе хэша {: #hash-based-csp}

Если ваш HTML-код должен обрабатываться статически или кэшироваться, например, если вы создаете одностраничное приложение, используйте **строгий CSP на основе хэша** .

файл конфигурации сервера

Content\-Security\-Policy:  script\-src 'sha256-{HASH1}' 'sha256-{HASH2}' 'strict-dynamic' https: 'unsafe-inline';  object\-src 'none';  base\-uri 'none';  

В HTML вам потребуется встроить свои скрипты, чтобы применить политику на основе хеширования, поскольку [большинство браузеров не поддерживают хеширование внешних скриптов](https://wpt.fyi/results/content-security-policy/script-src/script-src-sri_hash.sub.html?label=master&label=experimental&aligned) .

index.html

<script>  
...// your script1, inlined  
</script>  
<script>  
...// your script2, inlined  
</script>  

Чтобы загрузить внешние сценарии, прочтите раздел «Динамическая загрузка исходных сценариев» в разделе [«Вариант Б: заголовок ответа CSP на основе хеша»](https://web.dev/articles/strict-csp?hl=ru#step_1_decide_if_you_need_a_nonce-_or_hash-based_csp) .

[CSP Evaluator](https://csp-evaluator.withgoogle.com/) — хороший инструмент для оценки вашего CSP, но в то же время хороший пример строгого CSP на основе nonce. Используйте DevTools, чтобы увидеть, как он используется.

### Поддерживаемые браузеры

\* `https:` является запасным вариантом для Safari, а `unsafe-inline` — запасным вариантом для очень старых версий браузера. `https:` и `unsafe-inline` не делают вашу политику менее безопасной, поскольку они будут игнорироваться браузерами, поддерживающими `strict-dynamic` . Подробнее читайте в разделе [«Добавление резервных вариантов для поддержки Safari и более старых браузеров»](https://web.dev/articles/strict-csp?hl=ru#step_4_optional_add_fallbacks_to_support_old_browser_versions) . \* Safari пока _не_ поддерживает `strict-dynamic` . Но строгий CSP, как в приведенных выше примерах, безопаснее, чем CSP из белого списка (и гораздо безопаснее, чем вообще отсутствие CSP) для всех ваших пользователей. Даже в Safari строгий CSP защищает ваш сайт от некоторых типов XSS-атак, поскольку наличие CSP запрещает определенные небезопасные шаблоны.

### Что еще следует отметить о CSP

*   Директива [`frame-ancestors`](https://developer.mozilla.org/docs/Web/HTTP/Headers/Content-Security-Policy/frame-ancestors) защищает ваш сайт от кликджекинга — риска, который возникает, если вы разрешаете ненадежным сайтам встраивать ваш сайт. Если вы предпочитаете более простое решение, вы можете использовать [`X-Frame-Options`](##xfo) для блокировки загрузки, но `frame-ancestors` предоставляют вам расширенную конфигурацию, позволяющую использовать только определенные источники в качестве средств внедрения.
*   Возможно, вы использовали [CSP, чтобы гарантировать, что все ресурсы вашего сайта загружаются через HTTPS](https://web.dev/articles/fixing-mixed-content?hl=ru#content_security_policy) . Это стало менее актуальным: в настоящее время большинство браузеров блокируют [смешанный контент](https://web.dev/articles/what-is-mixed-content?hl=ru) .
*   Вы также можете установить CSP в [режиме только отчетов](https://web.dev/articles/strict-csp?hl=ru#step_2_set_a_strict_csp_and_prepare_your_scripts) .
*   Если вы не можете установить CSP в качестве заголовка на стороне сервера, вы также можете установить его как метатег. Обратите внимание, что вы не можете использовать режим **«только отчет»** для метатегов (хотя [это может измениться](https://github.com/w3c/webappsec-csp/issues/277) ).

### Узнать больше

*   [Уменьшите XSS с помощью строгой политики безопасности контента (CSP)](https://web.dev/articles/strict-csp?hl=ru)
*   [Памятка по политике безопасности контента](https://cheatsheetseries.owasp.org/cheatsheets/Content_Security_Policy_Cheat_Sheet.html)

Доверенные типы
---------------

[XSS на основе DOM](https://portswigger.net/web-security/cross-site-scripting/dom-based) — это атака, при которой вредоносные данные передаются в приемник, поддерживающий динамическое выполнение кода, например `eval()` или `.innerHTML` .

Доверенные типы предоставляют инструменты для написания, проверки безопасности и поддержки приложений без DOM XSS. Их можно включить через [CSP](#csp) и сделать код JavaScript безопасным по умолчанию, ограничив опасные веб-API приемом только специального объекта — доверенного типа.

Чтобы создать эти объекты, вы можете определить политики безопасности, в которых вы можете гарантировать, что правила безопасности (такие как экранирование или очистка) последовательно применяются до записи данных в DOM. Эти политики являются единственными местами в коде, которые потенциально могут ввести DOM XSS.

Пример использования

    Content-Security-Policy: require-trusted-types-for 'script'

    // Feature detectionif (window.trustedTypes && trustedTypes.createPolicy) {  // Name and create a policy  const policy = trustedTypes.createPolicy('escapePolicy', {    createHTML: str => {      return str.replace(/\</g, '&lt;').replace(/>/g, '&gt;');    }  });}

    // Assignment of raw strings is blocked by Trusted Types.el.innerHTML = &#39;some string&#39;; // This throws an exception.// Assignment of Trusted Types is accepted safely.const escaped = policy.createHTML(&#39;&lt;img src=x onerror=alert(1)&gt;&#39;);el.innerHTML = escaped;  // &#39;&amp;lt;img src=x onerror=alert(1)&amp;gt;&#39;

Как использовать доверенные типы

### Рекомендуемое использование

1.  Принудительно использовать доверенные типы для опасных приемников DOM CSP и заголовка доверенных типов:
    
    Content\-Security\-Policy: require\-trusted\-types\-for 'script'  
    
    В настоящее время `'script'` является единственным приемлемым значением для директивы `require-trusted-types-for` .
    
    Конечно, вы можете комбинировать доверенные типы с другими директивами CSP:



