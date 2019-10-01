<?php $title = 'Peggy COLLIGNON coiffeur coloriste barbier'; ?>
<?php ob_start(); ?>

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=mto6yw9yfls0843ateaj0jo8adkbk9rthhrzk4gdixnrw4zi"></script>
<script>tinymce.init({ selector:'textarea',
                       force_br_newlines : true,
                       force_p_newlines : false,
                       forced_root_block : '' });</script>

<div class="container">
	
    	<h1 class="jumbotron">ajouter un produit</h1>

	
	<div class="d-flex justify-content-center">
		<!-- Formulaire de connexion-->
		<form enctype="multipart/form-data"  method="post" class="col-md-6">
            <fieldset class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="2" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Produit femme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="1">
                    <label class="form-check-label" for="gridRadios2">
                        Produit homme
                    </label>
                </div>
            </fieldset>

			<div class="shadow-lg form-group">
				<input type="file" id="file" name="file" class="form-control-file" />
            </div>
            <div class="shadow-lg form-group">
                <label for="nomProduit">Nom du produit</label><br />
				<input type="text" id="nomProduit" name="nomProduit" class="form-control" />
			</div>
			<div class="shadow-lg form-group">
                <label for="ficheProduit">Descriptif du produit</label><br />
                <textarea class="form-control" rows = "40" id="ficheProduit" name="ficheProduit"></textarea>
			</div>
			<div class="form-group right">
				<input type="submit" value="Ajouter un Produit" formaction="index.php?action=ajouterProd" class="btn btn-default"/>
				
			</div>
		</form>
	</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>