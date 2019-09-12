
<?php $title = "Inscription"; ?>


<?php ob_start(); ?>

<div class="container">
<?php $session->flash();?>	
		<h1 class="jumbotron">Inscription</h1>
		<span class="h5" id="message"></span>
</div>
<!-- Formulaire d'inscription-->
<div class="container">
	<div class="d-flex justify-content-center">
			
				<form action="index.php?action=inscription&amp;identification=inscription" method="post" class="col-md-6" id="inscription">
					<div class="shadow-lg form-group ">
						<input type="text" placeholder="Nom" id="nom" name="nom" class="form-control" onclick="saisie('Nom',this.id)" onmouseout="retablir('Nom',this.id)" onblur="mev('Nom',this.id)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Prénom" id="prenom" name="prenom" class="form-control" onclick="saisie('Prénom',this.id)" onmouseout="retablir('Prénom',this.id)" onblur="mev('Prénom',this.id)"required minlength="2"/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Email" id="email" name="email" class="form-control email" onclick="saisie('Email',this.id)" onmouseout="retablir('Email',this.id)" onblur="mev('Email',this.id)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Téléphone format : 0123456789" id="phone" name="phone" class="form-control" onclick="saisie('Téléphone format : 0123456789',this.id)" onmouseout="retablir('Téléphone format : 0123456789',this.id)" onblur="mev('Téléphone format : 0123456789',this.id)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Adresse" id="adresse" name="adresse" class="form-control" onclick="saisie('Adresse',this.id)" onmouseout="retablir('Adresse',this.id)" onblur="mev('Adresse',this.id)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Date de naissance jj/mm/aaaa" id="birth" name="birth" class="form-control" onclick="saisie('Date de naissance jj/mm/aaaa',this.id)" onmouseout="retablir('Date de naissance jj/mm/aaaa',this.id)" onblur="mev('Date de naissance jj/mm/aaaa',this.id)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="password" placeholder="Mot de passe entre 5 et 10 caractères" id="password" name="password" class="form-control" onclick="saisie('Mot de passe 8 caractères minimum',this.id)" onmouseout="retablir('Mot de passe 8 caractères minimum',this.id)" onblur="mev('Mot de passe 8 caractères minimum',this.id)" required minlength="8"/>
					</div>
					<div class="shadow-lg form-group">
						<input type="password" placeholder="Confirmez votre mot de passe" id="conf_password" name="conf_password" class="form-control" onclick="saisie('Confirmez votre mot de passe',this.id)" onmouseout="retablir('Confirmez votre mot de passe',this.id)" onblur="mev('Confirmez votre mot de passe',this.id)" required minlength="8"/>
					</div>
					<div class="form-group right">
						<input type="submit" value="Inscription" class="btn btn-default" id="bouton_envoi" onclick="envoyer()"/>
					</div>
				</form>
		
	</div>
	
		

   

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

