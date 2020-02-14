<style>
img{
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<section class="content">
        <div class="container-fluid">
            <h2 style="color:#f44336">
                <b><u>DASHBOARD</u></b>
            </h2>


            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL USERS</div>
                            <div data-speed="15" data-fresh-interval="20"><h4><?=$user?></h4></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Slider</div>
                            <div data-speed="1000" data-fresh-interval="20"><h4><?=$slider?></h4></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div>
				<h1>LOGO</h1>
                <!-- <img src="<?=RES_URL?>/admin/logo.png"  alt="" srcset=""> -->
            </div>
        </div>
    </section>
