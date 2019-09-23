<?php $title = 'Peggy COLLIGNON L\'equipe'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 logo">
            <img src="public/images/pingouins.jpg" class="shadow-lg img-fluid" alt="Responsive image coupe femme">
        </div> 
        <div class="col align-self-center reveal-1 textproduitfemme">
        <p class="font-weight-bold">Une team de choc passionnée par la coiffure à l’écoute de ses clients afin de leur apporter un conseil personnalisé en fonction de leur style, des saisons et des nouveautés.</p>
        </div>
    </div>
    <div class="card-deck">
        <div class="card shadow-lg reveal-1">
            <img src="public/images/1.jpg" class="card-img-top" alt="peggy">    
            <div class="card-body reveal-5">
                <h3 class="card-title">Peggy</h3>
                <p class="card-text">Peggy Sans cesse à la recherche de la créativité et des dernières tendances, coiffure de soirée, chignon, tresses et barbes plus rien n'a de secret pour elle.</p>
            </div>
            <div class="card-footer">
                <small class="font-weight-bold">THE BOSS</small>
            </div>
        </div>    
        <div class="card shadow-lg reveal-2">
            <img src="public/images/2.jpg" class="card-img-top" alt="Sabine">
            <div class="card-body reveal-5">
                <h3 class="card-title">Sabine</h3>
                <p class="card-text">Méticuleuse, proche des gens et à l'écoute, pleine d’expérience, elle saura trouver la touche pour sublimer votre coiffure et votre visage.</p>
            </div>
            <div class="card-footer">
                <small class="font-weight-bold">LA DOYENNE</small>
            </div>
        </div>    
        <div class="card shadow-lg reveal-3">
            <img src="public/images/3.jpg" class="card-img-top " alt="Maguie">
            <div class="card-body reveal-5">
                <h3 class="card-title">Maguie</h3>
                <p class="card-text">Amusante et pleine d'humour Maguie sera à votre écoute tout en chantant la chanson du moment.</p>
            </div>
            <div class="card-footer">
                <small class="font-weight-bold"> LA PIPELETTE</small>
            </div>
        </div>    
        <div class="card shadow-lg reveal-4">
            <img src="public/images/4.jpg" class="card-img-top" alt="Cyndie">
            <div class="card-body reveal-5">
                <h3 class="card-title">Cyndie</h3>
                <p class="card-text">Dynamique et compétente, elle intervient auprès des femmes pour réaliser leur coiffure dans les règles de l'art, et des hommes pour des barbes aux poils.</p>
            </div>
            <div class="card-footer">
                <small class="font-weight-bold">CACAHUETE</small>
            </div>
        </div>
    </div>
   

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    