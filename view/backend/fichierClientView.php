<?php $title = 'Peggy COLLIGNON coiffeur coloriste barbier'; ?>
<?php ob_start(); ?>

<div class="container">
<?php $session->flash();?>
    <div class="row">
        <div class="col-xl-12">
            <h1 class="display-3 leschapitres">Fichier Client:</h1>
        </div>    
    </div>



        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nom</th>                
                    <th scope="col">Prenom</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">fiche</th>
                </tr>
            </thead>
  
            <tbody>

            <?php
            foreach ($allClients as $data)
                {
                ?> 
                <tr>
                    <th scope="row"><?= htmlspecialchars($data['nom']) ?></th>
                    <td scope="row"><?= htmlspecialchars($data['prenom']) ?></td>
                    <td scope="row"><?= htmlspecialchars($data['mail']) ?></td>
                    <td scope="row"><?= htmlspecialchars($data['phone']) ?></td>
                    <td scope="row"><?= htmlspecialchars($data['adresse']) ?></td>
                    <td scope="row"><?= htmlspecialchars($data['birth']) ?></td>
                    <td scope="row"><?= htmlspecialchars($data['preview']) ?><em> ...</em></td>
                    <td scope="row"><a href="index.php?action=client&amp;id=<?= $data['id'] ?>">Consulter</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>