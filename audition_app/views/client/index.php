		<main class="site-content" role="main">

			<!--
        Home Slider
        ==================================== -->

			<section id="home-slider">
				<div id="slider" class="sl-slider-wrapper">

					<div class="sl-slider">
						<?php
						$count = 0;

						foreach ($result as $key=>$image) {
						?>
						
							<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" style="display: none;" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

								 <div class="bg-img" style="background-image: url(<?= RES_URL; ?>images/slider_images/<?= $image['slider_photo'] ?>);"></div>

								<?php if ($key%2==0): ?>
							
						
								<div class="slide-caption" style="padding-right: 50%;">
									<div class="caption-content">
										<h2 class="animated fadeInDown"><?php echo $image['slider_title']; ?></h2>
										
										<a href="<?php echo $image['slider_url']; ?>" class="btn btn-blue " style="border-radius: 30px;  background: linear-gradient(90deg, rgb(211, 59, 75) 0%, rgb(250, 150, 28) 100%);"><?php echo $image['slider_button_name']; ?></a>
									</div>
								</div>
								<?php else : ?>
									<div class="slide-caption" style="padding-left: 50%;">
									<div class="caption-content">
										<h2 class="animated fadeInDown"><?php echo $image['slider_title']; ?></h2>
										
										<a href="<?php echo $image['slider_url']; ?>" class="btn btn-blue " style="border-radius: 30px;  background: linear-gradient(90deg, rgb(211, 59, 75) 0%, rgb(250, 150, 28) 100%); "><?php echo $image['slider_button_name'];?></a>
									</div>
								</div>
								<?php endif ?>

							</div>
						<?php
						}
						?>

					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg" >
					<a href="javascript:;" class="sl-prev" style="border-radius: 50% !important;
    background-color: #2f2f2f45 !important;">
						<i class="fa fa-angle-left fa-3x"></i>
					</a>
					<a href="javascript:;" class="sl-next" style="border-radius: 50% !important;
    background-color: #2f2f2f45 !important;">
						<i class="fa fa-angle-right fa-3x"></i>
					</a>
				</nav>


				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

				</div><!-- /slider-wrapper -->
			</section>

			<!--
        End Home SliderEnd
        ==================================== -->

			<section id="about-us">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">GUJARAT NO MODEL</h2>
							<p class="wow animated bounceInRight">The Key Features of our Job</p>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<img src="<?= RES_URL ?>client/img/portfolio/item.jpg">
						</div>

						

					</div>
				</div>
			</section>
			<!-- end about section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-md-4 wow animated fadeInLeft">
							
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3 style="color: black;">Welcome To Our Site</h3>
								<div class="message-body">
									
									<p style="color: white; margin-bottom: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
								</div>
								<a href="#" class="btn btn-border btn-effect pull-right">Read More</a>
							</div>
						</div>
						

						</div>
					</div>
				</div>
			</section>

			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Service</h2>
							<p class="wow animated bounceInRight">The Key Features of our Job</p>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>
								<h3>Support</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>
								<h3>Well Documented</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h3>Design UI/UX</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>

								<h3>Web Security</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- end Service section -->

			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>FEATURED PROJECTS</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>


						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="<?= RES_URL ?>client/img/portfolio/item.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="<?= RES_URL ?>client/img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="<?= RES_URL ?>client/img/portfolio/item2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street" href="<?= RES_URL ?>client/img/slider/banner.jpg" data-fancybox-group="works"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="<?= RES_URL ?>client/img/portfolio/item3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="<?= RES_URL ?>client/img/portfolio/item3.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="<?= RES_URL ?>client/img/portfolio/item4.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="<?= RES_URL ?>client/img/portfolio/item4.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="<?= RES_URL ?>client/img/portfolio/item5.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="<?= RES_URL ?>client/img/portfolio/item5.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="<?= RES_URL ?>client/img/portfolio/item6.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="<?= RES_URL ?>client/img/portfolio/item6.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>

					</div>
				</div>
			</section>
			<!-- end portfolio section -->

			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">

							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>What people say</h2>
							</div>

							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="<?= RES_URL ?>client/img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Katty Flower</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="<?= RES_URL ?>client/img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Katty Flower</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="<?= RES_URL ?>client/img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Katty Flower</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->

			<!-- Price section -->
			<section id="price">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Price</h2>
							<p>Our price for your company</p>
						</div>

						<div class="col-md-3 wow animated fadeInUp">
							<div class="price-table text-center">
								<img src="<?= RES_URL; ?>client/img/price-section/1.jpeg" class="price-section-image" alt="sorry">
								<!-- <span>Silver</span>
								<div class="value">
									<span>$</span>
									<span>24,35</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li><a href="#">sign up</a></li>
								</ul> -->
							</div>
						</div>
						<div class="col-md-3 wow animated fadeInUp">
							<div class="price-table text-center">
								<img src="<?= RES_URL; ?>client/img/price-section/2.jpeg" class="price-section-image" alt="sorry">
							</div>
						</div>
						<div class="col-md-3 wow animated fadeInUp">
							<div class="price-table text-center">
								<img src="<?= RES_URL; ?>client/img/price-section/3.jpeg" class="price-section-image" alt="sorry">
							</div>
						</div>
						<div class="col-md-3 wow animated fadeInUp">
							<div class="price-table text-center">
								<img src="<?= RES_URL; ?>client/img/price-section/4.jpeg" class="price-section-image" alt="sorry">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end Price section -->

			<!-- Contact section -->
			<section id="contact">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contact</h2>
							<p>Leave a Message</p>
						</div>


						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Your Name...">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Your Email...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Subject...">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Messages..."></textarea>
								</div>
								<button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
							</form>
						</div>

						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contact Us</h3>
								<p><i class="fa fa-pencil"></i>Phoenix Inc.<span>PO Box 345678</span> <span>Little Lonsdale St, Melbourne </span><span>Australia</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: (415) 124-5678 </p>
								<p><i class="fa fa-envelope"></i>website@yourname.com</p>
							</address>
						</div>

					</div>
				</div>
			</section>
			<!-- end Contact section -->

			<section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section>

		</main>
