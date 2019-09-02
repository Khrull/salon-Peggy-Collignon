<?php $title = 'Peggy COLLIGNON coiffeur coloriste barbier'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 rdv">
        <script type="text/javascript" src="https://www.rdv360.com/js/iframeResizer.min.js"></script><iframe id= "agenda" title= "agenda" width="100%" height="1000" src="https://pro.rdv360.com/agenda"></iframe><script type="text/javascript">$(function(){$('#rdv360Iframe').iFrameResize();});</script>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>