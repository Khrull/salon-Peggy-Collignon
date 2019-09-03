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
        </div>
    </div>
    <div class="row align-items-center shadow-lg beaute">    
        <div class="col align-self-center reveal-1">
            <h3>Precision Shave Gel</h3>
            <p>Gel non moussant conçu pour un rasage précis sur barbe normale ou mince. Fournit un rasage définitif, rapide et propre. Apaise la peau et aide à soulager les irritations pendant le rasage.</p>
        </div>
        <div class="col align-self center reveal-2">
            <img src="public/images/precision_gel.jpg" class="img-fluid" alt="Responsive image precision gel">
        </div> 
        <div class="col align-self end d-none d-sm-block reveal-1">
        </div>   
    </div>
    <div class="row align-items-center">
        <div class="col align-self start d-none d-sm-block reveal-1">
        </div>    
        <div class="col align-self center reveal-1">
            <h3>Classic Moisturising Shave Cream</h3>
            <p>Crème à raser à base de plantes pour barbes normales à grosses. Formule revitalisante à l'huile d'aloès et d'avocat qui offre une protection maximale aux peaux sèches</p>
        </div>
        <div class="col align-self end reveal-2">
            <img src="public/images/classic_gel.jpg" class="img-fluid classic_gel" alt="Responsive image classic gel">
        </div>    
    </div>
    <div class="row align-items-center shadow-lg volume">    
        <div class="col align-self start reveal-1">
            <h3>Beard Serum</h3>
            <p>Une formule à base d'huile spécialement conçue pour le soin de la barbe, avec des huiles bénéfiques qui conditionnent instantanément et maintiennent la barbe douce et soignée. Formule légère et à absorption rapide.</p>
        </div>
        <div class="col align-self center reveal-2">
            <img src="public/images/beard_serum.jpg" class="img-fluid" alt="Responsive image beard serum">
        </div> 
        <div class="col align-self end d-none d-sm-block reveal-1">
        </div>   
    </div>
    <div class="row align-items-center">
        <div class="col align-self start d-none d-sm-block reveal-1">
        </div>    
        <div class="col align-self center reveal-1">
            <h3>Post Shave Cooling Lotion</h3>
            <p>Lotion de rasage hydratante. La formule à double action fonctionne comme un après-rasage hydratant et rafraîchissant. Aide à rétablir l'équilibre de la peau</p>
        </div>
        <div class="col align-self end reveal-2">
            <img src="public/images/post_shave.jpg" class="img-fluid postshave" alt="Responsive image post_shave">
        </div>
    </div>     
    <div class="row align-items-center shadow-lg curl">    
        <div class="col align-self start reveal-1">
            <h3>Beard Balm</h3>
            <p>Après-shampoing et styler. Un baume doux qui apprivoise et conditionne la barbe avec une application flexible pour le coiffage.</p>
        </div>
        <div class="col align-self center reveal-2">
            <img src="public/images/beard_balm.jpg" class="img-fluid" alt="Responsive image beard balm">
        </div> 
        <div class="col align-self end d-none d-sm-block reveal-1">
        </div>   
    </div>
    <div class="row align-items-center">
        <div class="col align-self start d-none d-sm-block reveal-1">
        </div>    
        <div class="col align-self center reveal-1">
            <h3>Revitalizing Toner</h3>
            <p>Apaise la peau après le rasage. Tonifie et rafraîchit la peau juste rasée. Calme les irritations produites par le rasage. Hydrate les zones irritées et ferme les pores pour apporter fraîcheur et soulagement.</p>
        </div>
        <div class="col align-self end reveal-2">
            <img src="public/images/revitalizing_toner.jpg" class="img-fluid revitatoner" alt="Responsive image revitalizing toner">
        </div>    
    </div>
   

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    