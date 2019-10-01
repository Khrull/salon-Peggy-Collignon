<?php
namespace Controller;

use Model\ProdManager;

class Controller
{
    // envoie un mail
    public function mailMe()
    {
            
        $mailme = mail('fcollignon57@gmail.com','de ' . $_POST['adresse'], $_POST['message']);

    }

    //inscrit dans un tableau le message d'alerte et le type d'alerte
    public function setFlash($message,$type)
    {
        $_SESSION['flash'] = array(
            'message' => $message,
            'type'    => $type
        );
    }

    //si une alerte est en session alors on affiche le message
    public function flash()
    {
        if(isset($_SESSION['flash'])){
            ?>
            <div id="alert" class="alert alert-<?php echo $_SESSION['flash']['type'];?>">
            <?php echo $_SESSION['flash']['message']; ?>
            </div>
            <?php
            unset($_SESSION['flash']);
        }
    }

    public function ajouterProd()
    {
        if(isset($_FILES['file'])) 
        {
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($fileActualExt, $allowed))
            {
                if  ($fileSize < 500000)
                {
                    if ($fileError === 0)
                    {
                        $nomProduit = $_POST['nomProduit'];
                        $paragraphe = $_POST['ficheProduit'];
                        $genre = $_POST['gridRadios'];
                        $fileNameNew = uniqid('', true).".".$fileActualExt;
                        $fileDestination = 'public/images/produits/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $prodManager = new prodManager();
                        $newProd = $prodManager->newProduct($nomProduit, $fileDestination, $paragraphe, $genre);
                        $session = $this->setflash('Le fichier a bien été télécharger','success');
                        header('location: index.php?action=ajoutProd');
                       
                    }
                    else
                    {
                        $session = $this->setflash('une erreur s\'est produite','danger');
                        header('location: index.php?action=ajoutProd');
                    }
                }
                else
                {
                    $session = $this->setflash('Ce fichier est trop volumineux','danger');
                    header('location: index.php?action=ajoutProd');
                }
            }
            else
            {
                $session = $this->setflash('Seul les extensions JPG, JPEG et PNG sont acceptées ','danger');
                header('location: index.php?action=ajoutProd');
            }
        }
    }
    
    //affiche tous les produits de la gamme homme present dans la bdd
    function listAllProdHomme()
    {
        $prodManager = new ProdManager();
        $allProdHomme = $prodManager->getAllProdHomme();
        require('view/frontend/lhommeView.php');
    }


    //affiche tous les produits de la gamme femme present dans la bdd
    function listAllProdFemme()
    {
        $prodManager = new ProdManager();
        $allProdFemme = $prodManager->getAllProdFemme();
        require('view/frontend/lafemmeView.php');
    }

    
}