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
					<form method="post" action="SellerProductInfoCheck.php">
		<center>
			<table border="2"height="90%"width="40%">
				
			<tr>
				

				<center><h2><l>Product Info. Add</l><h1></center>



				<td>
					
					<h2>Product Name:</h2><input type="text" name="name" value="">
					<h2>Product ID:</h2><input type="text" 	name="id" value="">
					<h2>Product Price:</h2><input type="text" name="price" value="">		
					<h2>Product Type:</h2>
						<input name="Product" type="radio" value="Cosmatics">Cosmatics
						<input name="Product" type="radio" value="Electronics">Electronics
						<input name="Product" type="radio" value="Cloths">Cloths
						<input name="Product" type="radio" value="Foods">Foods

					</br>
					</br>
						
					<h2><b>Upload Product Picture</h2>
				    <form>
				        <img width="128" src="../image/user.png" />
				        <br />
				        <input type="file">
				    </form>
			<hr>
				<center><input type="submit" name="submit" value="Add_Product"/></center>
			</hr>
			</td>
			</table>
		</center>