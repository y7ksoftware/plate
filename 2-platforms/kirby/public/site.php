<?php
$basePath = __DIR__ . DS . '..' . DS;

$kirby = kirby();

$kirby->roots->content = $basePath . 'public' . DS . 'content';
$kirby->roots->thumb = $basePath . 'public' . DS . 'thumbs';
$kirby->roots->site = $basePath . 'site';
$kirby->roots->accounts = $basePath . 'storage' . DS . 'accounts';
$kirby->roots->cache = $basePath . 'storage' . DS . 'cache';
$kirby->roots->snippets = $basePath . 'resources' . DS . 'views';
$kirby->roots->templates = $basePath . 'resources' . DS . 'views';

