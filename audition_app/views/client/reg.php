
		<main class="site-content" role="main">
		
      
		
		<!-- Contact section -->
					<!-- <section id="contact" >
						<div class="container">
							<div class="row">
								
								<div class="wow animated fadeInDown">
									<img src="<?=RES_URL;?>client/img/banner.jpg">
								</div>
					
							</div>
						</div>
					</section> -->
					<!-- end Contact section -->
				
					<!-- end about section -->
				<section class="p-0">
								<img src="<?=RES_URL;?>client/img/banner.jpg" style="width: 100%;">
				</section>	
					
					
					
					<!-- Contact section -->
					<section id="contact" >
						<div class="container">
							<div class="row">
								
								<div class="sec-title text-center wow animated fadeInDown">
									<h2>Registrations</h2>
									<!-- <p>Leave a Message</p> -->
								</div>
								
								
								<div class="contact-form wow animated fadeInLeft">
									<form id="reg">
										<div class="form-group row">
											<div class="col-lg-6">
											<div class="input-field">
											<input type="text" name="user_name" class="form-control" placeholder="Your Name...">
										</div>	
											</div>
											<div class="col-lg-6">
											<div class="input-field">
											<input type="text" name="user_email" class="form-control" placeholder="Contact Email...">
										</div>	
											</div>
										  </div>
		
										<div class="form-group row">
											<div class="col-lg-6">
											<div class="input-field">
											<input type="text" name="user_contact" class="form-control" placeholder="Contact Number...">
										</div>	
											</div>
											<div class="col-lg-6">
											<div class="input-field">
											<input type="text" name="user_state" class="form-control" placeholder="State...">
										</div>	
											</div>
										  </div>
		
										  <div class="form-group row">
											<div class="col-lg-6">
											<div class="input-field">
											<label for="user_image[]"><b>Image Upload</b></label>
											<input type="file"  name="user_image[]" required  multiple="multiple" placeholder="Image Upload...">
										</div>	
											</div>
											<div class="col-lg-6">
											<div class="input-field">
										   <button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
										</div>	
											</div>
										  </div>
		
		
									</form>
								</div>
								
								<!-- <div class="col-md- wow animated fadeInRight">
									<address class="contact-details">
										<h3>Contact Us</h3>						
										<p><i class="fa fa-pencil"></i>Phoenix Inc.<span>PO Box 345678</span> <span>Little Lonsdale St, Melbourne </span><span>Australia</span></p><br>
										<p><i class="fa fa-phone"></i>Phone: (415) 124-5678 </p>
										<p><i class="fa fa-envelope"></i>website@yourname.com</p>
									</address>
								</div> -->
					
							</div>
						</div>
					</section>
					<!-- end Contact section -->
					
					<section id="google-map">
						<div id="map-canvas" class="wow animated fadeInUp"></div>
					</section>
				
				</main>
		
		
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
							console.log(typeof data.status);
							(data.status === true)?swal("Good job!", "Your Registrations is Successfully", "success"):swal("This Email-id or Phone Number is Already Registered.!", "Please try again", "error");
							//console.log(data);
							
						},
						error:function () {
							console.log('error');
						}
					});
				});
		/* ====================================Add product==================================== */
		</script>