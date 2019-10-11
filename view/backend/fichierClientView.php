<?php $title = 'Peggy COLLIGNON coiffeur coloriste barbier'; ?>
<?php ob_start(); ?>

<div class="container">

    <div class="row">
        <div class="col-xl-12">
        <h1 class="jumbotron">Fichier Client:</h1>
        </div>    
   
        <div class="table-responsive">
            <div class="fichierClient">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>                
                        <th scope="col">Prenom</th>

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
                        <td scope="row"><a href="index.php?action=client&amp;id=<?= $data['id'] ?>">Consulter</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
            <div class="pagination">
                            <?php
                for($i=1;$i<=$pagesTotales;$i++)
                    {
                        if($i==$pageCourante)
                        {
                            echo "<li class='page-item active' aria-current='page'><span class='page-link'>$i<span class='sr-only'>(current)</span></span></li>";
                        }
                        else
                        {
                            echo " <li class='page-item'><a class='page-link' <a href=\"index.php?action=fichierClient&page=$i\">$i</a> ";
                        }
                    }?>
            </div>         
        </div>
    </div>    
    



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>