<?php

namespace App\Service;

class Password
{
    public function hash(string $password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function verify(string $password, string $hash)
    {
        return $this->hash($password) === $hash;
    }
}