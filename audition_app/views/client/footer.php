<footer id="footer">
	<div class="container">
		<div class="row-12">
			<div class="col-md-3 wow animated fadeInDown">
				<img class="" src="<?= RES_URL ?>client/img/new-logo.png" style="width: 100%; margin-bottom: 10%;">
			</br>
			<p style="margin-bottom: 5%;">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
				</br>
				<div class="footer-social" style="font-size: 50%;margin-left: -25%;">
					<ul>
						<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 wow animated fadeInDown">
				<h4 style="color: white;margin-bottom: 10%;color: #fd951e;">QUICK LINK</h4>
				<ul>
					<li>
						FAQ
					</li>
					<li>
						Privacy Policy
					</li>
					<li>
						Terms & Conditions
					</li>
				</ul>
				<h4 style="color: white;margin-bottom: 10%;margin-top: 10%;color: #fd951e;">SUBSCRIBE NEWSLETTER</h4>
				<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
					<div class="input-field">
						<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
						<button type="submit" class="submit-icon">
							<i class="fa fa-paper-plane fa-lg"></i>
						</button>
					</div>
				</form>
			</div>
			<div class="col-md-3 wow animated fadeInDown">
				<h4 style="color: white;margin-bottom: 10%; color: #fd951e;">CONTACT US</h4>
				<p>
					<i class="fa fa-map-marker" style=""> Address : </i>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
				<p style="margin-top: 5%;">
					<i class="fa fa-envelope"></i> Email : </i>
					demo@gmail.com
				</p>
			</div>
			<div class="col-md-3 wow animated fadeInDown">
				<h4 style="color: white;margin-bottom: 10%; color: #fd951e;"> Office No</h4>
				<p style="margin-top: 5%;">
					<i class="fa fa-mobile"></i></i>
					1234567890
				</p>
				<h4 style="color: white;margin-top: 10%; color: #fd951e;">Registration Inquiry</h4>
				<p style="margin-top: 5%;">
					<i class="fa fa-mobile"></i></i>
					1234567890
				</p>
			</div>

		</div>
<!-- 		<div class="row text-center">
			<div class="footer-content">
				<div class="wow animated fadeInDown">
					<p>newsletter signup</p>
					<p>Get Cool Stuff! We hate spam!</p>
				</div>
				<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
					<div class="input-field">
						<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
						<button type="submit" class="submit-icon">
							<i class="fa fa-paper-plane fa-lg"></i>
						</button>
					</div>
				</form>
				<div class="footer-social">
					<ul>
						<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
					</ul>
				</div>

				< <p>Copyright &copy; 2014-2015 Design and Developed By<a href="#">Auditions</a> </p> 
			</div>
		</div> -->
	</div>
</footer>
<!-- Essential jQuery Plugins
		================================================== -->
<!-- Main jQuery -->
<script src="<?= RES_URL; ?>client/js/jquery-1.11.1.min.js"></script>

<!-- Twitter Bootstrap -->
<script src="<?= RES_URL; ?>client/js/bootstrap.min.js"></script>
<!-- Single Page Nav -->
<script src="<?= RES_URL; ?>client/js/jquery.singlePageNav.min.js"></script>
<!-- jquery.fancybox.pack -->
<script src="<?= RES_URL; ?>client/js/jquery.fancybox.pack.js"></script>
<!-- Google Map API -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Owl Carousel -->
<script src="<?= RES_URL; ?>client/js/owl.carousel.min.js"></script>
<!-- jquery easing -->
<script src="<?= RES_URL; ?>client/js/jquery.easing.min.js"></script>
<!-- Fullscreen slider -->
<script src="<?= RES_URL; ?>client/js/jquery.slitslider.js"></script>
<script src="<?= RES_URL; ?>client/js/jquery.ba-cond.min.js"></script>
<!-- onscroll animation -->
<script src="<?= RES_URL; ?>client/js/wow.min.js"></script>
<!-- Custom Functions -->
<script src="<?= RES_URL; ?>client/js/main.js"></script>


<script>
	/* ====================================Add product==================================== */
	$('#reg').on('submit', function(e) {
		e.preventDefault();
		var form = $('#reg');
		var form_data = new FormData($(form)[0]);
		console.log(form_data);
		$.ajax({
			url: "<?= site_url('era/user/create_user') ?>",
			type: 'post',
			dataType: 'json',
			data: form_data,
			contentType: false,
			processData: false,

			success: function(data) {
				console.log(data);
				// window.location = '<?php echo site_url("categories/all_product"); ?>';
				$('#reg').modal('hide')
				document.getElementById("reg").reset();
			},
			error: function() {
				console.log('error');
			}
		});
	});
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("sl-slide");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {
			slideIndex = 1
		}
		slides[slideIndex - 1].style.display = "block";
		setTimeout(showSlides, 3000); // Change image every 2 seconds
	}
	/* ====================================Add product==================================== */
</script>

