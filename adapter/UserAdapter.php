<?php

require_once __DIR__ . '/UserInterface.php';
require_once __DIR__ . '/User.php';

class UserAdapter implements UserInterface
{
    public function getUsernameByID(int $userID): string
    {
        $userinfo = (new User())->getUserinfoByID($userID);
        return $userinfo['username'];
    }

    public function getUserAgeByID(int $userID): int
    {
        $userinfo = (new User())->getUserinfoByID($userID);
        return $userinfo['age'];
    }
}
