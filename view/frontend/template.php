
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Peggy Collignon Coiffeur Coloriste et barber shop à Verny"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css?family=Lusitana&display=swap" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet" />
        <link rel="icon" href="public/images/logo.jpg" /> 
    </head>
        
    <body>

            <!-- HEADER -->
            <header id="header">
            
                <!-- Menu de navigation -->
                <nav class="navbar shadow-lg fixed-top navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i> Salon Peggy COLLIGNON</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">  
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <?php if(isset($_SESSION['utilisateur']))
                                { ?>
                                <li><a class="nav-item nav-link" href="index.php?action=deconnexion">Se déconnecter</a></li>
                                <li><a class="nav-item nav-link" href="index.php?action=rendezVous">Rendez-vous</a></li>
                                <?php }
                                else {?>
                                <li><a class="nav-item nav-link" href="index.php?action=btnSeConnecter">Se connecter</a></li>
                                <li><a class="nav-item nav-link" href="index.php?action=btnCreerCompte">Créer un compte</a></li>
                                <li><a class="nav-item nav-link" href="index.php?action=rdvLog">Rendez-vous</a></li>
                                <?php }?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">La Femme</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.php?action=femme">Nos produits</a>
                                        <a class="dropdown-item" href="index.php?action=tarifsFemme">Les tarifs</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">L'Homme</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.php?action=homme">Nos produits</a>
                                        <a class="dropdown-item" href="index.php?action=tarifsHomme">Les tarifs</a>
                                </li>
                                <?php if(isset($_SESSION['utilisateur']))
                                {
                                    if($_SESSION['grpUtilisateur']==1)
                                        {?>
                                            <li><a class="nav-item nav-link" href="index.php?action=ficheClient">Fichier client</a></li>
                                            <li><a class="nav-item nav-link" href="index.php?action=agenda">Agenda</a></li>
                                        <?php }
                                    elseif($_SESSION['grpUtilisateur']==2)
                                    {?>
                                        <li><a class="nav-item nav-link" href="index.php?action=ficheClient">Fichier client</a></li>
                                    <?php }    
                                }?>
                            </div>
                        </div>               
                </nav>        
            </header>


        <!-- SECTION PRINCIPALE -->
        <div class="bloc_page">
            <?= $content ?>
        </div>
            
        <footer class="footer">
            <div class="container-dark bg-dark">
                <div class="row" id="foot">
                    <div class="col-xl-4 logobio">
                        <img src="public/images/la-biosthetique-logo.jpg" class="rounded" alt="la-biosthetique-logo">
                    </div>
                    <div class="col-xl-4">
                        <div class="credits">
                        <p>Réalisation: Frédéric Collignon</p>
                        <p> © Peggy Collignon </p>
                        </div>
                        <a href="index.php?action=mentionsLegales" class="mentions"><button class="btn btn-default">Mentions Légales</button></a>
                        <?php
                        if(isset($_SESSION['utilisateur']))
                        {?>
                            <a href="index.php?action=meContacter" class="contact"><button class="btn btn-default">Me contacter</button></a>
                        <?php
                        }?>
                    </div>        
                    <div class="col-xl-4 logosociaux">
                        <a href="https://www.facebook.com/pg/coiffeurpeggycollignon/posts/"><i class="fab fa-facebook-square fa-3x"></i></a>
                        <a href="https://www.instagram.com/collignonpeggy/?hl=fr"><i class="fab fa-instagram fa-3x"></i></a>
                    </div>
                 </div>
            </div>
        </footer>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="public/js/inscription.js"></script>
        <script type="text/javascript" src="public/js/main.js"></script>
        
    </body>
</html>