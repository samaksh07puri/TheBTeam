<?php
	$this->load->view('front/include/header');
?>
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary" style="background-image:url(images/banner/bnr4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white"><?php echo $event_name;?></h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li><?php echo $event_name;?></li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-full content-inner exp-services">
                <div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-head text-black text-center">
								<h2 class="box-title m-tb0"><?php echo $event_name;?><span class="bg-primary"></span></h2>
								<p class="font-weight-300 font-18"><?php echo $description;?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-full content-inner-2 portfolio text-uppercase" id="portfolio">
				<div class="container">
					<div class="clearfix">
						<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery port-style1" style="position: relative; height: 1235px;">
							<?php foreach ($images as $img){
							?>
							<li class="web design card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn; position: absolute; left: 0px; top: 0px;padding:10px;">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-effect dlab-img-overlay1" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
										<a href="javascript:void(0);"> <img src="<?php echo base_url().$img;?>" alt=""> </a>
										<div class="overlay-bx">
											
										</div>
									</div>
								</div>
							</li> 
							<?php
							}
							?>
							
							
						</ul>
					</div>
				</div>
			</div>
            <!-- Our Services -->
			<!-- About Us -->
            <!-- About Us End -->
			<!-- About Us -->
		    <!-- Our Services -->
			<!-- Why Chose Us -->
			<div class="section-full content-inner-1 overlay-primary about-service bg-img-fix" style="background-image:url(images/background/bg1.jpg);">
				<div class="container">
					<div class="section-head text-white text-center">
						<h2 class="box-title m-tb0 max-w800 m-auto">Amazing things happen to your business when we connect those dots of utility and value<span class="bg-primary"></span></h2>
						
					</div>
				</div>
				<div class="choses-info text-white">
					<div class="container-fluid">
						<div class="row choses-info-content">
							<div class="col-lg-3 col-md-3 col-sm-6 p-a30 wow zoomIn" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
								<h2 class="m-t0 m-b10 font-weight-400 font-45"><i class="ti-bag m-r10"></i><span class="counter">15</span>+</h2>
								<h4 class="font-weight-300 m-t0">Years in Business</h4>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 p-a30 wow zoomIn" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
								<h2 class="m-t0 m-b10 font-weight-400 font-45"><i class="ti-user m-r10"></i><span class="counter">700</span>+</h2>
								<h4 class="font-weight-300 m-t0">Happy Clients</h4>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 p-a30 wow zoomIn" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
								<h2 class="m-t0 m-b10 font-weight-400 font-45"><i class="flaticon-users m-r10"></i><span class="counter">50</span>+</h2>
								<h4 class="font-weight-300 m-t0">Technical Experts</h4>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 p-a30 wow zoomIn" data-wow-delay="0.8s" style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">
								<h2 class="m-t0 m-b10 font-weight-400 font-45"><i class="ti-mobile m-r10"></i><span class="counter">200</span>+</h2>
								<h4 class="font-weight-300 m-t0">Apps Delivered</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Why Chose Us End -->
			<!-- Testimonials -->
			<!-- Testimonials END -->
			<!-- Get in touch -->
			<div class="section-full overlay-primary-dark bg-img-fix" style="background-image:url(images/background/bg1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-5 content-inner chosesus-content text-white">
							<h2 class="box-title m-b15 wow fadeInLeft" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Let's get in touch<span class="bg-primary"></span></h2>
							<p class="font-16 op8 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.</p>
							
						</div>
						<div class="col-lg-7 col-md-7 m-b30">
							<form class="inquiry-form wow fadeInUp dzForm" data-wow-delay="0.2s" action="" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
								<div class="dzFormMsg"></div>
								<h3 class="box-title m-t0 m-b10">Let's Convert Your Idea into Reality <span class="bg-primary"></span></h3>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="ti-user text-primary"></i></span>
												<input name="dzName" type="text" required="" class="form-control" placeholder="First Name">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="ti-mobile text-primary"></i></span>
												<input name="dzOther[Phone]" type="number" required="" class="form-control" placeholder="Phone">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group"> 
												<span class="input-group-addon"><i class="ti-email text-primary"></i></span>
												<input name="dzEmail" type="email" class="form-control" required="" placeholder="Your Email Id">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="ti-agenda text-primary"></i></span>
												<textarea name="dzMessage" rows="4" class="form-control" required="" placeholder="Tell us about your project or idea"></textarea>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN&amp;co=aHR0cHM6Ly9hZ2VuY3kuZGV4aWdubGFiLmNvbTo0NDM.&amp;hl=en&amp;v=Q_rrUPkK1sXoHi4wbuDTgcQR&amp;size=normal&amp;cb=o44qsiuznstt" width="304" height="78" role="presentation" name="a-kfj4cway23y7" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required="" data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<button name="submit" type="submit" value="Submit" class="site-button button-lg"> <span>Get A Free Quote!</span> </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Get in touch -->
        </div>
		<!-- contact area END -->
    </div>

<?php

$this->load->view('front/include/footer');