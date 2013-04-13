<?php

use Symfony\Component\HttpKernel\Debug\ErrorHandler;

require_once __DIR__ . '/../vendor/autoload.php';

ErrorHandler::register();

$app = require __DIR__ . '/../src/sf2ny/sf2ny.php';
$app->run();