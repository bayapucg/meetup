<?php include("header.php"); ?>


		<!-- breadcrumb-section - start
		================================================== -->
		<section id="breadcrumb-section" class="breadcrumb-section clearfix">
			<div class="jarallax" style="background-image: url(assets/images/breadcrumb/0.breadcrumb-bg.jpg);">
				<div class="overlay-black">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-md-12 col-sm-12">

								<!-- breadcrumb-title - start -->
								<div class="breadcrumb-title text-center mb-50">
									<span class="sub-title">contact us now</span>
									<h2 class="big-title">keep <strong>in touch</strong></h2>
								</div>
								<!-- breadcrumb-title - end -->

								<!-- breadcrumb-list - start -->
								<div class="breadcrumb-list">
									<ul>
										<li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">contact us</li>
									</ul>
								</div>
								<!-- breadcrumb-list - end -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb-section - end
		================================================== -->





		<!-- contact-section - start
		================================================== -->
		<section id="contact-section" class="contact-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="section-title mb-50">
					<small class="sub-title">contact us</small>
					<h2 class="big-title">Keep in touch <strong>with meetup</strong></h2>
				</div>
				<!-- section-title - end -->

				<!-- contact-form - start -->
				<div class="contact-form form-wrapper text-center">
					<form action="http://jthemes.org/html/harmony-event/contact.php" method="post">
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="text" placeholder="Your Name" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="email" placeholder="Email Address" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="text" placeholder="Your Country" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="tel" placeholder="Phone Number" required>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea placeholder="Your Message" required></textarea>
								<button type="submit" class="custom-btn">send mail</button>
							</div>
							
						</div>
					</form>
				</div>
				<!-- contact-form - end -->

			</div>
		</section>
		<!-- contact-section - end
		================================================== -->





		<!-- google map - start
		================================================== -->
		<section id="map-section" class="map-section clearfix">
			<div class="address-wrapper">

				<!-- address-info-topbar - start -->
				<div class="address-info-topbar mb-30 clearfix">
					<div class="address-info-left">
						<h3 class="title-text">Meetup</h3>
						<p class="m-0">
							100 ft road, Near Cyber Towers,
							Hitech City, Hyderabad,
							Telangana, India
						</p>
					</div>

					<div class="address-info-right">
						<ul>
							<li>
								<button type="button">
									<span class="icon"><i class="fas fa-street-view"></i></span>
									<small>Direction</small>
								</button>
							</li>
							<li>
								<button type="button">
									<span class="icon"><i class="fas fa-rss"></i></span>
									<small>Save</small>
								</button>
							</li>
						</ul>
					</div>
				</div>
				<!-- address-info-topbar - end -->

				<!-- address-info-bottombar - start -->
				<div class="address-info-bottombar clearfix">
					<div class="address-info-left">
						<div class="rating-star">
							<span class="rating-point">4.5</span>
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star-half"></i></li>
							</ul>
						</div>
						<p class="m-0">105 reviews</p>
					</div>
				</div>
				<!-- address-info-bottombar - end -->
					
			</div>
			<div id="google-map">
				<div id="map" class="google-map-container"></div>
			</div>
		</section>
		<!-- google map - end
		================================================== -->



<?php include("footer.php"); ?>