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
            <h1 class="display-3 nomPrenom"><?= htmlspecialchars($client['nom'])?>  <?= htmlspecialchars($client['prenom']) ?></h1>
            <p class="h4"><strong>né(e) le :</strong> <?= htmlspecialchars($client['birth'])?></p>
            <p class="h4"><strong>Adresse mail :</strong> <?= htmlspecialchars($client['mail'])?></p>
        </div>    
    </div>
</div> 

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <form  method="post">

                <div>
                    <label for="phone">Téléphone</label><br />
                    <input class="form-control" type="text" id="phone" name="phone" value="<?= $client['phone'] ?>"/>
                </div>

                <div>
                    <label for="adresse">Adresse</label><br />
                    <input class="form-control" type="text" id="adresse" name="adresse" value="<?= $client['adresse'] ?>"/>
                </div>

                <div>
                    <label for="fiche">Fiche Client</label><br />
                    <textarea class="form-control" rows = "40" id="fiche" name="fiche"><?= nl2br($client['fiche']) ?></textarea>
                </div>
                <div class="btnFicheClient">
                    <input type="submit" value="Modifier" class=" btn btn-primary" formaction="index.php?action=modifier&id=<?php echo $client['id']; ?>" />
                    <?php if($_SESSION['grpUtilisateur']==1)
                                        {?>
                                            <input type="submit" value="Supprimer" class=" btn btn-danger" onClick="return confirm('Êtes-vous sûr de vouloir supprimer cette fiche ?')" formaction="index.php?action=supprimer&id=<?php echo $client['id']; ?>" />
                                        <?php } ?>    
                </div>
            </form>
        </div>
    </div>



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>