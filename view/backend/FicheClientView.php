<?php $title = 'Peggy COLLIGNON coiffeur coloriste barbier'; ?>
<?php ob_start(); ?>

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=mto6yw9yfls0843ateaj0jo8adkbk9rthhrzk4gdixnrw4zi"></script>
<script>tinymce.init({ selector:'textarea',
                       force_br_newlines : true,
                       force_p_newlines : false,
                       forced_root_block : '' });</script>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <h1 class="display-3"><?= htmlspecialchars($client['nom'])?>  <?= htmlspecialchars($client['prenom']) ?></h1>
        </div>    
    </div>
</div> 

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <form  method="post">
                <div>
                    <label for="titre">Adresse Mail</label><br />
                    <input class="form-control" type="text" id="Mail" name="Mail" value="<?= $client['mail'] ?>"/>
                </div>

                <div>
                    <label for="titre">Téléphone</label><br />
                    <input class="form-control" type="text" id="phone" name="phone" value="<?= $client['phone'] ?>"/>
                </div>

                <div>
                    <label for="titre">Adresse</label><br />
                    <input class="form-control" type="text" id="adresse" name="adresse" value="<?= $client['adresse'] ?>"/>
                </div>

                <div>
                    <label for="titre">Date de naissance</label><br />
                    <input class="form-control" type="text" id="birth" name="birth" value="<?= $client['birth'] ?>"/>
                </div>

                <div>
                    <label for="chapter">Fiche Client</label><br />
                    <textarea class="form-control" rows = "40" id="fiche" name="fiche"><?= nl2br($client['fiche']) ?></textarea>
                </div>
                <div>
                    <input type="submit" value="Modifier" class=" btn btn-primary" formaction="index.php?action=modifier&id=<?php echo $client['id']; ?>" />
                    <input type="submit" value="Supprimer" class=" btn btn-danger" formaction="index.php?action=supprimer&id=<?php echo $client['id']; ?>" />
                </div>
            </form>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>