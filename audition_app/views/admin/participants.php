<?php $user_info = $this->session->userdata('admin_info');
if(empty($user_info)){
    redirect('admin/index');
}
?>
<section class="content">
    <div class="container-fluid">
        <!-- #END# Search Bar -->
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="color:#f44336">
                            <b><u>All Participants</u></b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="data-table-cat" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Participants Name</th>
                                        <th>participants Email</th>
                                        <th>Participants State</th>
                                        <!-- <th>Participants Photo</th> -->
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

        <!-- #END# Exportable Table -->
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#data-table-cat').DataTable({
            "ajax": {
                url: "<?php echo site_url('admin/participants/all_participants') ?>",
                type: 'GET',
            },
        });
        /* $('#data-table-cat').on('click', '.btn-delete', function(e) {
            var category_id = $(this).attr('data-id');
            $.ajax({
                url: "<?= site_url('era/category/delete_category') ?>",
                type: 'post',
                data: {
                    'category_id': category_id
                },
                headers: {
                    'era-token': '<?= $admin_info[0]; ?>',
                },
                dataType: 'json',
                beforeSend: function() {
                    $(".preload").attr('style', 'display:block');
                },
                success: function(data) {
                    $(".preload").attr('style', 'display:none');
                    $('#data-table-cat').DataTable().ajax.reload();
                },
                error: function() {
                    console.log('error');
                }
            });
        }); */
    });
</script>