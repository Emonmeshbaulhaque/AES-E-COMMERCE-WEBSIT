<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$id = $_POST['id'];
	
	if($name=="" || $id=="")
	{
		echo "invalid";
		header("location: SellerViewUser.php?status=nullvalue");
	}
	else
	{
		$myfile=fopen("user.txt",'a');
		$data=$name. "|" .$id. "|";
		fwrite($myfile,$data);
		fclose($myfile);
		echo $data;
		header("location:SellerViewUserCheck.php");
	}
}
?>