<?php $title = 'Peggy COLLIGNON La femme'; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <form  method="post">

                <div>
                    <input type="hidden" class="form-control" type="text" id="adresse" name="adresse" value="<?= $_SESSION['utilisateurMail'] ?>"/>
                </div>

                <div>
                    <label for="fiche">Votre message</label><br />
                    <textarea class="form-control" rows = "10" id="message" name="message" required></textarea>
                </div>
                <div>
                    <input type="submit" value="envoyer" class=" btn btn-primary" formaction="index.php?action=envoyerMessage"/>
                </div>
            </form>
        </div>
    </div>
</div>   

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>    