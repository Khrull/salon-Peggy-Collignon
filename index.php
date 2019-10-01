<?php

session_start();


require('vendor/autoload.php');
use Controller\PageController;
use Controller\ClientController;
use Controller\UserController;
use Controller\Controller;

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

                case 'ajouterCollab': $ajouterCollab = new UserController();
                $ajouterCollab -> addNewCollab();
                break;

                case 'equipe': $femme = new PageController();
                $femme -> pageEquipe();
                break;

                case 'femme': $femme = new PageController();
                $femme -> listAllProdFemme();
                break;

                case 'homme': $homme = new PageController();
                $homme -> listAllProdHomme();
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

                case 'fichierClient': $fiche = new ClientController();
                $fiche -> listAllClients();
                break;
                
                case 'agenda': $agenda = new PageController();
                $agenda -> agenda();
                break;
                
                case 'meContacter': $contacter = new PageController();
                $contacter -> formContact();
                break;

                case 'mentionsLegales': $mentions = new Pagecontroller();
                $mentions -> mentions();
                break;

                case 'envoyerMessage' : $envoyerMessage = new PageController();
                $envoyerMessage -> envoieMessage();
                break;

                case 'client': $client = new ClientController();
                $client -> modificationclient();
                break;

                case 'collaborateur': $collaborateur = new UserController();
                $collaborateur -> modificationCollaborateur();
                break;

                case 'pageCollab': $pageCollab = new UserController();
                $pageCollab -> pageCollaborateur();
                break;

                case 'ajoutProd': $ajoutProd = new PageController();
                $ajoutProd -> pageAjoutProd();
                break;

                case 'ajouterProd': $ajouterProd = new Controller();
                $ajouterProd -> ajouterProd();
                break;

                case 'modifier': $modifier = new ClientController();
                $modifier -> modifier();
                break;

                case 'modifierCollab': $modifier = new UserController();
                $modifier -> modifierCollab();
                break;

                case 'supprimer': $supprimer = new ClientController();
                $supprimer -> suppression();
                break;

                case 'suppProd': $suppProd = new Controller();
                $suppProd -> supprimerProd();
                break;

                case 'supprimerCollab': $supprimerCollab = new UserController();
                $supprimerCollab -> suppressionCollab();
                break;

                default: $accueil = new PageController();
                $accueil -> accueil();
                    
            }
        
    }
    
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
