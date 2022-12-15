<?php

require_once __DIR__ . '/../factory/AbstractAdFactory.php';
require_once __DIR__ . '/ad/OceanengineAPPAd.php';
require_once __DIR__ . '/ad/OceanengineH5Ad.php';

class OceanengineAdFactory implements AbstractAdFactory
{
    public function appAd(): APPAd
    {
        return new OceanengineAPPAd();
    }

    public function h5Ad(): H5Ad
    {
        return new OceanengineH5Ad();
    }
}
