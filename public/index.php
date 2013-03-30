<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

// homepage
$app->get('/', function () use ($app) {
    return 'Hello ' . $app->escape($name);
});

// who we are
$app->get('/', function () use ($app) {
    return 'who we are page';
});

// route
$app->get('/route', function () use ($app) {
    return 'route page';
});

// charities
$app->get('/charities', function () use ($app) {
    return 'charities page';
});

// blog
$app->get('/blog', function () use ($app) {
    return 'blog page';
});

// sponsor us
$app->get('/sponsor-us', function () use ($app) {
    return 'sponsor us page';
});

$app->run();