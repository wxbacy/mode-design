<?php

require_once __DIR__ . '/../../factory/ad/APPAd.php';

class KuaishouAPPAd implements APPAd
{
    public function serverAscribe() :void
    {
        echo '快手服务端归因' . PHP_EOL;
    }

    public function sdkAscribe() :void
    {
        echo '快手sdk归因' . PHP_EOL;
    }

    public function eventCallback() :void
    {
        echo '快手事件回传' . PHP_EOL;
    }
}
