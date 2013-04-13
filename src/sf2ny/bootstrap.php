<?php

$app = new Silex\Application();

$env = getenv('APP_ENV') ?: 'prod';
$app->register(new Igorw\Silex\ConfigServiceProvider(__DIR__ . "/../../resources/config/$env.json"));

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../../resources/views',
));

$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->register(new Silex\Provider\SecurityServiceProvider());
$app['security.firewalls'] = array(
    'admin' => array(
        'pattern' => '^.*$',
        'anonymous' => true,
        'form' => array('login_path' => '/login', 'check_path' => '/login_check'),
        'logout' => array('logout_path' => '/logout'),
        'users' => array(
            'admin' => array('ROLE_ADMIN', '5FZ2Z8QIkA7UTZ4BYkoC+GsReLf569mSKDsfods6LYQ8t+a8EW9oaircfMpmaLbPBh4FOBiiFyLfuZmTSUwzZg=='),
        ),
    ),
);

// replicate behaviour of security trait
$app['user'] = function ($app) {
    $token = $app['security']->getToken();

    if ($token) {
        $user = $token->getUser();
        if (is_object($user)) {
            return $user;
        }
    }

    return null;
};

return $app;