<?php

require_once __DIR__ . '/AppleProduct.php';
require_once __DIR__ . '/XiaoMiProduct.php';
require_once __DIR__ . '/Product.php';

class SimpleFactory
{
    public static function createProduct(string $type) : Product
    {
        $product = null;
        switch ($type) {
            case 'apple':
                $product = new AppleProduct();
                break;
            case 'xiaomi':
                $product = new XiaoMiProduct();
                break;
            default:
                break;
        }
        return $product;
    }
}
