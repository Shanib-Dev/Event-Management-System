<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<title>View Event</title>
		
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
						<h3>View Event</h3>
					</div>
					<table class="table table-responsive">
					<tr style="font-weight:bold">
					<td>S.no.</td>
					<td>Name</td>
					<td>Music</td>
					<td>Dance</td>
					<td>Cartoon</td>
					<td>Light</td>
					<td>Chair</td>
					<td>Stage</td>
					<td>Flowers</td>
					<td>Veg</td>
					<td>Non-veg</td>
					<td>Veg + Non-veg</td>
					<td>No of chair</td>
					<td>Venue address</td>
					<td>Mobile</td>
					<td>Email</td>
					<td>Date </td>
					<td>Time </td>
					<td>Status </td>
					</tr>
					<?php
					$t=1;
					$result=select("select * from event where userid='".$_SESSION['id']."'");
					while($r=mysqli_fetch_array($result))
					{extract($r);
					?>
					<tr>
					<td><?=$t?></td>
					<td><?=$title?></td>
					<td><?=$music?></td>
					<td><?=$dance?></td>
					<td><?=$cartoons?></td>
					<td><?=$light?></td>
					<td><?=$chair?></td>
					<td><?=$stage?></td>
					<td><?=$flower?></td>
					<td><?=$veg?></td>
					<td><?=$nonveg?></td>
					<td><?=$veg_nonveg?></td>
					<td><?=$no_of_chair?></td>
					<td><?=$address?></td>
					<td><?=$mobile?></td>
					<td><?=$email?></td>
					<td><?=$date_from?> To <?=$date_to?></td>
					<td><?=$time_from?> To <?=$time_to?></td>
					<td><?php
					if($status==0) {echo"Pending";}
					if($status==11){echo"Team A";}
					if($status==22){echo"Team B";}
					if($status==33){echo"Team C";}
					?> </td></tr><?php
					}
					?>
					</table>
					
					
				</div>
			</section>
		</main>

		<footer id="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 footer-info">
						
						</div>

					</div>
				</div>
			</div>
			<div class="container">
				<div class="copyright">
					
				</div>
			</div>
		</footer>
	</body>
</html>