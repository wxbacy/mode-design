<?php

require_once __DIR__ . '/Command.php';
require_once __DIR__ . '/CommandExecuter.php';

class ShutdownCommand implements Command
{
    private array $commandExecuters;

    public function __construct(array $commandExecuters)
    {
        foreach ($commandExecuters as $commandExecuter) {
            if (!($commandExecuter instanceof CommandExecuter)) {
                throw new Exception('error CommandExecuters');
            }
        }
        $this->commandExecuters = $commandExecuters;
    }

    public function execute(): void
    {
        foreach ($this->commandExecuters as $commandExecuter) {
            $commandExecuter->shutdown();
        }
    }
}