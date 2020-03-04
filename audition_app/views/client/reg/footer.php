<footer id="footer">
    <div class="container">
        <div class="row text-center">
            <div class="footer-content">
                <div class="wow animated fadeInDown">
                    <p>newsletter signup</p>
                    <p>Get Cool Stuff! We hate spam!</p>
                </div>
                <form action="#" method="post" class="subscribe-form wow animated fadeInUp">
                    <div class="input-field">
                        <input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
                        <button type="submit" class="submit-icon">
                            <i class="fa fa-paper-plane fa-lg"></i>
                        </button>
                    </div>
                </form>
                <div class="footer-social">
                    <ul>
                        <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
                    </ul>
                </div>

                <!-- <p>Copyright &copy; 2014-2015 Design and Developed By<a href="#">Auditions</a> </p> -->
            </div>
        </div>
    </div>
</footer>


		<!-- Essential jQuery Plugins
		================================================== -->
		<?php $this->load->view('client/script'); ?>
        
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