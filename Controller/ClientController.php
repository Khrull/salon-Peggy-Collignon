<?php
namespace Controller;

// Chargement des classes
use Model\AlertManager;
use Model\ClientManager;


class ClientController
{


    function listAllClients()
    {
        $session = new AlertManager();
        $clientManager = new ClientManager();
        $allClients = $clientManager->getAllClients();

        require('view/backend/fichierClientView.php');
    }

    function modificationClient()
    {
        if (isset($_GET['id']) > 0)
        {
            $clientManager = new ClientManager();
            $client = $clientManager->getClient($_GET['id']);
        }
       
        require('view/backend/FicheClientView.php');
    }

    function modifier()
    {
        if (isset($_GET['id']))
        {
            $modFiche = new ClientManager();
            $modifFiche = $modFiche->modifierFiche($_GET['id'], $_POST['phone'], $_POST['adresse'], $_POST['fiche']);
        }
        else
        {
            throw new Exception('Aucun identifiant de client envoyé');    
        }
        $session = new AlertManager();
        $session->setflash('la fiche client a bien été modifié','success');
        header('location: index.php?action=ficheClient');
    }

    function suppression()
    {
        if (isset ($_GET['id']))
        {
            $clientManager = new ClientManager();
            $deletePost = $clientManager->deleteClient($_GET['id']);
        }
        else 
        {
            throw new Exception('Aucun identifiant de client envoyé');
        }    
        $session = new AlertManager();
        $session->setflash('La fiche client a bien été supprimé','success');
        header('Location: index.php?action=listAllPostsTemp');
    }

    
}    