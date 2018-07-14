<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$id = $_POST['id'];
	$price = $_POST['price'];
	$Product = $_POST['Product'];
	
	if($name=="" || $id=="" ||$price=="" || $Product="")
	{
		echo "invalid";
		header("location: SellerProductInfo.php?status=nullvalue");
	}
	else
	{
		$myfile=fopen("user.txt",'a');
		$data=$name. "|" .$id. "|" .$price. "|" .$Product. "|";
		fwrite($myfile,$data);
		fclose($myfile);
		echo $data;
		header("location:SellerProductInfoCheck.php");
	}
}
?>