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
							<b><u>Slider Assessor</u></b>
						</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<br>
							<table id="data-table-cat" class="table table-bordered table-striped table-hover js-basic-example dataTable">
								<thead>
									<tr>
										<th class="data-table-width">Slider Title</th>
										<th class="data-table-width">Button URL</th>
										<th class="data-table-width">Button Name</th>
										<th class="data-table-width">Change</th>
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
				url: "<?php echo site_url('admin/slider/slider_button_title_link') ?>",
				type: 'GET',
			},
		});
	});
</script>
