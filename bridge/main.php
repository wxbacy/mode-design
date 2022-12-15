<?php

require_once __DIR__ . '/UserService.php';
require_once __DIR__ . '/cache/Memorycache.php';
require_once __DIR__ . '/cache/Redis.php';
require_once __DIR__ . '/db/MongoDB.php';
require_once __DIR__ . '/db/MySQL.php';

$userService1 = new UserService(new Redis(), new MySQL());
$userService1->addUser(['user_id' => 9527, 'username' => '零零发']);

$userService2 = new UserService(new Memorycache(), new MySQL());
$userService2->addUser(['user_id' => 9527, 'username' => '零零发']);

$userService3 = new UserService(new Memorycache(), new MongoDB());
$userService3->addUser(['user_id' => 9527, 'username' => '零零发']);
