<?php 
	require '../includes/header.php';

	require ROOT.'config/database.php';	
	require ROOT.'lib/dropdown.php';	
	// require ROOT.'includes/user_details.php';
	require ROOT.'includes/redirect_to_login.php';
	require ROOT.'includes/company_menu.php';
?><br><br><br>

<div class="container">
<form action="index.php" method="POST"  class="well form-horizontal">
		<fieldset>
		    <legend><h3>Add your company profile</h3></legend>
			
			<label for="name"> Name</label><br>	
			<input type="text" name="name" required minlength="3"><br><br>

			<label for="logo"> Logo </label><br>
			<input type="url" name="logo" minlength="3"><br><br>	

			<label for="description"> Description </label><br>
			<textarea name="description"></textarea><br><br>

			<label for="tagline"> Tagline </label><br>
			<input type="text" name="tagline" required minlength="3"><br><br>

			<label for="strength"> Strength </label><br>
			<input type="text" name="strength" required ><br><br>
			
			<label for="establishment_year"> Establishment_year </label><br>
			<input type="number" name="establishment_year" required minlength="4" maxlength="4"><br><br>

			<label for="sector_id">	Sector</label>
			<?php
				$data = mysqli_query($conn,"SELECT id,name FROM sectors") or die(mysqli_error($conn));
		
					// calling dropdown function 
					dropdown($data,'sector_id');
			?>

			<br><br>
			<label for="address"><h3> Address</h3></label><br>	
			<div>
				<label for="house_no"> House_no.</label><br>	
				<input type="text" name="house_no" ><br><br>
					

				<label for="street"> Street </label><br>
				<input type="text" name="street" required ><br><br>

				<label for="area"> Area </label><br>
				<input type="text" name="area" required minlength="3"><br><br>

				<label for="pincode"> Pincode </label><br>
				<input type="number" name="pincode" required minlength="6" maxlength="6"><br><br>

				<label for="google_map_link"> Google_map_link </label><br>
				<input type="url" name="google_map_link" minlength="3"><br><br>	
			</div>

			<input type="submit" name="Submit">

		</fieldset>
	</form>
</div>
<?php
	if(isset($_POST['name']) && isset($_POST['sector_id'])&& isset($_POST['sector_id'])&& isset($_POST['description'])&& isset($_POST['tagline'])&& isset($_POST['establishment_year'])&& isset($_POST['strength'])&& isset($_POST['house_no'])&& isset($_POST['street'])&& isset($_POST['area'])&& isset($_POST['pincode'])&& isset($_POST['google_map_link'])){

		 $name = $_POST['name'];
		 $logo = $_POST['logo'];
		 $sector_id = $_POST['sector_id'];
		 $description = $_POST['description'];
		 $tagline = $_POST['tagline'];
		 $establishment_year = $_POST['establishment_year'];	
		 $strength = $_POST['strength'];	
		 $house_no = $_POST['house_no'];
		 $street = $_POST['street'];	
		 $area = $_POST['area'];	
		 $pincode = $_POST['pincode'];	
		 $google_map_link = $_POST['google_map_link'];	
		

		// $_SESSION['username']=$username;
		// echo $_SESSION['username'];
		
		// $_SESSION['password']=$password;
		// echo $_SESSION['password'];

		// $_SESSION['email']=$email;
		// echo $_SESSION['email'];

		// connect to database require config file
		
		$sql1 = "INSERT INTO addresses (house_no,street,area,pincode,google_map_link)
			  VALUES ('".$house_no."','".$street."','".$area."','".$pincode."','".$google_map_link."')";

			$conn->query($sql1) or die(mysqli_error($conn));
	
			// take out the last inserted id
			$address_id = $conn->insert_id;
			$user_id=$_SESSION['user']['id'];
			// pr($_SESSION);



		$sql2 = "INSERT INTO company_profiles (user_id,name,logo,sector_id,address_id,description,tagline,establishment_year,strength)
			  VALUES ('".$user_id."','".$name."','".$logo."','".$sector_id."','".$address_id."','".$description."','".$tagline."','".$establishment_year."','".$strength."')";

		$conn->query($sql2) or die(mysqli_error($conn));

		// if (($conn->query($sql2))== TRUE) {
		    // echo "Company profile Completed ";
		    
		//   // echo "<a href='index.php'>Please click here for login</a>";

		// } else {
		    // echo "Error: " . $sql . "<br>" . $conn->error;
		// }
		
	// /	$conn->close();
}
	
?>