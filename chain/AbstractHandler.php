<?php

require_once __DIR__ . '/Handler.php';

abstract class AbstractHandler implements Handler
{
    private Handler $next;

    public function getNext(): Handler
    {
        return $this->next;
    }

    public function setNext(Handler $next): void
    {
        $this->next = $next;
    }
}
