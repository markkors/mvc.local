<?php


class user
{
    public string $id;
    public string $name;
    public string $password;

    public function __construct()
    {
        $this->id='-1';
        $this->name='no user';
        $this->password='no password';
    }
}