<?php

require_once __DIR__ . '/MobilePhoneSpec.php';
require_once __DIR__ . '/MobilePhone.php';

$mobilePhoneSpec = new MobilePhoneSpec('iPhone14 pro', 'apple', '高性能 续航提升 5G苹果手机');
$mobilePhones = [];
for ($i = 0; $i < 100; $i++) {
    $mobilePhones[] = new MobilePhone(uniqid('sn_'), $mobilePhoneSpec);
}
/*
$mobilePhones[99] = new MobilePhone(
    uniqid('sn_'),
    new MobilePhoneSpec('iPhone14 pro', 'apple', '高性能 续航提升 5G苹果手机')
);
*/
echo $mobilePhones[0]->getSN() . PHP_EOL;
echo $mobilePhones[99]->getSN() . PHP_EOL;
var_dump($mobilePhones[0]->getSpec()) . PHP_EOL;
var_dump($mobilePhones[99]->getSpec()) . PHP_EOL;
var_dump($mobilePhones[0]->getSpec() === $mobilePhones[99]->getSpec()) . PHP_EOL;