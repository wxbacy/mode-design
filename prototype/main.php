<?php

require_once __DIR__ . '/Phone.php';

$applePhone = new Phone();
$applePhone->cpu = 'A15';
$applePhone->design = '刘海直屏';
$applePhone->sysVersion = 'iOS16';
$applePhone->installSystem();
var_dump($applePhone);
echo PHP_EOL;
$applePhone->benchmark();

$xiaomiPhone = clone $applePhone;
$xiaomiPhone->cpu = '骁龙8';
$xiaomiPhone->sysVersion = 'MIUI';
var_dump($xiaomiPhone);
echo PHP_EOL;
$xiaomiPhone->benchmark();

var_dump($applePhone === $xiaomiPhone);
echo PHP_EOL;
var_dump($applePhone->cpu === $xiaomiPhone->cpu);
echo PHP_EOL;
var_dump($applePhone->design === $xiaomiPhone->design);
echo PHP_EOL;
var_dump($applePhone->sys === $xiaomiPhone->sys);
echo PHP_EOL;

