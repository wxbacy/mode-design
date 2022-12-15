<?php

require_once __DIR__ . '/System.php';

class Phone
{
    public string $cpu;

    public string $design;

    public $sysVersion;

    public $sys;

    public function installSystem()
    {
        $this->sys = new System($this->sysVersion);
    }

    public function benchmark()
    {
        echo '1500000分' . PHP_EOL;
    }

    public function __clone()
    {
        $this->sys = new System('Android');
    }
}
