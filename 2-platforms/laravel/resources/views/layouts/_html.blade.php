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
    <title>Get rollin'</title>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, width=device-width, height=device-height" />
    <meta httpEquiv="X-UA-Compatible" content="IE=edge" />

    @if(env('APP_ENV')!=='production')
        <meta name="robots" content="noindex,nofollow">
    @endif

    <link rel="apple-touch-icon" sizes="180x180" href="/build/images/meta/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/build/images/meta/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/build/images/meta/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/build/images/meta/manifest.json">
    <link rel="mask-icon" href="/build/images/meta/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">


<!--    <link rel="stylesheet" type="text/css" href="build/css/vendor.css">-->
    <link rel="stylesheet" type="text/css" href="build/css/main.css">

    @include('helpers/piwik-analytics')

</head>
<body>

<h1>おはよう！</h1>

<div id="app"></div>

{{ mix('/build/js/manifest.js') }}
{{ mix('/build/js/vendor.js') }}
{{ mix('/build/js/app.js') }}

@include('helpers/google-analytics')

</body>
</html>
