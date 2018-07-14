<?php
	
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == "")
		{
			//echo "invalid submission";
			header("location: LogUser.php?status=nullvalue");
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
				header("location: MainUser.php");
			}
			else
			{
				header("location: MainUser.php?status=invaliduser");
			}
			fclose($myfile);

		}
	}

?>