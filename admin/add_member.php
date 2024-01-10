<?php require_once"dbconfig.php";
if(isset($_SESSION['login']))
{	
}
else
{
	header("location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php include"head.php";?> 
</head>
 <body>
  <div class="left-content">
  <div class="outter-wp">
  <div class="sub-heard-part"></div>
  <h2 class="inner-tittle">Add Member</h2>
  <div class="graph" style="height:1000px">
  <p>
   <h3 class="inner-tittle two" style="font-weight:bold">Member</h3>
 <form class="form-horizontal"  method="post" enctype="multipart/form-data"> 
  <div class="form-group">
   <label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Name</label> 
   <div class="col-xs-6"> 
   <input type="text" class="form-control" id="title" name='name' placeholder="Name"> 
  </div>
  </div>
  <div class="form-group">
   <label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Team</label> 
  <div class="col-xs-6"> 
 <select class="form-control" name="team">
 <option>Select Team</option>
 <option value="Team_a">Team A</option>
 <option value="Team_b">Team B</option>
 <option value="Team_C">Team C</option>
 </select>
  </div>
  </div>
  <div class="form-group">
   <label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Mobile</label> 
  <div class="col-xs-6"> 
    <input type="text" class="form-control" id="title" name='mobile' placeholder="Mobile"> 
  </div>
  </div>
  <div class="col-xs-6"> 
    <center><input type="submit" class="btn btn-info" name="submit" id="elec_submit" value="SUBMIT"></center> </div> </form> 
  </div>
 </p>
 </div>
<?php
 if(isset($_REQUEST['submit']))
 {
	extract($_REQUEST);
	$n=iud("INSERT INTO `member`( `team`, `name`, `mobile`) VALUES ('$team','$name','$mobile') ");
	if($n==1)
	{
		echo"<script>alert('Successful');
		window.location='view_member.php';</script>";
	}
	else
	{
		echo"<script>alert('Something Wrong');
		window.location='view_member.php';</script>";
	}
}
 ?>
</div>
</div>
</div>
<?php include"side_bar.php";?>
</div>
</body>
</html>