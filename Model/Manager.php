<?php

namespace Model;

class Manager
{
    //connexion a la base de données
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=salonpc;charset=utf8', 'root', '');
        return $db;
    }
}