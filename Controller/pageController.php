<?php
namespace Controller;

// Chargement des classes
use Model\AlertManager;



class PageController extends Controller
{
    function accueil()
    {
        require('view/frontend/accueil.php');
    }

    function pageEquipe()
    {
        require('view/frontend/equipe.php');
    }

    function pageFemme()
    {
        require('view/frontend/lafemmeView.php');
    }

    function pageHomme()
    {
        require('view/frontend/lhommeView.php');
    }

    function tarifsFemme()
    {
        require('view/frontend/tarifFemmeView.php');
    }

    function tarifsHomme()
    {
        require('view/frontend/tarifHommeView.php');
    }

    function rendezVous()
    {
        require('view/frontend/rendezVousView.php');
    }

    function agenda()
    {
        require('view/backend/agenda.php');
    }

    function formContact()
    {
        require('view/frontend/formContactView.php');
    }

    function mentions()
    {
        require('view/frontend/mentionsLegalesView.php');
    }

    function envoieMessage()
    {
       
        if (isset($_POST['message']))
        {
            $envoie = $this->mailMe();
        }
        $session = $this->setflash('votre message a bien été envoyé','success');
        header('location: index.php?action=accueil');
    }

    

}