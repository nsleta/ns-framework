<?php

$config = require __DIR__ . DIRECTORY_SEPARATOR . 'config.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$app = new \framework\Web\Application($config);
$app->run();
