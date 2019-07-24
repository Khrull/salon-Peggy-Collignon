
<?php $title = "Connexion"; ?>


<?php ob_start(); ?>

<div class="container">
<?php $session->flash();?>	
    	<h1 class="jumbotron">Connexion</h1>

	
	<div class="row">
		<!-- Formulaire de connexion-->
		<form action="index.php?action=connexion&amp;identification=connexionpost" method="post" class="col-md-6" id="connexion">
			
			<div class="shadow-lg form-group">
				<input type="text" placeholder="Adresse Email" id="email" name="email" class="form-control email" required/>
			</div>
			<div class="shadow-lg form-group">
				<input type="password" placeholder="Mot de passe" id="password" name="password" class="form-control" required/>
			</div>
			<div class="form-group right">
				<input type="submit" value="Connexion" class="btn btn-default"/>
			</div>
		</form>
	</div>
</div>
   

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

