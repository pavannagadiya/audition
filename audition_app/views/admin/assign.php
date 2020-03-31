<?php 
$user_info = $this->session->userdata('admin_info');
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
							<b><u>Assign Date</u></b>
						</h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<form method="post" action="<?= site_url('admin/participants/formData')?>">
								<div class="form-group">
									<label for="slider_photo"><b>Select the users</b></label>
									<select name="ids[]" id="id" multiple="multiple" required>
										<option value="" disabled selected>Set Date</option>
										<?php
										foreach ($date as $data) { ?>
											<option value="<?= $data['id']; ?>"><?= $data['id']; ?></option>
										<?php
										}; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="slider_photo"><b>Select date</b></label>
									<input type="date" id="birthday" name="date" required>
								</div>
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-danger">Reset</button>
									</form>




								<!-- <table>
									<tr>
										<td>Name:</td>
										<td>
											<select name="id" id="id" multiple>
												<option value="" disabled selected>Set Date</option>
												<?php
												foreach ($date as $data) { ?>
													<option value="<?= $data['id']; ?>"><?= $data['id']; ?></option>
												<?php
												}; ?>
											</select>
										</td>
									</tr>
								</table> -->
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
								<button class="btn btn-danger" onclick="goBack()">Go Back</button>
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
	$(document).ready(function() {
		$(".gallery a").fancybox();
	});
</script>
