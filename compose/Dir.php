<?php

require_once __DIR__ . '/Node.php';

class Dir implements Node
{
    private string $path;

    private array $nodeList;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function getType(): string
    {
        return 'directory';
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function addChild(Node $node) :void
    {
        $this->nodeList[] = $node;
    }

    public function removeChild(Node $node) :void
    {
        foreach ($this->nodeList as $k => $child) {
            if ($child === $node) {
                unset($this->nodeList[$k]);
            }
        }
    }

    public function getChildren() :array
    {
        return $this->nodeList;
    }
}