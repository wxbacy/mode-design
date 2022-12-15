<?php

class CommandExecuter
{
    private string $ip;

    public function __construct(string $ip)
    {
        $this->ip = $ip;
    }

    public function dump() :void
    {
        echo $this->ip . '备份成功' . PHP_EOL;
    }

    public function syncTime() :void
    {
        echo $this->ip . '时间同步成功' . PHP_EOL;
    }

    public function shutdown() :void
    {
        echo $this->ip . '关机成功' . PHP_EOL;
    }
}
