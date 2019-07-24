<?php $title = 'Peggy COLLIGNON L\'homme'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 logo">
            <img src="public/images/homme.jpg" class="img-fluid" alt="Responsive image barbier">
        </div> 
        <a href="index.php?action=tarifsHomme">Les tarifs</a>
    </div>
</div>    

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    