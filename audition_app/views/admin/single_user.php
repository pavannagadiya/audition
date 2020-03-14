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
							<b><u>Single Participants</u></b>
						</h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 gallery">
								<?php foreach ($user['images'] as $data) { ?>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height: 100px;width:100px;">
										<a href="<?= RES_URL; ?>images/user_images/<?= $data['user_photo']; ?>">
											<img style="width: 100%" src="<?= RES_URL; ?>images/user_images/<?= $data['user_photo']; ?>" alt="" srcset="">
										</a>
									</div>
								<?php
								}; ?>
							</div> -->
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<table>
									<tr>
										<td>Name:</td>
										<td><?= $user['user_name']; ?></td>
									</tr>
									<tr>
										<td>Contact No.:</td>
										<td><?= $user['user_contact']; ?></td>
									</tr>
									<tr>
										<td>Email Id:</td>
										<td><?= $user['user_email']; ?></td>
									</tr>
									<tr>
										<td>State:</td>
										<td><?= $user['user_state']; ?></td>
									</tr>
									<tr>
										<td>Taluko:</td>
										<td><?= $user['taluko']; ?></td>
									</tr>
									<tr>
										<td>District:</td>
										<td><?= $user['district']; ?></td>
									</tr>
									<tr>
										<td>Qualification:</td>
										<td><?= $user['qualification']; ?></td>
									</tr>
									<tr>
										<td>Category:</td>
										<td><?= $user['user_categories']; ?></td>
									</tr>
									<tr>
										<td>Experience:</td>
										<td><?= $user['experience']; ?></td>
									</tr>
									<tr>
										<td>Address:</td>
										<td><?= $user['user_address']; ?></td>
									</tr>
								</table>
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
