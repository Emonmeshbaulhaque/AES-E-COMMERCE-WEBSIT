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
			<table border="2"height="90%"width="50%">
				
			<tr>

			<h1><l>User Order<l><h1>

			<form method="post" action="SellerOrderDeliveryCheck.php">

			<td>

			<h2>User Name:</h2><input type="text" name="username">

			<h2>User Id:</h2><input type="text" name="id">

			<h2>Product Name:</h2><input type="text" name="pname">

			<h2>Product Id:</h2><input type="text" name="pid">

			</br>
			</br>

			<hr>
				<center><input type="submit" name="submit" value="Cancel Order"/></center>
			</hr>

			</td>

			<br>

			</tr>

			</table>
		</center>