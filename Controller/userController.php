<?php
namespace Controller;

// Chargement des classes
use Model\UserManager;

class UserController extends Controller
{
    //affiche le formulaire de connexion
    function formLogin()
    {
        require('view/frontend/connexionView.php');
    }

    //affiche une alerte sur la page de connexion pour la prise de rdv
    function formLoginAlert()
    {
        
        $session = $this->setflash('connectez-vous ou inscrivez-vous pour prendre rendez vous.','info');
        require('view/frontend/connexionView.php');
    }

    //affiche le formulaire d'inscription
    function formInscription()
    {
        require('view/frontend/inscriptionView.php');
    }


    //fonction de connexion
    function login()
    {
        //les champs ne sont pas vides
        if (!empty($_POST['email']) && !empty($_POST['password'])) 
        {
            //les champs moins les espaces sont compares a la bdd
            $email=trim($_POST['email']);
            $pass=trim($_POST['password']);
            $userManager = new UserManager();
            $user = $userManager->getUser($email);

        
            //si l'utilisateur n'existe pas 
            if ($user===false)
            {
                
                $session= $this->setflash('identifiant ou mot de passe erroné.','danger');
                header('Location: index.php?action=btnSeConnecter');
                
            }
            //si le mot de passe correspond recuperation des donnees
            else
            {
                if (password_verify($pass, $user['pass']))
                {
                    $_SESSION['utilisateur'] = $user['prenom'];
                    $_SESSION['utilisateurName'] = $user['nom'];
                    $_SESSION['utilisateurMail'] = $user['mail'];
                    $_SESSION['idUtilisateur'] = $user['id'];
                    $_SESSION['grpUtilisateur'] = $user['id_groupe'];
                    $session = $this->setflash("Bonjour et bienvenue ".$user['prenom'], 'success');
                    header('Location: index.php');
                    
                }

                //si le mot de passe ne correspond pas 
                else
                {
                    $session = $this->setflash('identifiant ou mot de passe erroné.','danger');
                    header('Location: index.php?action=btnSeConnecter');
                
                }
            }
        }

        //si un ou les champs ne sont pas remplis
        elseif (empty($_POST['email']) || empty($_POST['password']))
        {
            $session= $this->setflash('identifiant et/ou de passe manquants.','danger');
            header('Location: index.php?action=btnSeConnecter');
        }    
    }

    //fonction de deconnexion
    function logout()
    {
        session_unset ();
        session_destroy();
        header('location: index.php?action=btnSeConnecter');
    }

    //fonction d'ajout d'un nouvel utilisateur
    function addNewUser()
    {
        //si tous les champs sont remplis
        if(isset($_POST["email"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["phone"]) && isset($_POST["adresse"]) && isset($_POST["birth"]) && isset($_POST["password"]) && isset($_POST["conf_password"]))
        {
            //si l'adresse mail est au bon format
           if(filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL))
            {
                //si l'adresse mail n'est pas deja utilisee
                $email=trim($_POST['email']);
                $userManager = new UserManager();
                $user = $userManager->getUser($email);
                if(trim($_POST["email"])!=$user['mail'])
                {
                    //si le mot de passe et sa confirmation correspondent
                    if($_POST["password"] == $_POST["conf_password"])
                    {
                        
                        $userManager = new UserManager();
                        $newUser = $userManager->newUser();
                        header('Location: index.php?action=btnSeConnecter');
                        $session = $this->setflash('Inscription réussie, veuillez vous connecter.','success');
                    }
                    else 
                    {
                        header('Location: index.php?action=btnSeConnecter');
                        $session = $this->setflash('Les 2 mots de passe sont différents!','danger');
                    }
                }
                else
                {
                    header('Location: index.php?action=btnSeConnecter');
                    $session = $this->setflash('cette adresse mail est déja utilisée!','danger');
                }    
            }
            else
            {
                header('Location: index.php?action=btnSeConnecter');
                $session = $this->setflash('Le format de l\'adresse mail est incorrect !','danger');
            }
        }
        else
        {
            header('Location: index.php?action=btnSeConnecter');
            $session = $this->setflash('Tous les champs doivent être remplis','danger');
        }       
    }
}    