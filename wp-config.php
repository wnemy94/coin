<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6T;W{,f xAT!R}Iv?w/hX!.O*@l@m8MN#xGdp?$v_8&nL{RR_3&#M5m3{8y0i8,#');
define('SECURE_AUTH_KEY',  '5pbY,TH+<b~g-*;Kw2REs4 ^TZB4{~WT{G!!T6R;J?[^O2&nX7!~*F)sRI0yGw>k');
define('LOGGED_IN_KEY',    'aD71y|&I7SxTT`*1<f8SE?Y1K9icUZ#QLD9Wc0uKX?K8xAz@THV+(RPQn6B|Ko60');
define('NONCE_KEY',        '[y>]%yM0F2*&I#Qz3!srN<>Q~9 m& 4qEc0o*A(#/k/et|/#%>E%z<> PhIx*%>Q');
define('AUTH_SALT',        'vGs>D,HPe-u Kg3fAqeo]9)05xP%m<FB:BX<sqnx>H[p[n9Tt=`s5zscCzx6xpm*');
define('SECURE_AUTH_SALT', '?_j`8k6[.`8^H@)Tx_@f&{mzrrbkLyQcXaXHDQH<(LLP{]~uvE6<u$C:<9lm3Tfj');
define('LOGGED_IN_SALT',   'B!vp9ck!@}geJ]CV1N4hP;g/`dh3jP},w2>6=1hr{yH[ID2D($&2- .XLM~ySNd6');
define('NONCE_SALT',       'u;|#Z~?=3._nBUovo>5B`G+BjY]5_@W)(}iuZU%~O~8(0Q:SZBvs$-av1lw29(1M');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
