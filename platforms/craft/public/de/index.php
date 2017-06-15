<?php
$basePath = __DIR__ . '/../..';

// Set path to craft folders
$craftPath = $basePath . '/craft';
define( 'CRAFT_TEMPLATES_PATH', $basePath . '/resources/views/' );
define( 'CRAFT_TRANSLATIONS_PATH', $basePath . '/resources/lang/' );
define( 'CRAFT_STORAGE_PATH', $basePath . '/storage/' );

// Tell Craft to serve the German content
define( 'CRAFT_LOCALE' , 'de' );

$compiledClasses = $basePath . '/vendor/autoload.php';
$craftApp = $craftPath . '/app/index.php';

if ( ! is_file($craftApp) or ! is_file($compiledClasses) )
{
	if (function_exists('http_response_code')) http_response_code(503);
	exit('Could not find your craft folder or composer class. Please ensure that they are set correctly in ' . __FILE__ );
}

// Load Composer Dependencies
require_once $compiledClasses;

// Load Dotenv Variables
try {
    $dotenv = new Dotenv\Dotenv($basePath);
    $dotenv->load();
    $dotenv->required(['DB_NAME', 'DB_USER', 'DB_PASSWORD']);
} catch (Exception $e) {
    exit('Could not find a .env file or required values are not set.');
}

require_once $craftApp;
