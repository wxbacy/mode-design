<?php

require_once __DIR__ . '/DB.php';

class MongoDB implements DB
{
    public function insert(array $data): void
    {
        echo 'mongodb insert success' . PHP_EOL;
    }
}
