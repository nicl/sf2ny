<?php

use Symfony\Component\HttpFoundation\Request;

$app = require __DIR__ . '/bootstrap.php';

// homepage
$app->get('/', function () use ($app) {
    return $app['twig']->render('homepage.twig');
});

// who we are
$app->get('/who-are-we', function () use ($app) {
    return $app['twig']->render('who-are-we.twig');
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

// login
$app->get('/login', function (Request $request) use ($app) {
    $vars = array(
        'error'         => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
        );

    return $app['twig']->render('login.twig', $vars);
});

return $app;