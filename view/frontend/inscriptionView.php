
<?php $title = "Inscription"; ?>


<?php ob_start(); ?>

<div class="container">
<?php $session->flash();?>	
    	<h1 class="jumbotron">Inscription</h1>
</div>
<!-- Formulaire d'inscription-->
<div class="container">
	<div class="d-flex justify-content-center">
			
				<form action="index.php?action=inscription&amp;identification=inscription" method="post" class="col-md-6" id="inscription">
					<div class="shadow-lg form-group ">
						<input type="text" placeholder="Nom" id="nom" name="nom" class="form-control" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Prénom" id="prenom" name="prenom" class="form-control" required minlength="2"/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Adresse Email" id="email" name="email" class="form-control email" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Téléphone" id="Phone" name="phone" class="form-control" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Adresse" id="adresse" name="adresse" class="form-control" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Date de naissance jj/mm/aaaa" id="birth" name="birth" class="form-control" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="password" placeholder="Mot de passe" id="password" name="password" class="form-control" required minlength="8"/>
					</div>
					<div class="shadow-lg form-group">
						<input type="password" placeholder="Confirmez votre mot de passe" id="conf_password" name="conf_password" class="form-control" required minlength="8"/>
					</div>
					<div class="form-group right">
						<input type="submit" value="Inscription" class="btn btn-default"/>
					</div>
				</form>
		
	</div>
	
</div>		

   

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

