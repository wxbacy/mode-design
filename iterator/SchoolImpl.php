<?php

require_once __DIR__ . '/School.php';
require_once __DIR__ . '/IteratorCustom.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/StudentIterator.php';

class SchoolImpl implements School
{
    private array $students = [];

    public function addStudent(Student $student) :void
    {
        array_push($this->students, $student);
    }

    public function removeStudent(Student $student) :void
    {
        foreach ($this->students as $k => $v) {
            if ($v->getIdCard() === $student->getIdCard()) {
                unset($this->students[$k]);
                break;
            }
        }
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function iterator() :IteratorCustom
    {
        return new StudentIterator($this);
    }
}
