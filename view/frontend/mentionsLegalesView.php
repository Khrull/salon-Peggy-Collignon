<?php $title = 'Mentions Légales'; ?>
<?php ob_start(); ?>

<div class="container">
    <div class="row">
    <nav class="navbar navbar-dark bg-primary">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dracaufeu</a>
        </li>
    </nav>
            
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>