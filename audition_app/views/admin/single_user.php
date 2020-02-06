<section class="content">
    <div class="container-fluid">
        <!-- #END# Search Bar -->
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="color:#f44336">
                            <b><u>Single Participants</u></b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php foreach ($user['images'] as $data ) {?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height: 100px;width:100px;">
                                   <img style="width: 100%" src="<?=RES_URL;?>images/user_images/<?= $data['user_photo']; ?>" alt="" srcset="">
                                </div>
                           <?php
}
    ;?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h1>hii</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Validation -->
    </div>
</section>
<script>
    function goBack() {
        window.history.back();
    }
</script>