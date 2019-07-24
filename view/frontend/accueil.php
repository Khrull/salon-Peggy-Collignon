<?php $title = 'Peggy COLLIGNON coiffeur coloriste barbier'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">

        <?php $session->flash();?>
        <div class="col-xl-12 logo">
            <img src="public/images/logo_peggy_collignon.jpg" class="img-fluid" alt="Responsive image logo salon Peggy COLLIGNON">
        </div>            
    
        <div class="container-fluid presentation">
            <div class="row">
                <div class="col align-self-start">
                    <img class="shadow-lg" src="public/images/cotefemme2.jpg"  alt="coté femmes">
                </div>
                <div class="col align-self-center">
                    Peggy Sabine Maggie et Cyndie vous accueillent pour toutes vos envies en matière de coupes, coiffures, colorations et soins du cheveu. Le salon Peggy COLLIGNON saura aussi, messieurs, prendre soin de vos barbes et moustaches.
                </div>
                <div class="col align-self-end">
                    <img class="shadow-lg" src="public/images/bac.jpg"  alt="les bacs">
                </div>
            </div>
        </div>

    </div>
    <div class="container">     
        <h4>Le salon:</h4>
        <p>Adresse : 26 Rue nationale, 57420 Verny<br/>
        Téléphone : 03 87 52 78 22</p>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10469.057792507621!2d6.204083908984376!3d49.00555370848626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb45ff15523efd09!2sPeggy+Collignon+Coiffeur+Coloriste+Barbier!5e0!3m2!1sfr!2sfr!4v1561447902204!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

        <table class="table table-striped table-dark">
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
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>