<?php

require_once __DIR__ . '/AuthHandler.php';
require_once __DIR__ . '/CacheHandler.php';
require_once __DIR__ . '/ProcessHandler.php';

$authHandler = new AuthHandler();
$cacheHandler = new CacheHandler();
$processHandler = new ProcessHandler();

$authHandler->setNext($cacheHandler);
$cacheHandler->setNext($processHandler);

$request = ['header' => 'xxxx', 'body' => 'yyyy'];

$authHandler->handle($request);

