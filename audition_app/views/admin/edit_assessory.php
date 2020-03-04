<section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Accessories</h2>
                        </div>
                        <div class="body">
                        <!-- [id] => 9 [slider_title] => title 2 [slider_url] => http://google.com [slider_button_name] => test -->
                            <form id="form_validation" method="POST" action="<?=site_url("admin/slider/update_data")?>">

                                        <input type="hidden" class="form-control" name="id" value="<?=$id?>">


                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slider_title" value="<?=$slider_title?>" required>
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slider_url" value="<?=$slider_url?>" required>
                                        <label class="form-label">Link URL</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slider_button_name" value="<?=$slider_button_name?>" required>
                                        <label class="form-label">Button</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                <a href="<?=site_url()?>admin/slider_assessor" class="btn btn-danger waves-effect" role="button">CANCEl</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>