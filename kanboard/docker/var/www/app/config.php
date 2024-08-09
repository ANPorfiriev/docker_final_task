<?php

defined('ENABLE_URL_REWRITE') or define('ENABLE_URL_REWRITE', true);
defined('LOG_DRIVER') or define('LOG_DRIVER', 'system');

// We choose to use Postgresql instead of Sqlite
define('DB_DRIVER', 'postgres');

// Postgresql parameters
define('DB_USERNAME', 'kanboard');
define('DB_PASSWORD', 'aseEDT7823jhSd8t63FBfe890');
define('DB_HOSTNAME', 'db-postgres');
define('DB_NAME', 'kanboard');