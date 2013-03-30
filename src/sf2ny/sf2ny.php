<?php

$app = require __DIR__ . '/bootstrap.php';

// homepage
$app->get('/', function () use ($app) {
    return $app['twig']->render('homepage.twig');
});

// who we are
$app->get('/who-we-are', function () use ($app) {
    return $app['twig']->render('who-we-are.twig');
});

// why are we doing it?
$app->get('/why-are-we-doing-it', function () use ($app) {
    return $app['twig']->render('why-are-we-doing-it.twig');
});

// route
$app->get('/route', function () use ($app) {
    return $app['twig']->render('route.twig');
});

// charities
$app->get('/charities', function () use ($app) {
    return $app['twig']->render('charities.twig');
});

// sponsor us
$app->get('/sponsor-us', function () use ($app) {
    return 'sponsor us page';
});

return $app;