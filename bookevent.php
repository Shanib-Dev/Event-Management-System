<?php
include"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<title>Book Event</title>
	
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
						<h3>Book Event</h3>
					</div>
					<div class="row wow fadeInUp">
						<div class="col-lg-6 offset-lg-3">
							<div class="form">
								
								<form   method="POST" role="form" >
										
										<div class="form-group">
										<label>Name of Event
										</label>
										<input type="text" name="title" required   class="form-control" id="mobile" placeholder="Enter name of Event"  />
										<div class="validation"></div>
									
									
										
									</div>
									
									
									<div class="form-row">
									<div class="col-lg-6">
									
										
										
										<div class="form-group">
										<label>Date from
										</label>
										<input type="date" name="date_from" class="form-control" id="date" placeholder="date_from"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
									<div class="col-lg-6">
									
									    <div class="form-group">
                                        <label>Date to		
                                        </label>		
		                                <input type="date" name="date_to" class="form-control" id="date" placeholder="date_to"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
										
									</div>
									<div class="form-row">
									<div class="col-lg-6">
									
										
										
										<div class="form-group">
										<label>Time from</label>
										<input type="time" name="time_from" class="form-control" id="mobile" placeholder="time_from"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
									<div class="col-lg-6">
									
									<div class="form-group">
									<label>Time to
									</label>
										<input type="time" name="time_to" class="form-control" id="time" placeholder="time_to"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
										
									</div>
									<div class="form-group">
									<label>Entertainments:-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="music"  value="yes" />Music&nbsp;&nbsp;
										<input type="checkbox" name="dance"  value="yes" />Dance&nbsp;&nbsp;
										<input type="checkbox" name="cartoon"  value="yes" />Cartoons
										<div class="validation"></div>
									</div>
<div class="form-group">
									<label>Decoration:-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="light"  value="yes" />Light&nbsp;&nbsp;
										<input type="checkbox" name="chair"  value="yes" />Chair&nbsp;&nbsp;
										<input type="checkbox" name="stage"  value="yes" />Stage&nbsp;&nbsp;
										<input type="checkbox" name="flower"  value="yes" />Flowers
										<div class="validation"></div>
									</div>
<div class="form-group">
									<label>Food:-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="veg"  value="yes" />Veg&nbsp;&nbsp;
										<input type="checkbox" name="nonveg"  value="yes" />Non-Veg&nbsp;&nbsp;
										<input type="checkbox" name="veg_nonveg"  value="yes" />Veg + Non-Veg&nbsp;&nbsp;
										<div class="validation"></div>
									</div>
									<div class="form-group">
											<label>No of Chairs
										</label>
										<input type="text" name="no_of_chair" class="form-control" required  id="chairs" placeholder="No. Of Chairs"  />
										<div class="validation"></div>
									
									
										
									</div>
									
									<div class="form-group">
											<label>Address
										</label>
										<input type="text" name="address" class="form-control" required  id="address" placeholder="Address"  />
										<div class="validation"></div>
									
									
										
									</div>
									<div class="form-group">
										<label>Contact Details
										</label>
										<input type="mobile" name="mobile" class="form-control" required  id="mobile" placeholder="Enter personal ph number / Incharge ph number"  />
										<div class="validation"></div>
									
									
										
									</div>
									<div class="form-group">
										<label>Email Id
										</label>
										<input type="email" name="email" class="form-control" required id="email" placeholder="E-mail "  />
										<div class="validation"></div>
									
									
										
									</div>
									<div class="text-center"><button type="submit" name="submit" title="Register Now">Register Now</button></div>
								</form>
							</div>
							<?php
							if(isset($_REQUEST['submit']))
							{
								extract($_REQUEST);
								$id=$_SESSION['id'];
								echo $n=iud("INSERT INTO `event`( `userid`,`title`, `date_from`, `date_to`, `time_from`, `time_to`, `music`, `dance`,
								`cartoons`, `light`, `chair`, `stage`, `flower`, `no_of_chair`, `veg`, `nonveg`, `veg_nonveg`,
								`address`, `mobile`, `email`) VALUES ('$id','$title','$date_from','$date_to','$time_from','$time_to',
								'$music','$dance','$cartoon','$light','$chair','$stage','$flower','$no_of_chair','$veg','$nonveg',
								'$veg_nonveg','$address','$mobile','$email')");
								if($n==1)
								{
									echo"<script>alert('Booked Successful');
									window.location='view_event.php';
									</script>";
								}
								else
								{
									echo"<script>alert('Something Wrong Try Again');
									window.location='createevent.php';
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
		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

		<script src="lib/jquery/jquery.min.js"></script>
	
		<script src="lib/wow/wow.min.js"></script>
	
		<script src="js/main.js"></script>
	</body>
</html>