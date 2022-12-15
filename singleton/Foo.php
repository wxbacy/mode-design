<?php

class Foo
{
    private static $instance = null;

    private string $name;

    private function __construct(){}

    private function __clone(): void {}

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
