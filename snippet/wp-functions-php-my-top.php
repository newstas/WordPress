// Удаляем 'wlwmanifest' из head
remove_action( 'wp_head', 'wlwmanifest_link' );

// Удаляет информацию о текущей версии WordPress
remove_action( 'wp_head', 'wp_generator' );

// Проверка подключения XML-RPC http://xmlrpc.epizy.com/ - WordPress XML-RPC Validation
