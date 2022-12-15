<?php

require_once __DIR__ . '/../../factory/ad/APPAd.php';

class OceanengineAPPAd implements APPAd
{
    public function serverAscribe() :void
    {
        echo '巨量服务端归因' . PHP_EOL;
    }

    public function sdkAscribe() :void
    {
        echo '巨量sdk归因' . PHP_EOL;
    }

    public function eventCallback() :void
    {
        echo '巨量事件回传' . PHP_EOL;
    }
}
