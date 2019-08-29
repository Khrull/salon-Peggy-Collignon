<?php $title = 'Peggy COLLIGNON L\'homme'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 logo">
            <img src="public/images/homme.jpg" class="img-fluid" alt="Responsive image barbier">
        </div>
        <div class="col-xl-12">
            <div class="col align-self-center">
            <p><strong>Le salon Peggy COLLIGNON</strong>  vous invite à profiter <strong>d’un moment de détente</strong> et de <strong>bien-être</strong> pendant que <strong>nos barbiers spécialisés</strong> et <strong>expérimentés</strong> s’occupent de <strong>la taille</strong>, <strong>le rasage</strong> et <strong>l’entretien de votre barbe</strong>.<br>Nous maîtrisons <strong>toutes les techniques</strong> <strong>de taille</strong> et <strong>de rasage</strong>, de <strong>la plus traditionnelle</strong> à <strong>la plus moderne</strong>, afin de <strong>vous assurer des réalisations</strong> à <strong>la hauteur de vos attentes</strong>.</p> 
            </div>
        
            <div col align-self-center>
            <a href="index.php?action=tarifsHomme">Les tarifs</a>
            </div>
        </div>    
    </div>
</div>    

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    