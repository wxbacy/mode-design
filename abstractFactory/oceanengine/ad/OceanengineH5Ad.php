<?php

require_once __DIR__ . '/../../factory/ad/H5Ad.php';

class OceanengineH5Ad implements H5Ad
{
    public function jsAscribe() :void
    {
        echo '巨量js归因' . PHP_EOL;
    }
}
