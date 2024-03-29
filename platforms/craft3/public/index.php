<?php
/**
 * Craft web bootstrap file
 */

// Set path constants
define('CRAFT_BASE_PATH', dirname(__DIR__));
define('CRAFT_TEMPLATES_PATH', CRAFT_BASE_PATH . '/resources/views');
define('CRAFT_TRANSLATIONS_PATH', CRAFT_BASE_PATH . '/resources/lang');
define('CRAFT_STORAGE_PATH', CRAFT_BASE_PATH . '/storage');
define('CRAFT_VENDOR_PATH', CRAFT_BASE_PATH . '/vendor');

// Load Composer's autoloader
require_once CRAFT_VENDOR_PATH . '/autoload.php';

// Load dotenv?
if (file_exists(CRAFT_BASE_PATH . '/.env')) {
    (new Dotenv\Dotenv(CRAFT_BASE_PATH))->load();
}

// Load and run Craft
define('CRAFT_ENVIRONMENT', getenv('APP_ENV') ?: 'production');
define('CRAFT_LICENSE_KEY', getenv('CRAFT_LICENSE_KEY') ?: '');
$app = require CRAFT_VENDOR_PATH . '/craftcms/cms/bootstrap/web.php';
$app->run();
