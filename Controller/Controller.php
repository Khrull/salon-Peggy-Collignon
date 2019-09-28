<?php
namespace Controller;

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
}