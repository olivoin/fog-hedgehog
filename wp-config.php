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
define('DB_NAME', 'u0065646_fog');

/** Имя пользователя MySQL */
define('DB_USER', 'u0065646_default');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'HN8Gsex!');

/** Имя сервера MySQL */
define('DB_HOST', '37.140.192.115');

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
define('AUTH_KEY',         '^TOJ+!!Dh73Vu|:M[t^TNHhF U5KhwA#]lR&riMAUocxd&gC~d1AzLymc,y3xwZq');
define('SECURE_AUTH_KEY',  'f-XkoV|R.=+A&dhNz pnd31rqOg/!y`?1_~ipErqfmh-6HVyt7=VC}a6G_.wVeAy');
define('LOGGED_IN_KEY',    'R$dzD VO+}:![vsU0acLnj>VqKCv5-_GSJXC0~R`<AMok?FBvpxnC23F$uK9Y^Qr');
define('NONCE_KEY',        ' 8LZ4$k*C*mEpGbt$v!u-:2vgUsY?bO#w)NyN>3w{pKOqqMqG<tv!I)81;,%5RcY');
define('AUTH_SALT',        'UgleXFN&WN,%xwJ2vsw&]);<T{s+w[>N{HK$8#*CFQO3oB=L34>lQRK>)m*(K*kZ');
define('SECURE_AUTH_SALT', ' M*;H3U~1%Esu/o|T VwD,1lK;s<=}_R%2?ms>rQ:RUhtwfo%KZ!9mNJqDPsxLt+');
define('LOGGED_IN_SALT',   'YM<pU+Q!&,lfoB.H,4_Uc+U8YyS4=p25XwXruVw]g%a~I6zeH#Ztpn|f _>*6y38');
define('NONCE_SALT',       '5K@9t|`[[XnZmqk|[I@hR2{gt0f+OGi8IIEUG~*:vSBHOR{grlH26|>w8jQMBou,');

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
