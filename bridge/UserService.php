<?php

require_once __DIR__ . '/cache/Cache.php';
require_once __DIR__ . '/db/DB.php';

class UserService
{
    private Cache $cache;

    private DB $db;

    public function __construct(Cache $cache, DB $db)
    {
        $this->cache = $cache;
        $this->db = $db;
    }

    public function addUser(array $user) :void
    {
        $this->db->insert($user);
        $this->cache->set("user:info:{$user['user_id']}", json_encode($user));
    }
}
