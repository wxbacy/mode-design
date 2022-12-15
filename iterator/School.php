<?php

require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/IteratorCustom.php';

interface School
{
    public function addStudent(Student $student) :void;

    public function removeStudent(Student $student) :void;

    public function iterator() :IteratorCustom;

    public function getStudents() :array;
}
