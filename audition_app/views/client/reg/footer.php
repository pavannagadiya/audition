		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="<?=RES_URL;?>client/js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="<?=RES_URL;?>client/js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="<?=RES_URL;?>client/js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="<?=RES_URL;?>client/js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="<?=RES_URL;?>client/js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="<?=RES_URL;?>client/js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="<?=RES_URL;?>client/js/jquery.slitslider.js"></script>
        <script src="<?=RES_URL;?>client/js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="<?=RES_URL;?>client/js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="<?=RES_URL;?>client/js/main.js"></script>
        
		<script>
/* ====================================Add product==================================== */
      $('#reg').on('submit',function (e) {
          e.preventDefault();
          var form = $('#reg');
            var form_data = new FormData($(form)[0]);
            console.log(form_data);
                $.ajax({
                url:"<?=site_url('era/user/create_user')?>",
                type:'post',
                dataType:'json',
                data : form_data,
                contentType: false,
                processData: false,
                
                success: function (data) {
                    console.log(data);
                    // window.location = '<?php echo site_url("categories/all_product"); ?>';
                    $('#reg').modal('hide')
                    document.getElementById("reg").reset();
                },
                error:function () {
                    console.log('error');
                }
            });
        });
/* ====================================Add product==================================== */
</script>