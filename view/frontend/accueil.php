<?php $title = 'Peggy COLLIGNON coiffeur coloriste barbier'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">

        <?php $session->flash(); ?>
        <div class="col-xl-12 logo">
            <img src="public/images/logo_peggy_collignon.jpg" class="img-fluid" alt="Responsive image logo salon Peggy COLLIGNON">
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 reveal-2 presfemme">
                    <img class="img-fluid" src="public/images/logofemme.jpg" alt="salon peggy collignon">
                </div>
                <div class="col-xl-4 reveal-1">
                    <strong>Peggy, Sabine, Maguy</strong> et <strong>Cyndie</strong> vous accueillent pour toutes vos envies en matière de coupes, coiffures, colorations et soins pour cheveux. Notre savoir-faire et notre expérience nous permettent de vous assurer des coiffures de haute qualité, avec des produits de la gamme <strong>Biosthétique</strong> soigneusement choisis pour redonner à vos cheveux tout leur éclat et leur vitalité.
    Nous vous assurons également des conseils avisés pour le choix de la coupe, la coiffure ou la coloration idéale. 
                </div>
            </div>
            <div class="wrapper">
            <div class="divider div-transparent"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-4 d-none d-sm-block"></div>
                <div class="col-xl-4 reveal-1">
                    Le salon <strong>Peggy COLLIGNON</strong> saura aussi, messieurs, prendre soin de vos barbes et moustaches. Vous découvrirez le savoir-faire de nos coiffeurs-barbiers et tous nos produits disponibles sur place pour le plus grand bonheur de vos poils. Coupe de cheveux, taille de barbe, rasage à l’ancienne, soins au poil. Offrez-vous un moment de détente et de convivialité en passant entre les mains expertes de nos coiffeuses-barbières et profitez du moment pour découvrir notre univers
                </div>    
                <div class="col-xl-4 reveal-2 presbarbier">
                    <img class="img-fluid" src="public/images/logohomme.jpg" alt="salon peggy collignon">
                </div>
            </div>
            <div class="wrapper">
            <div class="divider div-transparent"></div>
        </div>
        </div>
        
           
        <div class="col-xl-2 d-none d-sm-block"></div>
        <div id="carousel" class="col-xl-8 carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="public/images/enseigne.jpg" alt="enseigne">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/images/cotéFemme.jpg" alt="coté femme">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/images/coinBarbier.jpg" alt="coin barbier">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/images/bac-biosthetique.jpg" alt="bac">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/images/coiffage.jpg" alt="coiffage">
                </div>
            </div>
        </div>    
    </div>
    <div class="container-fluid localisation">
        <div class="row">
            <div class="col align-self-start reveal-1">
                <h1>Le salon:</h1>
                <dl class="row">
                <dt class="col-sm-3">Adresse :</dt>
                <dd class="col-sm-9"> 26 Rue nationale, 57420 Verny</dd>
                <dt class="col-sm-3">Téléphone :</dt>
                <dd class="col-sm-9">03 87 52 78 22</dd>
            </div>
            <div class="col align-self-center reveal-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10469.057792507621!2d6.204083908984376!3d49.00555370848626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb45ff15523efd09!2sPeggy+Collignon+Coiffeur+Coloriste+Barbier!5e0!3m2!1sfr!2sfr!4v1561447902204!5m2!1sfr!2sfr" class="shadow-lg" width="260" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col align-self-end reveal-3">
                <table class="table table-striped table-dark reveal-1">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Ouverture</th>
                            <th scope="col">Fermeture</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Lundi</th>
                            <td>Fermé</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Mardi</th>
                            <td>8:30</td>
                            <td>18:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Mercredi</th>
                            <td>8:30</td>
                            <td>12:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Jeudi</th>
                            <td>8:30</td>
                            <td>18:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Vendredi</th>
                            <td>8:30</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Samedi</th>
                            <td>8:30</td>
                            <td>16:30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>        
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>