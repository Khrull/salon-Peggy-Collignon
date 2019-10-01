<?php $title = 'Peggy COLLIGNON La femme'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 logo">
            <img src="public/images/coupefemme.jpg" class="shadow-lg img-fluid" alt="Responsive image coupe femme">
        </div> 
        <div class="col align-self-center reveal-1 textproduitfemme">
            Avoir de beaux cheveux est à la fois notre plus grand luxe et notre instrument de séduction le plus simple. Le symbole vivant de notre bonne santé, notre bien-être et notre style. Mais les cheveux sont aussi très fragiles et notre style de vie moderne conjugué à des facteurs environnementaux néfastes peut ternir leur beauté. Le salon <strong>Peggy Collignon</strong> adapte chaque produits à votre type de cheveux et cuir chevelu. 
        </div>
    </div>
    <?php
    foreach ($allProdFemme as $data)
        {
        ?>  
                <div class="row align-items-center shadow">
                    <div class="col-xl-8">    
                    <div class="col align-self-center reveal-1">
                        <h3><?= htmlspecialchars($data['nom_produit']) ?></h3>
                        <p><?= nl2br($data['paragraphe']) ?></p>
                    </div>
                    </div>
                    <div class="col-xl-4">
                    <div class="col align-self center reveal-2">
                        <img src="<?php echo htmlspecialchars($data['img_produit']) ?>" class="img-fluid imgprod" alt="<?= htmlspecialchars($data['nom_produit']) ?>">
                    </div>
                    </div> 
   
                </div>
               
        <?php
        }
        ?>
   

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    