<?php

require_once __DIR__ . '/UserAdapter.php';

$userAdapter = new UserAdapter();
$username = $userAdapter->getUsernameByID(9527);
$age = $userAdapter->getUserAgeByID(9527);
echo $username . PHP_EOL;
echo $age . PHP_EOL;
