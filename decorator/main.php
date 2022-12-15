<?php

require_once __DIR__ . '/DataSource.php';
require_once __DIR__ . '/FileDataSource.php';
require_once __DIR__ . '/JsonDataSource.php';
require_once __DIR__ . '/EncryptDataSource.php';

$dataSource1 = new FileDataSource(__DIR__ . './data1.txt');
$dataSource1->writeData('小明 身高180 年薪50万 未婚');
echo $dataSource1->readData() . PHP_EOL;

$dataSource2 = new JsonDataSource(new FileDataSource(__DIR__ . './data2.txt'));
$dataSource2->writeData('小明 身高180 年薪50万 未婚');
echo $dataSource2->readData() . PHP_EOL;

$dataSource3 = new EncryptDataSource(new FileDataSource(__DIR__ . './data3.txt'));
$dataSource3->writeData('小明 身高180 年薪50万 未婚');
echo $dataSource3->readData() . PHP_EOL;

$dataSource4 = new EncryptDataSource(new JsonDataSource(new FileDataSource(__DIR__ . './data4.txt')));
$dataSource4->writeData('小明 身高180 年薪50万 未婚');
echo $dataSource4->readData() . PHP_EOL;
