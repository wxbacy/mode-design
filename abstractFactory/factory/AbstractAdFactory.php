<?php

require_once __DIR__ . '/ad/APPAd.php';
require_once __DIR__ . '/ad/H5Ad.php';

interface AbstractAdFactory
{
    public function appAd() :APPAd;

    public function h5Ad() :H5Ad;
}