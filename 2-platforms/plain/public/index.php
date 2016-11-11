<?php
$basePath = __DIR__ . '/..';

// Load Composer Dependencies
require_once $basePath . '/vendor/autoload.php';

// Load Dotenv Variables
try {
    $dotenv = new Dotenv\Dotenv($basePath);
    $dotenv->load();
    $dotenv->required(['APP_ENV', 'APP_DEBUG']);
} catch (Exception $e) {
    exit('Could not find a .env file or required values are not set.');
}

?>
<!doctype html>
<!--

__/\\\________/\\\__/\\\\\\\\\\\\\\\__/\\\________/\\\_
 _\///\\\____/\\\/__\/////////////\\\_\/\\\_____/\\\//__
  ___\///\\\/\\\/_______________/\\\/__\/\\\__/\\\//_____
   _____\///\\\/_______________/\\\/____\/\\\\\\//\\\_____
    _______\/\\\______________/\\\/______\/\\\//_\//\\\____
     _______\/\\\____________/\\\/________\/\\\____\//\\\___
      _______\/\\\__________/\\\/__________\/\\\_____\//\\\__
       _______\/\\\________/\\\/____________\/\\\______\//\\\_
        _______\///________\///______________\///________\///__

-->
<!--[if lt IE 11]><html lang="en" class="ie old-ie"><![endif]-->
<!--[if !IE]><!--><html class="no-js"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, width=device-width, height=device-height" />
    <meta httpEquiv="X-UA-Compatible" content="IE=edge" />


    <link rel="apple-touch-icon" href="/build/images/meta/apple-touch-icon-57x57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="/build/images/meta/apple-touch-icon-60x60.png" sizes="60x60">
    <link rel="apple-touch-icon" href="/build/images/meta/apple-touch-icon-72x72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="/build/images/meta/apple-touch-icon-76x76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="/build/images/meta/apple-touch-icon-114x114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="/build/images/meta/apple-touch-icon-120x120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="/build/images/meta/apple-touch-icon-144x144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="/build/images/meta/apple-touch-icon-152x152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="/build/images/meta/apple-touch-icon-180x180.png" sizes="180x180">
    <link rel="icon" type="image/png" href="/build/images/meta/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/build/images/meta/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/build/images/meta/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/build/images/meta/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/build/images/meta/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/build/images/meta/android-chrome-144x144.png" sizes="144x144">
    <link rel="icon" type="image/png" href="/build/images/meta/android-chrome-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/build/images/meta/android-chrome-72x72.png" sizes="72x72">
    <link rel="icon" type="image/png" href="/build/images/meta/android-chrome-48x48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="/build/images/meta/android-chrome-36x36.png" sizes="36x36">
    <link rel="manifest" href="/build/images/meta/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/build/images/meta/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Y7K New Awesome Project</title>

    <link rel="stylesheet" type="text/css" href="build/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="build/css/main.css">

</head>
<body>

<h1>おはよう！</h1>

<div id="app"></div>

<script>
    window.App = {
        constants: {
            APP_DEBUG: <?php echo getenv('APP_DEBUG'); ?>,
            APP_ENV: '<?php echo getenv('APP_ENV'); ?>',
            BUGSNAG_API_KEY_JS: '<?php echo getenv('BUGSNAG_API_KEY_JS'); ?>',
        }
    }
</script>

<!--<script src="build/js/vendor.js" type="text/javascript"></script>-->
<script src="build/js/app.js" type="text/javascript"></script>


</body>
</html>
