<?php

require_once __DIR__ . '/CacheManager.php';
require_once __DIR__ . '/DBManager.php';
require_once __DIR__ . '/GatewayManager.php';

class Application
{
    public function init()
    {
        (new CacheManager())->init();
        (new DBManager())->init();
        (new GatewayManager())->init();
    }
}
