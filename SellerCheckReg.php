<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$shop=$_POST['shop'];
	
	if($username=="" || $password=="" || $confirmpassword=="" || $email=="" || $gender==""
	|| $shop="")
	{
		echo "invalid";
		header("location: RegSeller.php?status=nullvalue");
	}
	else
	{
		$myfile=fopen("user.txt",'a');
		$data=$username. "|" .$password. "|" .$confirmpassword. "|" .$email. "|" .$gender. "|" .$shop."|";
		fwrite($myfile,$data);
		fclose($myfile);
		echo $data;
		header("location:LogSeller.php");
	}
}
?>