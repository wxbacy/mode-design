<?php

require_once __DIR__ . '/Student.php';

class StudentImpl implements Student
{
    private string $name;

    private int $age;

    private int $height;

    private string $idCard;

    public function __construct(string $name, int $height, int $age, string $idCard)
    {
        $this->name = $name;
        $this->height = $height;
        $this->age = $age;
        $this->idCard = $idCard;
    }

    public function getIdCard() :string
    {
        return $this->idCard;
    }
}
