<?php

require_once __DIR__ . '/RabbitMQClientBuilder.php';

class RabbitMQClient
{
    public function __construct(RabbitMQClientBuilder $builder)
    {
        // TODO::获取builder的属性初始化RabbitMQClient
        echo '初始化RabbitMQClient' . PHP_EOL;
        echo 'connect to ' . $builder->getHost() . ':' . $builder->getPort() . ' success' . PHP_EOL;
    }

    public function sendMessage($msg)
    {
        echo "send {$msg} success" . PHP_EOL;
    }
}