<?php

class UserModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Database();
        $this->bdd = $this->bdd->getBdd();
    }

    public function verify($login)
    {
        $query = $this->bdd->prepare('SELECT * FROM user WHERE login = ?');
        $query->execute([$login]);
        $user = $query->fetch();
        return $user;
    }
}
