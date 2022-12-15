<?php

interface UserInterface
{
    public function getUsernameByID(int $userID) :string;

    public function getUserAgeByID(int $userID) :int;
}