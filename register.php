<?php
include"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<title>Registration Form</title>

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
		</br>
		</br>
		</br>
		<main id="main">
			<section id="contact">
				<div class="container-fluid">
					<div class="section-header">
						<h3>Register Now</h3>
					</div>
						<div class="col-lg-6 offset-lg-3">
							<div class="form">
							
								<form   method="POST" role="form" >
									<div class="form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<input type="text" name="email" class="form-control" id="email" placeholder="Your Email"  data-validation="email" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<input type="text" name="password" class="form-control" id="password" placeholder="Your Password"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									
								
									<div class="text-center"><button type="submit" name="submit" title="Register Now">Register Now</button></div>
								</form>
							</div>
							<?php
							if(isset($_REQUEST['submit']))
							{
								extract($_REQUEST);
								$n=iud("INSERT INTO `registration`( `name`, `mobile`, `email`, `password`) VALUES('$name','$mobile','$email','$password')");
								if($n==1)
								{
									echo"<script>alert('Register Successful');
									window.location='login.php';
									</script>";
								}
								else
								{
									echo"<script>alert('Something Wrong Try Again');
									window.location='register.php';
									</script>";
								}
							}
							?>
						</div>
					</div>
				</div>
			</section>
		</main>
		
		<footer id="footer">
			<div class="footer-top">
				<div class="container">
					
				</div>
			</div>
		</footer>
		
	</body>
</html>