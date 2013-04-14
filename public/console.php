<?php

// bootstrap
require_once __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../src/sf2ny/sf2ny.php';

// add schema
$schema = $app['db']->getSchemaManager()->createSchema();
$addBlog = new sf2ny\Schema\AddBlogType($schema);
$addBlog->create();
print("Added blog type schema!");