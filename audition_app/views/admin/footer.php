<!-- Jquery Core Js -->
<script src="<?= RES_URL; ?>admin/plugins/jquery/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?= RES_URL; ?>admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?= RES_URL; ?>admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?= RES_URL; ?>admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    
    <!-- Waves Effect Plugin Js -->
    <script src="<?= RES_URL; ?>admin/plugins/node-waves/waves.js"></script>
    
    <!-- Jquery CountTo Plugin Js -->
    <script src="<?= RES_URL; ?>admin/plugins/jquery-countto/jquery.countTo.js"></script>
    
    <!-- Morris Plugin Js -->
    <script src="<?= RES_URL; ?>admin/plugins/raphael/raphael.min.js"></script>
    <script src="<?= RES_URL; ?>admin/plugins/morrisjs/morris.js"></script>
    
    <!-- ChartJs -->
    <script src="<?= RES_URL; ?>admin/plugins/chartjs/Chart.bundle.js"></script>
    
    <!-- Flot Charts Plugin Js -->
    <script src="<?= RES_URL; ?>admin/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?= RES_URL; ?>admin/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?= RES_URL; ?>admin/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?= RES_URL; ?>admin/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?= RES_URL; ?>admin/plugins/flot-charts/jquery.flot.time.js"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="<?= RES_URL; ?>admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?= RES_URL; ?>admin/js/admin.js"></script>
    <script src="<?= RES_URL; ?>admin/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?= RES_URL; ?>admin/js/demo.js"></script>
    <script src="<?= RES_URL ?>admin/js/jquery.dataTables.min.js"></script>
    <script src="<?= RES_URL ?>admin/js/dataTables.bootstrap.min.js"></script>

    <script>
    	$(document).ready(function() {
    		// add all to same gallery
    		$(".gallery a").attr("data-fancybox", "mygallery");
    		// assign captions and title from alt-attributes of images:
    		$(".gallery a").each(function() {
    			$(this).attr("data-caption", $(this).find("img").attr("alt"));
    			$(this).attr("title", $(this).find("img").attr("alt"));
    		});
    		// start fancybox:
    		$(".gallery a").fancybox();
    	});
    </script>
