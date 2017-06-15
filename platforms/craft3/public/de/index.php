<?php

/**
 * Craft web bootstrap file
 */

// Tell Craft to serve the German content
define( 'CRAFT_SITE' , 'de' );

// Project root path
$root = dirname(dirname(__DIR__));

// Composer autoloader
require_once $root.'/vendor/autoload.php';

// dotenv?
if (file_exists($root.'/.env')) {
    $dotenv = new Dotenv\Dotenv($root);
    $dotenv->load();
}

// Craft
define('CRAFT_BASE_PATH', $root);
define( 'CRAFT_TEMPLATES_PATH', $root . '/resources/views/' );
define( 'CRAFT_TRANSLATIONS_PATH', $root . '/resources/lang/' );
define( 'CRAFT_STORAGE_PATH', $root . '/storage/' );


$app = require $root.'/vendor/craftcms/cms/bootstrap/web.php';
$app->run();

