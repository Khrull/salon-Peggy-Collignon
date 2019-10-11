<?php $title = "Collaborateurs"; ?>


<?php ob_start(); ?>

<div class="container">
	
		<h1 class="jumbotron">Mes collaborateurs</h1>
		<span class="h5" id="message"></span>
</div>
<!-- Formulaire d'inscription-->
<div class="container">
	<div class="table-responsive fichierClient">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>                
                        <th scope="col">Prenom</th>
                    </tr>
                </thead>
    
                <tbody>

                <?php
                foreach ($allCollab as $data)
                    {
                    ?> 
                    <tr>
                        <th scope="row"><?= htmlspecialchars($data['nom']) ?></th>
                        <td scope="row"><?= htmlspecialchars($data['prenom']) ?></td>
                        <td scope="row"><a href="index.php?action=collaborateur&amp;id=<?= $data['id'] ?>">Consulter</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>
</div>
<div class="container">
	<div class="d-flex justify-content-center">
			
				<form action="index.php?action=ajouterCollab&amp;identification=ajouterCollab" method="post" class="col-md-6" id="inscription" onsubmit="return verifForm(this)">
					<div class="shadow-lg form-group ">
						<input type="text" placeholder="Nom" id="nom" name="nom" class="form-control" onblur="verifNom(this)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Prénom" id="prenom" name="prenom" class="form-control" onblur="verifPrenom(this)" required minlength="2"/>
					</div>
					<div class="shadow-lg form-group">
						<input type="email" placeholder="Email" id="email" name="email" class="form-control email"  onblur="verifEmail(this)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Téléphone" id="phone" name="phone" class="form-control" onblur="verifPhone(this)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Adresse" id="adresse" name="adresse" class="form-control" onblur="verifAdresse(this)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="text" placeholder="Date de naissance jj/mm/aaaa" id="birth" name="birth" class="form-control" onblur="verifBirth(this)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="password" placeholder="Mot de passe entre 5 et 10 caractères" id="password" name="password" class="form-control" onblur="verifPassword(this)" required/>
					</div>
					<div class="shadow-lg form-group">
						<input type="password" placeholder="Confirmez votre mot de passe" id="conf_password" name="conf_password" class="form-control" onblur="verifPassConf(this)" required/>
					</div>
					<div class="form-group right">
						<input type="submit" value="ajouter" class="btn btn-default" id="bouton_envoi"/>
					</div>
				</form>
		
	</div>    

	
		

   

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>