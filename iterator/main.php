<?php

require_once __DIR__ . '/StudentImpl.php';
require_once __DIR__ . '/SchoolImpl.php';
require_once __DIR__ . '/StudentIterator.php';

$school = new SchoolImpl();
$school->addStudent(new StudentImpl('小民', 185, 15, '3501251xxxxx'));
$school->addStudent(new StudentImpl('小米', 175, 15, '3501251yyyyy'));
$school->addStudent(new StudentImpl('小红', 165, 15, '3501251nnnnn'));

$iterator = $school->iterator();
while ($iterator->hasNext()) {
    echo $iterator->next()->getIdCard() . PHP_EOL;
}