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
                <div class="row align-items-center shadow p-3 mb-5 bg-white rounded ficheProduit">
                    <div class="col-xl-8">    
                    <div class="col align-self-center reveal-1 descProd">
                        <h3><?= htmlspecialchars($data['nom_produit']) ?></h3>
                        <p><?= nl2br($data['paragraphe']) ?></p>
                    </div>
                    </div>
                    <div class="col-xl-4">
                    <div class="col align-self center reveal-2">
                        <img src="<?php echo htmlspecialchars($data['img_produit']) ?>" class="img-fluid imgprod" alt="<?= htmlspecialchars($data['nom_produit']) ?>">
                    </div>
                    </div>
                    
                    <?php if(isset($_SESSION['utilisateur']))
                    {
                        if($_SESSION['grpUtilisateur']==1)
                        {?>
                            <div class="container edition">
                                <a onClick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit de la liste ?')" href="index.php?action=suppProd&id=<?php echo $data['id']; ?>"><i class="fas fa-trash-alt"></i> Supprimer le produit</a>
                            </div>
                        <?php }
                    }?>
   
                </div>
         <?php
        }
        ?>
   

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    