
<?php  header("Access-Control-Allow-Origin: *");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="The B Team : Event Marketing Agency" />
	<meta property="og:title" content="The B Team : Event Marketing Agency" />
	<meta property="og:description" content="The B Team : Event Marketing Agency" />
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<title>The B Team : Event Marketing Agency</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/plugins.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/templete.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/skin-6.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/revolution.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/revolution.addon.particles.css"/>
<?php
if($this->session->tempdata('message')!=''){
?><script>alert('<?php echo $this->session->tempdata('message');?>');
<?php 
$this->session->unset_tempdata('message');
?>
</script>
<?php
}
?>
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-area"></div>
	<!-- header -->
    <header class="site-header header-transparent mo-left">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="/" class="dez-page"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="/contact" class="dez-page site-button primary">Inquire Now </a>
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">	
							<li class="active"><a href="/"><span class="ti-home"></span></a></li>
							<li><a href="/about">About Us</a></li>
							<li><a href="/portfolio">Portfolio</a></li>
							<li><a href="/services">Services</a></li>
							<li><a href="/contact">Contact Us</a></li>
						</ul>		
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>