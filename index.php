<?php

session_start();


require('vendor/autoload.php');
use Controller\PageController;
use Controller\ClientController;
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

                case 'rdvLog': $form = new UserController();
                $form -> formLoginAlert();
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

                case 'rendezVous': $form = new PageController();
                $form -> rendezVous();
                break;

                case 'ficheClient': $form = new ClientController();
                $form -> listAllClients();
                break;
                
                case 'administration': $form = new PageController();
                $form -> administration();
                break;

                case 'client': $client = new ClientController();
                $client -> modificationclient();
                break;

                case 'modifier': $modifier = new ClientController();
                $modifier -> modifier();
                break;

                case 'supprimer': $supprimer = new ClientController();
                $supprimer -> suppression();
                break;

                default: $accueil = new PageController();
                $accueil -> accueil();
                    
            }
        
    }
    
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
