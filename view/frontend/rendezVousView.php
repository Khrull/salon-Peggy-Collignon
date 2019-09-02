<?php $title = 'Peggy COLLIGNON Rendez Vous'; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 rdv">
            <script type="text/javascript" src="https://www.rdv360.com/js/iframeResizer.min.js"></script><iframe id="rdv360Iframe" src="https://www.rdv360.com/peggy-collignon-coiffure?ajx_md=1" width="100%" height="1000px" scrolling="no" style="border:2px;"></iframe><script type="text/javascript">$(function(){$('#rdv360Iframe').iFrameResize();});</script>
        </div>
    </div>
   

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>