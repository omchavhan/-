<!DOCTYPE html>

<html lang="zxx">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Findas India</title>
    <meta name="description" content="Finanzi template exclusively build for finance, accounting, financial and business planning. It is built using bootstrap 3.3.2 framework, works totally responsive, easy to customise, well commented codes and seo friendly.">
    <meta name="keywords" content="accountant, finance, advisory, business, company, consulting, financial, money, corporate, invest, attorney, broker, office">
    
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/favicon-16x16.png">
	<link rel="apple-touch-icon" href="img/favicon-32x32.png">
	<link rel="apple-touch-icon" href="img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap-dropdownhover.min.css">
	<link href="https://fonts.cdnfonts.com/css/arial-nova" rel="stylesheet">
	

	<!-- ==============================================
	CSS font-awesome
	=============================================== -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <script type="text/javascript" src="js/vendor/modernizr.min.js"></script>

	<style>
		#myModal .modal-dialog {
			top:10%;
		}

		#myModal .form-appointment {
			margin-top: 0px;
		}

		#myModal .modal-header {
			position: relative;
			top: 0;
			left: 0;
		}

		.modal-header .close {
			position: absolute;
			right: -10px;
			opacity: 1;
			width: 50px;
			height: 50px;
			border-radius: 50%;
			background: #fff;
			display: block;
			top: -10px;
			box-shadow: 0px 0px 5px rgba(0,0,0,.2);
		}

		#myModal .modal-header .fa-times {
			font-size:30px;
			color:#daa14c;
		}
		

	</style>

</head>



<body>

	<?php 
		$directoryURI = $_SERVER['REQUEST_URI'];
		$path = parse_url($directoryURI, PHP_URL_PATH);
		// echo $path;
		
		$components = explode('/', $path);
		// echo $components;
		
		$first_part = $path;
	    // echo $first_part;
		// exit;
	?>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">
    	<!-- TOPBAR -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-7 topLeft">
						<div class="info">
							<div class="info-item">
								<a target="_blank" href="https://www.youtube.com/@FindasMarathi">
									<i class="fa fa-youtube" aria-hidden="true"></i>
								</a>
							</div>
							<div class="info-item">
								<a target="_blank" href="https://www.facebook.com/Financiallybindaas">
									<i class="fa fa-facebook"></i>
								</a>
							</div>
							<div class="info-item">
								<a target="_blank" href="https://twitter.com/findas_india">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</div>
							<div class="info-item">
								<a target="_blank" href="https://www.instagram.com/findasindia/">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</div>
							<div class="info-item">
								<a target="_blank" href="https://www.linkedin.com/in/samir-machawe-b02468188/">
									<i class="fa fa-linkedin"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-5 col-md-5">
						<div class="request-quote pull-right">
							<a data-toggle="modal" data-target="#myModal" href="javascript(0)" title="">
								BOOK AN APPOINTMENT
							</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="fa fa-times"></span>
						</button>
						<h4 class="modal-title" id="myModalLabel">Appointment Form</h4>
					</div>
					<div class="modal-body">
						<form action="#" class="form-appointment" id="contactForm" data-toggle="validator">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="p_name" id="p_name" placeholder="Enter Full Name..." required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" name="p_email" id="p_email" placeholder="Enter Email Id..." required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="tel" class="form-control" name="p_phone" id="p_phone" placeholder="Enter Phone No..." required="" maxlength="10">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="p_city" id="p_city" placeholder="Enter City Name..." required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="p_subject" id="p_subject" placeholder="Enter Subject...">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								 <textarea id="p_message" name="p_message" class="form-control" rows="6" placeholder="Write message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-primary">SUBMIT</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar navbar-main">
		
			<div class="container container-nav">
				<div class="row">
						
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<img src="img/logo.jpg" alt="" />
						</a>
					</div>

					<nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
						<ul class="nav navbar-nav navbar-right">
                            <li>
								<a class="<?php if ($first_part=="/" ||  $first_part=="/index.php") {echo "actived"; } else  {echo "";}?>" href="index.php">Home</a>
							</li>
                            <li>
								<a class="<?php if ($first_part=="/about_us.php") {echo "actived"; } else  {echo "";}?>" href="about_us.php">About Us</a>
							</li>
                            <li>
								<a class="<?php if ($first_part=="/services.php") {echo "actived"; } else  {echo "";}?>" href="services.php">Services</a>
							</li>
                            <li>
								<a class="<?php if ($first_part=="/blog.php") {echo "actived"; } else  {echo "";}?>" href="blog.php">Blog</a>
							</li>
                            <li>
								<a class="<?php if ($first_part=="/courses.php") {echo "actived"; } else  {echo "";}?>" href="courses.php">Courses</a>
							</li>
							<li>
								<a class="<?php if ($first_part=="/podcast.php") {echo "actived"; } else  {echo "";}?>" href="podcast.php">Podcast</a>
							</li>
							<li>
								<a class="<?php if ($first_part=="/sip_calculator.php") {echo "actived"; } else  {echo "";}?>" href="sip_calculator.php">
									SIP calculator
								</a>
							</li>
                            <li>
								<a class="<?php if ($first_part=="/investment_opportunities.php") {echo "actived"; } else  {echo "";}?>" href="investment_opportunities.php">Investment Opportunities</a>
							</li>
							<li>
								<a class="<?php if ($first_part=="/contact_us.php") {echo "actived"; } else  {echo "";}?>" href="contact_us.php">Contact Us</a>
							</li>
							
						</ul>
						

					</nav>
						
				</div>
			</div>
	    </div>

    </div>