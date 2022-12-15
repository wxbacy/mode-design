<?php

require_once __DIR__ . '/Node.php';
require_once __DIR__ . '/Dir.php';

class File implements Node
{
    private Dir $dir;

    private string $filename;

    public function __construct(Dir $dir, string $filename)
    {
        $this->dir = $dir;
        $this->filename = $filename;
        $dir->addChild($this);
    }

    public function getType(): string
    {
        return 'file';
    }

    public function getPath(): string
    {
        return $this->dir->getPath() . '/' . $this->filename;
    }
}