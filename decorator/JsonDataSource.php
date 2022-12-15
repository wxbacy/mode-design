<?php

require_once __DIR__ . '/DataSource.php';

class JsonDataSource implements DataSource
{
    private DataSource $dataSource;

    public function __construct(DataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function writeData(string $data): void
    {
        $this->dataSource->writeData(json_encode(['content' => $data]));
    }

    public function readData(): string
    {
        return json_decode($this->dataSource->readData())->content;
    }
}
