<?php
	
	if(isset($_GET['status']))
	{
		$status = $_GET['status'];

		if($status == "invaliduser")
		{
			echo "Invalid user info! try again...";
		}
		else if($status == "nullvalue")
		{
			echo "Username/Password can't be empty";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<body> 
	
		<center>

		<table border="2"height="90%"width="40%">

			<tr>

		<h1><center>Admin Login</center></h1>

		<form method="post" action="AdminCheck.php">
				
		<td>


			<h2>User Name:</h2><input type="text" name="username">

			<h2>Password:</h2><input type="password" name="password">


		<hr>
				<center>
					<input type="submit" name="submit" value="Sign in"/>
				</center>
		</hr>
		</td>
		</tr>
		</table>
		</br>
		<h3><a href="AES.php">Back to home Page!</a><h3>

		</center>

</from>
</body>
</html>