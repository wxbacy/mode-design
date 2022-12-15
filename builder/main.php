<?php

require_once __DIR__ . '/RabbitMQClientBuilder.php';
require_once __DIR__ . '/RabbitMQClient.php';

$builder = new RabbitMQClientBuilder();
$builder->setHost('192.168.128.131')->setPort('5693');
$rabbitMQClient = $builder->build();
$rabbitMQClient->sendMessage('我爱我家');
