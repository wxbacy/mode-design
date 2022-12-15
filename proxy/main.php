<?php

require_once __DIR__ . '/BilibiliDownloadProxy.php';

$bilibiliDownloadProxy = new BilibiliDownloadProxy();
var_dump($bilibiliDownloadProxy->getCache()) . PHP_EOL;
//$bilibiliDownloadProxy->download('http://www.baidu.com/xxxxx');
$bilibiliDownloadProxy->download('http://www.bilibili.com/xxxxx');
var_dump($bilibiliDownloadProxy->getCache()) . PHP_EOL;
