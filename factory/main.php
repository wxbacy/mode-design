<?php

require_once __DIR__ . '/SimpleFactory.php';

$product = SimpleFactory::createProduct('apple');
echo $product->showName() . PHP_EOL;