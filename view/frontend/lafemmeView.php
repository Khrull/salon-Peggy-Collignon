<?php $title = 'Peggy COLLIGNON La femme'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 logo">
            <img src="public/images/coupefemme.jpg" class="img-fluid" alt="Responsive image coupe femme">
        </div> 
        <div class="col align-self-center reveal-1 textproduitfemme">
            Avoir de beaux cheveux est à la fois notre plus grand luxe et notre instrument de séduction le plus simple. Le symbole vivant de notre bonne santé, notre bien-être et notre style. Mais les cheveux sont aussi très fragiles et notre style de vie moderne conjugué à des facteurs environnementaux néfastes peut ternir leur beauté. Le salon <strong>Peggy Collignon</strong> adapte chaque produits à votre type de cheveux et cuir chevelu. 
        </div>
    </div>
    <div class="row align-items-center beaute">    
        <div class="col align-self-center reveal-1">
            <h3>shampoing</h3>
            <p>Shampoing doux pour tous les types de cheveux. Des actifs lavants doux et la bétaïne de betterave à sucre nettoient les cheveux et le cuir  chevelu, les nourrissent et les hydratent.</p>
        </div>
        <div class="col align-self center reveal-2">
            <img src="public/images/shmpoing-beaute.jpg" class="img-fluid" alt="Responsive image shampoobeauté">
        </div> 
        <div class="col align-self end d-none d-sm-block reveal-1">
        </div>   
    </div>
    <div class="row align-items-center">
        <div class="col align-self start d-none d-sm-block reveal-1">
        </div>    
        <div class="col align-self center reveal-1">
            <h3>Conditionneur Douceur</h3>
            <p>Soin express pour cheveux en manque de soins. L'huile de graines de mangue et les actifs spéciaux d'huile d'avocat ainsi qu'un céramide équilibrent les dommages structurels, apportent de la douceur pour des cheveux doux, soyeux, intensément brillants</p>
        </div>
        <div class="col align-self end reveal-2">
            <img src="public/images/Conditionneur_Douceur.jpg" class="img-fluid" alt="Responsive image coupe mask">
        </div>    
    </div>
    <div class="row align-items-center volume">    
        <div class="col align-self start reveal-1">
            <h3>Volumising Spa shampoo</h3>
            <p>Shampoing volumisant pour des cheveux longs brillants et soyeux pour des cheveux facile à coiffer avec du volume grace à la kératine extraite de la laine naturelle.</p>
        </div>
        <div class="col align-self center reveal-2">
            <img src="public/images/Volumising-Spa-Shampoo-250ml.jpg" class="img-fluid" alt="Responsive image shampoo">
        </div> 
        <div class="col align-self end d-none d-sm-block reveal-1">
        </div>   
    </div>
    <div class="row align-items-center">
        <div class="col align-self start d-none d-sm-block reveal-1">
        </div>    
        <div class="col align-self center reveal-1">
            <h3>Intensive Spa Mask</h3>
            <p>Cure intensive régénérante pour cheveux secs et fatigués. Les extraits de racine de Yacon exercent une cation lissante et revitalisante, l'acide hyaluronique hydrate et fixe l'hydratation. les Omégas 3 + 6 de la noix Inca fortifient, réparent et protègent contre les radicaux libres.</p>
        </div>
        <div class="col align-self end reveal-2">
            <img src="public/images/Intensive_Spa_Mask.jpg" class="img-fluid" alt="Responsive image coupe mask">
        </div>    
    </div>
   

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    