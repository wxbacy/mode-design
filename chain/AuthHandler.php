<?php

require_once __DIR__ . '/AbstractHandler.php';

class AuthHandler extends AbstractHandler
{
    public function handle(array $request): void
    {
        echo 'auth check success' . PHP_EOL;
        $nextHandler = $this->getNext();
        if (!$nextHandler) {
            throw new Exception('最终必须把请求交给ProcessHandler');
        }
        $nextHandler->handle($request);
    }
}
