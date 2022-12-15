<?php

require_once __DIR__ . '/DataSource.php';

class FileDataSource implements DataSource
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function writeData(string $data): void
    {
        file_put_contents($this->filename, $data);
    }

    public function readData(): string
    {
        return file_get_contents($this->filename);
    }
}
