<?php
namespace Controller;

// Chargement des classes
use Model\AlertManager;


class PageController
{
    function accueil()
    {
        $session = new AlertManager();
        require('view/frontend/accueil.php');
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

    function administration()
    {
        $session = new AlertManager();
        require('view/backend/administrationView.php');
    }

    

}