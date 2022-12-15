<?php

interface Handler
{
    public function handle(array $request) :void;

    public function setNext(Handler $next) :void;

    public function getNext() :Handler;
}
