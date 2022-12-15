<?php

require_once __DIR__ . '/Student.php';

interface IteratorCustom
{
    public function hasNext() :bool;

    public function next() :null|Student;
}
