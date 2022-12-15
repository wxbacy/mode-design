<?php

require_once __DIR__ . '/Product.php';

class XiaoMiProduct implements Product
{
    public function showName()
    {
        return 'xiaomi mobile phone';
    }
}
