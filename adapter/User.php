<?php

class User
{
    public function getUserinfoByID(int $userID) :array
    {
        return [
            'user_id' => $userID,
            'username' => uniqid('ddz'),
            'age' => mt_rand(18, 35)
        ];
    }
}
