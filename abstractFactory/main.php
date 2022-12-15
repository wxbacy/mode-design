<?php

require_once __DIR__ . '/kuaishou/KuaishouAdFactory.php';
require_once __DIR__ . '/oceanengine/OceanengineAdFactory.php';

$adFactory = new OceanengineAdFactory();
$appAd = $adFactory->appAd();
$appAd->serverAscribe();
$appAd->sdkAscribe();
$appAd->eventCallback();

$h5Ad = $adFactory->h5Ad();
$h5Ad->jsAscribe();