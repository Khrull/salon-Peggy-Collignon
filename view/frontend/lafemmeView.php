<?php $title = 'Peggy COLLIGNON La femme'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 logo">
            <img src="public/images/coupefemme.jpg" class="img-fluid" alt="Responsive image coupe femme">
        </div> 
        <a href="index.php?action=tarifsFemme">Les tarifs</a>
    </div>
</div>    

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    