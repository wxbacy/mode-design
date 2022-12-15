<?php

require_once __DIR__ . '/Foo.php';

$foo1 = Foo::getInstance();
$foo2 = Foo::getInstance();

if ($foo1 === $foo2) {
    echo 'foo1 === foo2';
} else {
    echo 'foo1 !== foo2';
}
echo PHP_EOL;

$foo1->setName('王小板');
echo $foo1->getName() . PHP_EOL;
echo $foo2->getName() . PHP_EOL;

