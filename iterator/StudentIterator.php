<?php

require_once __DIR__ . '/School.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/IteratorCustom.php';

class StudentIterator implements IteratorCustom
{
    private int $cursor = -1;

    private School $school;

    public function __construct(School $school)
    {
        $this->school = $school;
    }

    public function next() :null|Student
    {
        if (!$this->hasNext()) {
            return null;
        }
        $this->cursor++;
        return $this->school->getStudents()[$this->cursor];
    }

    public function hasNext(): bool
    {
        return $this->cursor < (count($this->school->getStudents()) - 1);
    }
}