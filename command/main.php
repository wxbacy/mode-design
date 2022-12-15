<?php

require_once __DIR__ . '/CommandExecuter.php';
require_once __DIR__ . '/DumpCommand.php';
require_once __DIR__ . '/ShutdownCommand.php';
require_once __DIR__ . '/SyncTimeCommand.php';
require_once __DIR__ . '/CommandReceiver.php';

$commandExecuters[] = new CommandExecuter('192.168.1.128');
$commandExecuters[] = new CommandExecuter('192.168.1.129');
$commandExecuters[] = new CommandExecuter('192.168.1.130');

echo '未使用命令模式时' . PHP_EOL;
// 未使用命令模式时
foreach ($commandExecuters as $commandExecuter) {
    $commandExecuter->dump();
    $commandExecuter->syncTime();
    $commandExecuter->shutdown();
}

echo '使用命令模式时' . PHP_EOL;
// 使用命令模式
$commandReceiver = new CommandReceiver();
$commandReceiver->addCommond(new DumpCommand($commandExecuters));
$commandReceiver->addCommond(new SyncTimeCommand($commandExecuters));
$commandReceiver->addCommond(new ShutdownCommand($commandExecuters));
$commandReceiver->execute();