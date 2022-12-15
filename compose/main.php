<?php

require_once __DIR__ . '/Node.php';
require_once __DIR__ . '/Dir.php';
require_once __DIR__ . '/File.php';

$rootDir = new Dir('/root');
$srcDir = new Dir('/root/src');
$binDir = new Dir('/root/bin');
$rootDir->addChild($srcDir);
$rootDir->addChild($binDir);
$srcLibDir = new Dir('/root/src/lib');
$srcDir->addChild($srcLibDir);

$mysql = new File($binDir, 'mysql');
$mysqldump = new File($binDir, 'mysqldump');
$time = new File($srcDir, 'time.so');
$libevent = new File($srcLibDir, 'libevent.so');

function printNode(Dir $node)
{
    $children = $node->getChildren();
    foreach ($children as $child) {
        echo $child->getPath() . PHP_EOL;
        if ($child->getType() === 'directory') {
            printNode($child);
        }
    }
}

printNode($rootDir);
echo PHP_EOL;



