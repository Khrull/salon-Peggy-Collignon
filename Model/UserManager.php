<?php

namespace Model;

use Model\Manager;

class UserManager extends Manager
{
    //selectionne un utilisateur en fonction de son adresse mail dans la bdd
    public function getUser($email)
    {
        
        $db = $this->dbConnect();
        $users = $db->prepare('SELECT * FROM users WHERE mail= ?' );
        $users->execute(array($email));
        $result = $users->fetch();
        
        return $result;
    }

    // ajoute un nouvel utilisateur a la bdd
    public function newUser()
    {
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $db = $this->dbConnect();
        $newUser = $db->prepare('INSERT INTO users (mail, nom, prenom, phone, adresse, birth, pass, fiche, id_groupe) VALUES(?,?,?,?,?,?,?, "nouveau client", 3)');
        $user = $newUser->execute(array($_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['phone'], $_POST['adresse'], $_POST['birth'], $hash));
        return $user;
        	
    }

    //Renvoie tous les collaborateurs par ordre alphabetique
    public function getAllCollab()
    {
         $db = $this->dbConnect();
        $allClients = $db->query('SELECT id, mail, nom, prenom, phone FROM users WHERE id_groupe = 2 ORDER BY nom');
        while($clients = $allClients->fetchAll())
        {
            return $clients;
        }
    }

        // ajoute un nouvel utilisateur a la bdd
        public function newCollab()
        {
            $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $db = $this->dbConnect();
            $newUser = $db->prepare('INSERT INTO users (mail, nom, prenom, phone, adresse, birth, pass, fiche, id_groupe) VALUES(?,?,?,?,?,?,?, "nouveau collaborateur", 2)');
            $user = $newUser->execute(array($_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['phone'], $_POST['adresse'], $_POST['birth'], $hash));
            return $user;
                
        }

}