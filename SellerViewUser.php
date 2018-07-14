<?php
	
	if(isset($_GET['status']))
	{
		$status = $_GET['status'];

		if($status == "invaliduser")
		{
			echo "Invalid Information try again...";
		}
		else if($status == "nullvalue")
		{
			echo "Information can't be empty";
		}
	}
?>	
<h3><a href="SellerHome.php">Back to Home Seller!</a><h3>
		
	<center>
			<table border="2"height="90%"width="40%">
			<form method="post" action="SellerViewUserCheck.php">
			<tr>	
				<td>
					<center><h2><l>View User Buy Product[Order]</l><h1></center>
					</br>
					<h2>User Name:</h2><input type="text" name="name" value="">
					<h2>User ID:</h2><input type="text" name="id" value="">
				</br>
				</br>		
			<hr>
				<center><input type="submit" name="submit" value="Acceept Order"/></center>
			</hr>
			</td>
			</table>
		</center>
