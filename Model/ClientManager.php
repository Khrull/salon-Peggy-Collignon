<?php

namespace Model;

use Model\Manager;

class ClientManager extends Manager
{
    //Renvoie tous les clients par ordre alphabetique
    public function getAllClients()
    {
        $db = $this->dbConnect();
        $allClients = $db->query('SELECT id, mail, nom, prenom, phone,adresse, birth, SUBSTRING(fiche, 1, 15) AS preview FROM users WHERE id_groupe = 3 ORDER BY nom');
        $allClients->execute(array());
        $results = $allClients->fetchAll();
        return $results;
    }

    //Renvoie le client selectionné
    public function getCLient($clientId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, mail, nom, prenom, phone,adresse, birth, fiche FROM users WHERE id = ?');
        $req->execute(array($clientId));
        $client = $req->fetch();
        return $client;
    }
    
    // Efface un client
    public function deleteClient($clientId)
    {
        $db = $this->dbConnect();
        $deleteClient = $db->prepare('DELETE FROM users WHERE id = ?');
        $deleteClient->execute(array($clientId));
    }

    //modifie une fiche client
        public function modifierFiche($clientId, $clientPhone, $clientAdresse, $clientFiche)
        {
            $db = $this->dbConnect();
            $modClient = $db->prepare('UPDATE users SET phone = ?, adresse = ?, fiche = ? WHERE id = ?');
            $modifClient = $modClient->execute(array($clientPhone, $clientAdresse, $clientFiche, $clientId));
        return $modifClient;
        }
}