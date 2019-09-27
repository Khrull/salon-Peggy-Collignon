<?php
namespace Controller;

// Chargement des classes
use Model\AlertManager;



class PageController extends Controller
{
    function accueil()
    {
        $session = new AlertManager();
        require('view/frontend/accueil.php');
    }

    function pageEquipe()
    {
        $session = new AlertManager();
        require('view/frontend/equipe.php');
    }

    function pageFemme()
    {
        $session = new AlertManager();
        require('view/frontend/lafemmeView.php');
    }

    function pageHomme()
    {
        $session = new AlertManager();
        require('view/frontend/lhommeView.php');
    }

    function tarifsFemme()
    {
        $session = new AlertManager();
        require('view/frontend/tarifFemmeView.php');
    }

    function tarifsHomme()
    {
        $session = new AlertManager();
        require('view/frontend/tarifHommeView.php');
    }

    function rendezVous()
    {
        $session = new AlertManager();
        require('view/frontend/rendezVousView.php');
    }

    function agenda()
    {
        $session = new AlertManager();
        require('view/backend/agenda.php');
    }

    function formContact()
    {
        $session = new AlertManager();
        require('view/frontend/formContactView.php');
    }

    function mentions()
    {
        $session = new AlertManager();
        require('view/frontend/mentionsLegalesView.php');
    }

    function envoieMessage()
    {
       
        if (isset($_POST['message']))
        {
            $envoie = $this->mailMe();
        }
        $session = new AlertManager();
        $session->setflash('votre message a bien été envoyé','success');
        header('location: index.php?action=accueil');
    }

    

}