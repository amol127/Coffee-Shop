<?php
	$con=mysqli_connect("localhost","root","","db");
	if(!$con)
	{
		echo "Connection Not Established.";
	}
	$nm=$_POST['name'];
	$em=$_POST['email'];
	$mo=$_POST['mobile'];
	$me=$_POST['message'];
	
	mysqli_select_db($con,"db");
	
	$sql="insert into user values ('$nm','$em','$mo','$me')";
	$res=mysqli_query($con,"$sql");
	
	if(!$res)
	{
		echo "Record not submitted.";
	}
	
	echo "<script>alert('Your Feedback Submitted Successfully..')</script>";
	echo "Thank You....!"
?>