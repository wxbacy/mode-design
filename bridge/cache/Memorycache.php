<?php

require_once __DIR__ . '/Cache.php';

class Memorycache implements Cache
{
    public function set(string $key, string $value): void
    {
        echo 'memorycache set data success' . PHP_EOL;
    }
}
