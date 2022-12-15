<?php

require_once __DIR__ . '/DataSource.php';

class EncryptDataSource implements DataSource
{
    private DataSource $dataSource;

    public function __construct(DataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function writeData(string $data): void
    {
        $this->dataSource->writeData(base64_encode($data));
    }

    public function readData(): string
    {
        return base64_decode($this->dataSource->readData());
    }
}
