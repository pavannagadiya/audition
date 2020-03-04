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
	</div>
</footer>
<!-- Essential jQuery Plugins
		================================================== -->
<!-- Main jQuery -->
<?php $this->load->view('client/script'); ?>
<script>
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
</script>

