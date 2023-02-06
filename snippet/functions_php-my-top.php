/* --------------------------------------------------------------------------
 * Удаляем массово лишнее с head
 * -------------------------------------------------------------------------- */
// 2.0
// удаляем ссылки доп. фидов (на рубрики)
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
// <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://example.com/xmlrpc.php?rsd" /> для публикации статей через сторонние сервисы
remove_action( 'wp_head', 'rsd_link');
// <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://example.com/wp-includes/wlwmanifest.xml" /> . Используется клиентом Windows Live Writer.
remove_action( 'wp_head', 'wlwmanifest_link');
// Убираем версию WordPress
add_filter('the_generator', '__return_empty_string');
// 3.0
// Короткая ссылка - без ЧПУ <link rel='shortlink'
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
      
                                   
/* --------------------------------------------------------------------------
 * Удаляем link и meta
 * -------------------------------------------------------------------------- */                                  

// Удаляем 'wlwmanifest' из head
remove_action( 'wp_head', 'wlwmanifest_link' );

// Удаляет информацию о текущей версии WordPress
remove_action( 'wp_head', 'wp_generator' );
