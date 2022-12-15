<?php

require_once __DIR__ . '/../../factory/ad/H5Ad.php';

class KuaishouH5Ad implements H5Ad
{
    public function jsAscribe() :void
    {
        echo '快手js归因' . PHP_EOL;
    }
}
