<section class="content">
	<div class="container-fluid">
		<!-- #END# Search Bar -->
		<!-- Basic Examples -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="color:#f44336">
							<b><u>Slider</u></b>
						</h2>
					</div>
					<div class="body">
						<div id="slider_modal" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<form id="add_slider">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Add Slider</h4>
										</div>
										<div class="modal-body">
											<label for="slider_photo"><b>Upload Slider</b></label>
											<input type="file" name="slider_photo" required>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="reset" class="btn btn-danger">Reset</button>
										</div>
									</form>
								</div>

							</div>
						</div>
						<div id="change_slider_modal" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<form id="change_slider">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Change Slider</h4>
										</div>
										<div class="modal-body">
											<label for="slider_photo"><b>Upload Slider</b></label>
											<input type="file" name="slider_photo" required>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="reset" class="btn btn-danger">Reset</button>
										</div>
									</form>
								</div>

							</div>
						</div>
						<div class="table-responsive">
							<button class="btn btn-primary add" data-toggle="modal" data-target="#slider_modal"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
							<br>
							<table id="data-table-cat" class="table table-bordered table-striped table-hover js-basic-example dataTable">
								<thead>
									<tr>
										<th>Sliders</th>
										<th class="data-table-width">Change</th>
										<th class="data-table-width">Delete</th>
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
				url: "<?php echo site_url('admin/slider/all_slider') ?>",
				type: 'GET',
			},
		});
	});
	$(document).on('click', '.slider-edit', function(e) {
		var id = $(this).attr('data-id');
		$('#change_slider').on('submit', function(e) {
			e.preventDefault();
			var form = $('#change_slider');
			var form_data = new FormData($(form)[0]);
			form_data.append('id', id);
			console.log(form);
			$.ajax({
				url: "<?= site_url('era/slider/change_slider_image') ?>",
				type: 'post',
				dataType: 'json',
				data: form_data,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(".preload").attr('style', 'display:block');
				},

				success: function(data) {
					console.log(data);
					$('#change_slider_modal').modal('hide');
					id = null;
					document.getElementById("change_slider").reset();
					$('#data-table-cat').DataTable().ajax.reload();
					$(".preload").attr('style', 'display:none');
				},
				error: function() {
					console.log('error');
				}
			});
		});
	});

	$(document).on('click', '.slider-delete', function(e) {
		e.preventDefault();
		var id = $(this).attr('data-id');
		$.ajax({
			url: "<?= site_url('era/slider/delete_slider') ?>",
			type: 'post',
			dataType: 'json',
			data: {
				'id': id
			},
			beforeSend: function() {
				$(".preload").attr('style', 'display:block');
			},
			success: function(data) {
				console.log(data);
				id = null;
				$('#data-table-cat').DataTable().ajax.reload();
				$(".preload").attr('style', 'display:none');
			},
			error: function() {
				console.log('error');
			}
		});
	});

	$('#add_slider').on('submit', function(e) {
		e.preventDefault();
		var form = $('#add_slider');
		var form_data = new FormData($(form)[0]);
		console.log(form);

		$.ajax({
			url: "<?= site_url('era/slider/add_slider') ?>",
			type: 'post',
			dataType: 'json',
			data: form_data,
			contentType: false,
			processData: false,
			beforeSend: function() {
				$(".preload").attr('style', 'display:block');
			},

			success: function(data) {
				console.log(data);
				$('#slider_modal').modal('hide');
				document.getElementById("add_slider").reset();
				$('#data-table-cat').DataTable().ajax.reload();
				$(".preload").attr('style', 'display:none');
			},
			error: function() {
				console.log('error');
			}
		});
	});
</script>
