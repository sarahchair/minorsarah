<?php
$assets_location = base_url()."assets/bootstrap/";
$file_location = base_url()."assets/file/";
?>

<!DOCTYPE html>
<html>
<head>
<title>Minor Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grilling Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo $assets_location;?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo $assets_location;?>css/style.css" type="text/css" rel="stylesheet" media="all">  
<link rel="stylesheet" href="<?php echo $assets_location;?>css/flexslider.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="<?php echo $assets_location;?>css/swipebox.css">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="<?php echo $assets_location;?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo $assets_location;?>js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php echo $assets_location;?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $assets_location;?>js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->	
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header"> 	<!-- header -->
		<!--style="position: fixed; top:0; z-index: 100; width: 100%;"> -->
			<div class="container">		
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="#">Minor Project</a></h1>
					</div>
					<!-- navbar-header //  -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" class="active">Home</a></li>
							<li><a href="#about" class="scroll">About</a></li>
							<li><a href="#menu" class="scroll">Menu</a></li>
							<li><a href="#team" class="scroll">Team</a></li>
							<li><a href="#gallery" class="scroll">Gallery</a></li>
							<li><a href="#contact" class="scroll">Contact Us</a></li>
						</ul>	
						<div class="clearfix"> </div>	
					</div>
				</nav>
			</div> 
		</div>
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-text"> 
			<div class="flexslider">
				<ul class="slides">
					<li>
						<h2>ETHNIC WAREHOUSE</h2>
						<p>We're proud to sale all about indonesian ethnic fashions for you!</p>
						<a href="#" class="more" data-toggle="modal" data-target="#myModal">Be Our Fashion Subscriber!</a>  
					</li>
					<li>
						<h2>NECKLACE</h2>
						<p>B Y  R H E A M A L I A</p>
						<a href="#" class="more" data-toggle="modal" data-target="#myModal">Be Our Fashion Subscriber!</a>  
					</li>
					<li>
						<h2>TOPS & PANTS</h2>
						<p>B Y  B H I N K A</p>
						<a href="#" class="more" data-toggle="modal" data-target="#myModal">Be Our Fashion Subscriber!</a>  
					</li>
					<li>
						<h2>TOPS</h2>
						<p>B Y  L O V E D M A H A R A N I</p>
						<a href="#" class="more" data-toggle="modal" data-target="#myModal">Be our Fashion Subscriber!</a>  
					</li>
				</ul>
			</div>  

	<!-- modal -->
			<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							<h4 class="modal-title">Be Our Fashion Subscriber!</h4>
						</div> 
						<div class="modal-body book-form">
							<form action="<?php echo base_url();?>index.php/admin/SMTPMail" method="post">
								<div class="phone_email">
									<label>Full Name : </label>
									<div class="form-text">
										<span class="fa fa-user" aria-hidden="true"></span>
										<input type="text" name="nama" placeholder="Name" required="">
									</div> 
								</div>
								<div class="phone_email phone_email1">
									<label>Email : </label>
									<div class="form-text">
										<span class="fa fa-envelope" aria-hidden="true"></span>
										<input type="text" name="email" placeholder="Email" required="">
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="agileits_reservation_grid">
									<div class="clearfix"></div>
								</div> 
								<input type="submit" value="SUBSCRIBE" />
								<div>
								<label>*By clicking Subscribe, you agree to receive email from us</label></div>
							</form>
						</div>
						 
					</div>
				</div>
			</div>
			<!-- //modal -->  



			<!-- modal -->
	<!--		<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							<h4 class="modal-title">Make Your Reservation Now</h4>
						</div> 
						<div class="modal-body book-form">
							<form action="#" method="post">
								<div class="phone_email">
									<label>Full Name : </label>
									<div class="form-text">
										<span class="fa fa-user" aria-hidden="true"></span>
										<input type="text" name="Name" placeholder="Name" required="">
									</div> 
								</div>
								<div class="phone_email phone_email1">
									<label>Email : </label>
									<div class="form-text">
										<span class="fa fa-envelope" aria-hidden="true"></span>
										<input type="text" name="email" placeholder="Email" required="">
									</div>
								</div>
								<div class="phone_email">
									<label>Phone Number : </label>
									<div class="form-text">
										<span class="fa fa-phone" aria-hidden="true"></span>
										<input type="text" name="Phone no" placeholder="Phone no" required="">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<label>Address : </label>
									<div class="form-text">
										<span class="fa fa-map-marker" aria-hidden="true"></span>
										<input type="text" name="address" placeholder="Your Address" required="">
									</div> 
								</div> 
								<div class="clearfix"></div>
								<div class="agileits_reservation_grid">
									<div class="span1_of_1">
										<label>Date : </label> 
										<div class="book_date"> 
											<span class="fa fa-calendar" aria-hidden="true"></span>
											<input class="date" id="datepicker" type="text" name="date" placeholder="mm/dd/yyyy" required="">
										</div>					
									</div>
									<div class="span1_of_1">
										<!-- start_section_room -->
				<!--						<label>Time : </label>
										<div class="section_room">
											<span class="fa fa-clock-o" aria-hidden="true"></span>
											<select id="country" onchange="change_country(this.value)" class="frm-field required">
												<option value="null">Lunch</option>
												<option value="null">Dinner</option>         
												<option value="AX">Break Fast</option>
											</select>
										</div>	
									</div>
									<div class="span1_of_1">
										<label>No.of People : </label>
										<!-- start_section_room -->
		<!--								<div class="section_room">
		<!--									<span class="fa fa-users" aria-hidden="true"></span>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
												<option value="null">1 People</option>
												<option value="null">2 People</option>
												<option value="null">3 People</option>         
												<option value="AX">4 People</option>
												<option value="AX">More</option>
											</select>
										</div>	
									</div> 
									<div class="clearfix"></div>
								</div> 
								<input type="submit" value="Book Now" />
							</form>
						</div>
						<!-- Calendar -->
		<!--				<link rel="stylesheet" href="css/jquery-ui.css" />
						<script src="js/jquery-ui.js"></script>
						<script>
								$(function() {
									$( "#datepicker" ).datepicker();
								});
						</script>
						<!-- //Calendar -->  
	<!--				</div>
				</div>
			</div> -->
			<!-- //modal -->  



			<!-- FlexSlider-->
			<script defer src="<?php echo $assets_location;?>js/jquery.flexslider.js"></script>
			<script type="text/javascript">
			$(window).load(function() {
			  $('.flexslider').flexslider({
				animation: "slide",
				controlsContainer: $(".custom-controls-container"),
				customDirectionNav: $(".custom-navigation a")
			  });
			});
			</script>
			<!-- //FlexSlider -->
		</div> 
		<!-- //banner-text --> 
	</div>
	<!-- //banner --> 