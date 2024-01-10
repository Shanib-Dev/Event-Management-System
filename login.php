<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Login Form</title>
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
	
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<link href="css/style.css" rel="stylesheet">
		</head>
	<body>
		
		<header id="header" class="fixed-top">
			<div class="container">
				<div class="logo float-left">
				<h1 style="font-weight:bold">Event's</h1>
				</div>
				<?php include"nav.php";?>
			</div>
		</header>
		
		<main id="main">
		</br>
		</br>
		</br>
			<section id="contact">
				<div class="container-fluid">
					<div class="section-header">
						<h3>Login Here</h3>
					</div>
					<div class="row wow fadeInUp">
						<div class="col-lg-6 offset-lg-3">
							<div class="form">
								
								<form action="myphp.php"  method="POST" role="form" >
									
									<div class="form-row">
										<div class="form-group col-lg-6">
											<input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  type="text" data-validation="email"/>
											<div class="validation"></div>
										</div>
										<div class="form-group col-lg-6">
											<input type="password" name="password" class="form-control" id="password" placeholder="Your Password"   />
											<div class="validation"></div>
										</div>
										
									</div>
									
									</br>
									</br>
									<div class="text-center"><button type="submit" name="login" title="Login Now">Login Now</button></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			
		</main>
		<footer id="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 footer-info">
							</br>
							</br>
							</br>
						</div>
								
					</div>
				</div>
		
		</footer>

		<div id="preloader"></div>

		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/jquery/jquery-migrate.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="lib/easing/easing.min.js"></script>
		<script src="lib/mobile-nav/mobile-nav.js"></script>
		<script src="lib/wow/wow.min.js"></script>
		<script src="lib/waypoints/waypoints.min.js"></script>
		<script src="lib/counterup/counterup.min.js"></script>
		<script src="lib/owlcarousel/owl.carousel.min.js"></script>
		<script src="lib/isotope/isotope.pkgd.min.js"></script>
		<script src="lib/lightbox/js/lightbox.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		<script>
			$.validate({
				lang: 'en'
			});
		</script>

		<script src="js/main.js"></script>
	</body>
</html>