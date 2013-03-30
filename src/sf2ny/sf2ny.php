<?php

$app = require __DIR__ . '/bootstrap.php';

// homepage
$app->get('/', function () use ($app) {
    return $app['twig']->render('page.twig');
});

// who we are
$app->get('/who-we-are', function () use ($app) {
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

// sponsor us
$app->get('/sponsor-us', function () use ($app) {
    return 'sponsor us page';
});

return $app;