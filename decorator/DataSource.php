<?php

interface DataSource
{
    public function writeData(string $data) :void;

    public function readData() :string;
}