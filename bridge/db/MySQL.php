<?php

require_once __DIR__ . '/DB.php';

class MySQL implements DB
{
    public function insert(array $data): void
    {
        echo 'mysql insert success' . PHP_EOL;
    }
}
