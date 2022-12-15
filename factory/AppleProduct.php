<?php

require_once __DIR__ . '/Product.php';

class AppleProduct implements Product
{
    public function showName()
    {
        return 'apple mobile phone';
    }
}
