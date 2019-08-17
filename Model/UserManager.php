<?php

namespace Model;

use Model\Manager;

class UserManager extends Manager
{
    public function getUser($email)
    {
        
        $db = $this->dbConnect();
        $users = $db->prepare('SELECT * FROM users WHERE mail= ?' );
        $users->execute(array($email));
        $result = $users->fetch();
        
        return $result;
    }

    public function newUser()
    {
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $db = $this->dbConnect();
        $newUser = $db->prepare('INSERT INTO users (mail, nom, prenom, phone, adresse, birth, pass, date_inscription, fiche, id_groupe) VALUES(?,?,?,?,?,?,?, NOW(), "nouveau client", 3)');
        $user = $newUser->execute(array($_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['phone'], $_POST['adresse'], $_POST['birth'], $hash));
        return $user;
        	
    }
}