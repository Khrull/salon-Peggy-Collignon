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
    <?php
    foreach ($allProdHomme as $data)
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