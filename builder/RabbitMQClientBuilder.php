<?php

require_once __DIR__ . '/RabbitMQClient.php';

class RabbitMQClientBuilder
{
    private string $host = '127.0.0.1';

    private string $port = '5673';

    private string $password;

    private bool $isDurable = true;

    private int $mode = 1;

    private string $exchange;

    private string $queue;

    public function setHost(string $host)
    {
        $this->host = $host;
        return $this;
    }

    public function getHost() :string
    {
        return $this->host;
    }

    public function setPort(string $port)
    {
        $this->port = $port;
        return $this;
    }

    public function getPort() :string
    {
        return $this->port;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword() :string
    {
        return $this->password;
    }

    public function setIsDurable(string $isDurable)
    {
        $this->isDurable = $isDurable;
        return $this;
    }

    public function getIsDurable() :bool
    {
        return $this->isDurable;
    }

    public function setMode(string $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    public function getMode() :int
    {
        return $this->mode;
    }

    public function setExchange(string $exchange)
    {
        $this->exchange = $exchange;
        return $this;
    }

    public function getExchange() :string
    {
        return $this->exchange;
    }

    public function setQueue(string $queue)
    {
        $this->queue = $queue;
        return $this;
    }

    public function getQueue() :string
    {
        return $this->queue;
    }

    public function build() :RabbitMQClient
    {
        if ($this->mode == 1) {
            // TODO:: mode == 1判断
        } elseif ($this->mode == 2) {
            // TODO:: mode == 2判断
        } else {
            throw new Exception('mode error');
        }
        return new RabbitMQClient($this);
    }
}
