<?php

require_once __DIR__ . '/AbstractHandler.php';

class ProcessHandler extends AbstractHandler
{
    public function handle(array $request): void
    {
        echo 'process handle success' . PHP_EOL;
    }
}
