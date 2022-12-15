<?php

interface Cache
{
    public function set(string $key, string $value) :void;
}
