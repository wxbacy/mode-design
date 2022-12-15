<?php

require_once __DIR__ . '/Command.php';

class CommandReceiver
{
    private array $commands;

    public function addCommond(Command $command)
    {
        $this->commands[] = $command;
    }

    public function execute() :void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
