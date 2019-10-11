<?php $title = 'Peggy COLLIGNON tarifs homme'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="container">
        <h1 class="jumbotron">Tarifs et Prestations</h1>
        <span class="h5" id="message"></span>
    </div>

    <div class="container">
        <div class="titrePresta"><h3>Homme Exclusif</h3></div>
        <p class="presta">Conseil personnalisé - diagnostic beauté du cuir chevelu et des cheveux - Arôma service -Shampooing relaxant La Biostétique - Coupes et coiffage.</p>
        <P class="tarifs">19,50€</P> 
        <div class="titrePresta"><h3>Services Barbe</h3></div>
        <P><strong>Taille de barbe à la tonseuse</strong></P>
        <P class="tarifs">5€</P>
        <P><strong>Taille de barbe + contours au rasoir</strong></P>
        <P class="tarifs">12€</P>
        <P><strong>Taille de barbe + rituel</strong></P>
        <P class="presta">Serviette chaude - Modelage à l'huile - Rasage au blaireau</P>
        <P class="tarifs">20€</P> 
        <P><strong>Rasage à l'ancienne</strong></P>
        <P class="presta">Serviette chaude - Modelage à l'huile - Rasage au blaireau</P>
        <P class="tarifs">26€</P>
        <div class="titrePresta"><h3>Soins du cuir chevelu</h3></div>
        <P><strong>Lotion spécifique</strong></P>
        <P class="presta">Application d'une lotion adaptée à la nature et aux besoins du cuir chevelu - Rituel détente</P>
        <P class="tarifs">8€</P> 
        <P><strong>Soin intensif anti-chute</strong></P>
        <P class="presta">Shampooing spécifique - Coktail d'énérgie contre la chute de cheveux - Thérapie AntiChute Plus Dermosthétique - Rituel relaxant</P>
        <P class="tarifs">12€</P>
        <P><strong>Soin intensif antipelliculaire</strong></P>
        <P class="presta">Gommage du cuir chevelu - Shampooing spécifique - Baume apaisant - Lotion apaisante antipelliculaire avec rituel détente du cuir chevelu</P>
        <P class="tarifs">15€</P>
        <P><strong>Rituel relaxant</strong></P>
        <P class="presta">Détente ou soin du cuir chevelu avec huiles essentielles</P>
        <P class="tarifs">15€</P>

    </div>    
 

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    