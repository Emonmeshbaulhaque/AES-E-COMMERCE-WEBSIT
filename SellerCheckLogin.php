<?php
	
	session_start();

	if(isset($_POST['submit']))
	{

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == "")
		{
			header("location: LogSeller.php?status=nullvalue");
		}
		else
		{
			$myfile = fopen("user.txt", 'r');
			$isvalid = "";

			while (!feof($myfile)) 
			{
				$data = fgets($myfile);
				$arr = explode("|", $data);
				
				if($arr[0] == $username && $arr[1] == $password)
				{
					$isvalid = "validuser";
				}
			}
			//echo $isvalid;
			if($isvalid == "validuser")
			{
				$_SESSION ['Emon'] = "1111";
				header("location: SellerHome.php");
			}
			else
			{
				header("location: SellerHome.php?status=invaliduser");
			}
			fclose($myfile);

		}
	}

?>