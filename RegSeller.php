<?php
	
	if(isset($_GET['status']))
	{
		$status = $_GET['status'];

		if($status == "invaliduser")
		{
			echo "Invalid Informaion & try again...";
		}
		else if($status == "nullvalue")
		{
			echo "Informaion can't be empty";
		}
	}
?>
<h3><a href="LogSeller.php">Back to Seller Login Page!</a><h3>
</br>
<fieldset>	
    <h1><b>Seller Registration</b></h1>

	<form method="post" action="SellerCheckReg.php">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input type="text"name="username"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input type="text"name="email">
				</td>
				<td></td>
			</tr>		
		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input type="password"name="confirmpassword"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="Other">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Shop Type</legend> 
						<input name="shop" type="radio" value="Cosmatics">Cosmatics
						<input name="shop" type="radio" value="Electronics">Electronics
						<input name="shop" type="radio" value="Cloths">Cloths
						<input name="shop" type="radio" value="Foods">Foods
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit">
	</form>
</fieldset>