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
<?php include"head.php"; ?> 
<body>
<div class="left-content">
<div class="outter-wp">
<div class="sub-heard-part">
</div>
<div class="graph">
<p>
</br>
         Welcome
<?php
if(isset($_SESSION['name']))
{
	$name=$_SESSION['name'];
	echo"$name";
}
?>
</p>
</div>
</div>
<?php include"side_bar.php";?>
</div>
</body>
</html>