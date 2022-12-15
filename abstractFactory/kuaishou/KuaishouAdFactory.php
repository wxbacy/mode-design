<?php

require_once __DIR__ . "/../factory/AbstractAdFactory.php";
require_once __DIR__ . "/ad/KuaishouAPPAd.php";
require_once __DIR__ . "/ad/KuaishouH5Ad.php";

class KuaishouAdFactory implements AbstractAdFactory
{
    public function appAd(): APPAd
    {
        return new KuaishouAPPAd();
    }

    public function h5Ad(): H5Ad
    {
        return new KuaishouH5Ad();
    }
}
