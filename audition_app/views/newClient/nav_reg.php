<style>
.back-to-top{
	display: none !important;
}
</style>
<div id="preloader"></div>

<header>
  <!-- header-area start -->
  <div id="sticker" class="header-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">

          <!-- Navigation -->
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                      <span class="sr-only">Toggle navigation</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                  </button>
              <!-- Brand -->
              <a class="navbar-brand page-scroll sticky-logo" href="<?= site_url('site/index') ?>">
                <h1><span>D</span>hvani<span>A</span>dd<span>G</span>roups</h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <img src="img/logo.png" alt="" title=""> -->
                              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
              <!-- <ul class="nav navbar-nav navbar-right">
                <li class="active"> -->
                  <div class="search-div">
						<form id="search-date">
							<input type='text' maxlength="10" pattern="[1-9]{1}[0-9]{9}" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" name="mobile" placeholder='Eneter Your Phone no.' id='search-text-input' />
								<button type="submit" id='button-holder'>
									<img src='https://png.pngtree.com/png-clipart/20190516/original/	pngtree-find-vector-icon-png-image_3725277.jpg' />
								</button>
						</form>
					</div>
                <!-- </li>
              </ul> -->
            </div>
            <!-- navbar-collapse -->
          </nav>
          <!-- END: Navigation -->
        </div>
      </div>
    </div>
  </div>
  <!-- header-area end -->
</header>
<!-- header end -->
<?php $this->load->view('newClient/script'); ?>
<script>
$('#search-date').on('submit',function (e) {
				  e.preventDefault();
				  var form = $('#search-date');
					var form_data = new FormData($(form)[0]);
						$.ajax({
						url:"<?=site_url('era/user/checkDate')?>",
						type:'post',
						dataType:'json',
						data : form_data,
						contentType: false,
						processData: false,
						
						success: function (data) {
							if (data.data) {
							swal("Your date is", data.data, "success");
							} else {
							swal("Date not assign yet", "Sorry !", "error");
							}
						}
						});
				});
</script>
