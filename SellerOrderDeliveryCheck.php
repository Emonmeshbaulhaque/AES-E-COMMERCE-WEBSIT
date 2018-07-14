<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$id = $_POST['id'];
	$pname = $_POST['pname'];
	$pid = $_POST['pid'];
	
	if($username=="" || $id=="" ||$pname=="" || $pid="")
	{
		echo "invalid";
		header("location: SellerOrderDelivery.php?status=nullvalue");
	}
	else
	{
		$myfile=fopen("user.txt",'a');
		$data=$username. "|" .$id. "|" .$pname. "|" .$pid. "|";
		fwrite($myfile,$data);
		fclose($myfile);
		echo $data;
		header("location:SellerOrderDeliveryCheck.php");
	}
}
?>