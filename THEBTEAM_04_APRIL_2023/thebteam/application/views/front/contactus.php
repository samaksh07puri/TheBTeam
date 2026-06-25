<?php 
$this->load->view('front//include/header');?>

<div class="full-section">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary-dark contact-page" style="background-image:url(<?php echo base_url();?>assets/images/background_contact.jpg);">
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-xs-4">
						<div class="row text-white">
							<div class="col-lg-12 col-md-6 m-b30 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary text-left"><i class="ti-location-pin"></i></span> 
											Company Address
										</h5>
										<p>A-33, Sector-2 Noida,U.P </p>
										<h6 class="m-b15 font-weight-400"><i class="ti-alarm-clock"></i> Office Hours</h6>
										<p class="m-b0">Mon To Fri - 09.00-5.00</p>
										<p>Sunday - Close</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 m-b30 wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary text-left"><i class="ti-email"></i></span> 
											E-mail
										</h5>
										<p class="m-b0">letschat@thebteam.com</p>
									
									
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 m-b30 wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary text-left"><i class="ti-mobile"></i></span> 
											Phone Numbers
										</h5>
										<p>+91-9560064016</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-xs-8">
						<form class="inquiry-form wow fadeInUp dzForm" data-wow-delay="0.2s" action="" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
						<div class="dzFormMsg"></div>
							<h3 class="box-title m-t0 m-b10">Let's Convert Your Idea into Reality <span class="bg-primary"></span></h3>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-user text-primary"></i></span>
											<input name="name" type="text" required="" class="form-control" placeholder="First Name">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-mobile text-primary"></i></span>
											<input name="phone" type="number" min-length="10" max-length="10" required="" class="form-control" placeholder="Phone">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group"> 
											<span class="input-group-addon"><i class="ti-email text-primary"></i></span>
											<input name="email" type="email" class="form-control" required="" placeholder="Your Email Id">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-agenda text-primary"></i></span>
											<textarea name="message" rows="4" class="form-control" required="" placeholder="Tell us about your project or idea"></textarea>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN&amp;co=aHR0cHM6Ly9hZ2VuY3kuZGV4aWdubGFiLmNvbTo0NDM.&amp;hl=en&amp;v=Q_rrUPkK1sXoHi4wbuDTgcQR&amp;size=normal&amp;cb=s6weva6sdmij" width="304" height="78" role="presentation" name="a-vbezxujcm9d8" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
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
        <!-- inner page banner END -->
    </div>

<?php 

$this->load->view('front//include/footer');
?>