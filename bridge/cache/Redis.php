<?php

require_once __DIR__ . '/Cache.php';

class Redis implements Cache
{
    public function set(string $key, string $value): void
    {
        echo 'redis set data success' . PHP_EOL;
    }
}