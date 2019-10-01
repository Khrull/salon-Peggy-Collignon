<?php
namespace Controller;

// Chargement des classes
use Model\ClientManager;


class ClientController extends Controller
{

    // affiche la liste de tous les clients
    function listAllClients()
    {
        $clientManager = new ClientManager();
        $clientParPage = 5;
        $nbClients = $clientManager->getNbClients();
        $pagesTotales = ceil($nbClients/$clientParPage);
        if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales)
        {
            $_GET['page'] = intval($_GET['page']);
            $pageCourante = $_GET['page'];
        }
        else
        {
            $pageCourante = 1;
        }

        $depart = ($pageCourante-1)*$clientParPage;
        $allClients = $clientManager->getAllClients($depart, $clientParPage);
      

        require('view/backend/fichierClientView.php');
    }

    //affiche le client choisi sur la page de modification
    function modificationClient()
    {
        if (isset($_GET['id']) > 0)
        {
            $clientManager = new ClientManager();
            $client = $clientManager->getClient($_GET['id']);
        }
       
        require('view/backend/FicheClientView.php');
    }

    //modifie les donnees du client dans la bdd
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
        $session = $this->setflash('la fiche client a bien été modifié','success');
        header('location: index.php?action=fichierClient');
    }

    //supprime un client de la bdd
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
        $session = $this->setflash('La fiche client a bien été supprimé','success');
        header('Location: index.php?action=fichierClient');
    }

    
}    