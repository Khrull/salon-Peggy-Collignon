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

                case 'btnSeConnecter': $btnconnexion = new UserController();
                $btnconnexion -> formLogin();
                break;

                case 'rdvLog': $rdvlog = new UserController();
                $rdvlog -> formLoginAlert();
                break;

                case 'btnCreerCompte': $newcompt = new UserController();
                $newcompt -> formInscription();
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

                case 'femme': $femme = new PageController();
                $femme -> pageFemme();
                break;

                case 'homme': $homme = new PageController();
                $homme -> pageHomme();
                break;

                case 'tarifsFemme': $tariffemme = new PageController();
                $tariffemme -> tarifsFemme();
                break;

                case 'tarifsHomme': $tarifhomme = new PageController();
                $tarifhomme -> tarifsHomme();
                break;

                case 'rendezVous': $rdv = new PageController();
                $rdv -> rendezVous();
                break;

                case 'ficheClient': $fiche = new ClientController();
                $fiche -> listAllClients();
                break;
                
                case 'agenda': $agenda = new PageController();
                $agenda -> agenda();
                break;
                
                case 'meContacter' : $contacter = new PageController();
                $contacter -> formContact();
                break;

                case 'envoyerMessage' : $envoyerMessage = new PageController();
                $envoyerMessage -> envoieMessage();
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
