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
<!--[if !IE]><!--><html class="no-js no-fouc"><!--<![endif]-->
<head>
    <title>Get rollin'</title>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, width=device-width, height=device-height" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <?php if(getenv('APP_ENV')!=='production'): ?>
        <meta name="robots" content="noindex,nofollow">
    <?php endif; ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/build/images/meta/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/build/images/meta/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/build/images/meta/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/build/images/meta/manifest.json">
    <link rel="mask-icon" href="/build/images/meta/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">


<!--    <link rel="stylesheet" type="text/css" href="/build/css/vendor.css">-->
    <link rel="stylesheet" type="text/css" href="/build/css/main.css">

</head>
<body>

<h1>おはよう！</h1>

<div id="app"></div>

<script>
    window.backendConfig = {
        APP_DEBUG: <?php echo getenv('APP_DEBUG'); ?>,
        APP_ENV: '<?php echo getenv('APP_ENV'); ?>',
        BUGSNAG_API_KEY: '<?php echo getenv('BUGSNAG_API_KEY'); ?>',
        API_PREFIX: '<?php echo getenv('API_PREFIX'); ?>',
    }
</script>


<script src="/build/js/manifest.js" type="text/javascript"></script>
<script src="/build/js/vendor.js" type="text/javascript"></script>
<script src="/build/js/app.js" type="text/javascript"></script>

<!-- Prism -->
<!--<script type="text/javascript">-->
<!--    var _paq = _paq || [];-->
<!--    // tracker methods like "setCustomDimension" should be called before "trackPageView"-->
<!--    _paq.push(['trackPageView']);-->
<!--    _paq.push(['enableLinkTracking']);-->
<!--    (function() {-->
<!--        var u="//prism.y7k.com/";-->
<!--        _paq.push(['setTrackerUrl', u+'js/']);-->
<!--        _paq.push(['setSiteId', '']);-->
<!--        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];-->
<!--        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'js/'; s.parentNode.insertBefore(g,s);-->
<!--    })();-->
<!--</script>-->
<!-- End Prism Code -->

</body>
</html>
