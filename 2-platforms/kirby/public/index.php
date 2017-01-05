<?php

define('DS', DIRECTORY_SEPARATOR);
$basePath = __DIR__ ;

$compiledClasses = $basePath . '/../vendor/autoload.php';
$kirbyApp = $basePath . DS . 'kirby' . DS . 'bootstrap.php';

if ( ! is_file($kirbyApp) or ! is_file($compiledClasses) )
{
    if (function_exists('http_response_code')) http_response_code(503);
    exit('Could not find composer class. Please ensure that they are set correctly in ' . __FILE__ );
}

// Load Composer Dependencies
require_once $compiledClasses;

try {
    $dotenv = new Dotenv\Dotenv($basePath . DS . '..');
    $dotenv->load();
} catch (Exception $e) {
    exit('Could not find a .env file or required values are not set.');
}

// load kirby
//require($kirbyApp);

// check for a custom site.php
if(file_exists(__DIR__ . DS . 'site.php')) {
    require(__DIR__ . DS . 'site.php');
} else {
    $kirby = kirby();
}

// render
echo $kirby->launch();
