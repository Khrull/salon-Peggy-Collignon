<?php

session_start();


require('vendor/autoload.php');
use Controller\PageController;
use Controller\UserController;

$action ="";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

try {
        switch ($action) {

                case 'btnSeConnecter': $form = new UserController();
                $form -> formLogin();
                break;

                case 'btnCreerCompte': $form = new UserController();
                $form -> formInscription();
                break;

                case 'connexion': $connexion = new UserController();
                $connexion -> login();
                break;

                case 'deconnexion': $deconnexion = new UserController();
                $deconnexion -> logout();
                break;

                case 'inscription': $inscription = new UserController();
                $inscription -> addNewUser();
                break;

                case 'femme': $form = new PageController();
                $form -> pageFemme();
                break;

                case 'homme': $form = new PageController();
                $form -> pageHomme();
                break;

                case 'tarifsFemme': $form = new PageController();
                $form -> tarifsFemme();
                break;

                case 'tarifsHomme': $form = new PageController();
                $form -> tarifsHomme();
                break;

                default: $accueil = new PageController();
                $accueil -> accueil();
                    
            }
        
    }
    
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
