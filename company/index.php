<br><br><br>
<?php 
	require '../includes/header.php';

	require ROOT.'config/database.php';	
	require ROOT.'lib/dropdown.php';	
	// require ROOT.'includes/user_details.php';
	require ROOT.'includes/redirect_to_login.php';
	require ROOT.'includes/company_menu.php';
	require ROOT.'lib/form_auto_input.php';
	// pr($_SESSION);
?>	
<?php
	if(isset($_SESSION['company_profile']['id'])){
		$sql="SELECT company_profiles.id as c_id,addresses.id as a_id, user_id, name, logo, sector_id, address_id, description, tagline, establishment_year, strength, house_no,street,area,pincode,google_map_link from company_profiles LEFT JOIN addresses ON company_profiles.address_id=addresses.id
			where company_profiles.id =".$_SESSION['company_profile']['id']."";	
		$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		$company_profile = (array) mysqli_fetch_object($query);
		 // pr($company_profile);

	}else{
		echo 'error in sql select statement';
	}
?>
<div class="container">
	<form action="index.php" method="POST"  class="well form-horizontal">
		<fieldset>
		    <legend><h3>Add/Edit your company profile</h3></legend>
			
			<label for="name"> Name</label><br>	
			<input type="text" name="name" required minlength="3" value="<?php 	
																			echo form_auto_input($company_profile['name']);
																		 ?>">
			<br><br>

			<label for="logo"> Logo </label><br>
			<input type="url" name="logo" minlength="3" value="	<?php 	
																	echo form_auto_input($company_profile['logo']);
																 ?>">
			<br><br>	

			<label for="description"> Description </label><br>
			<textarea name="description" >
				<?php 	
					echo form_auto_input($company_profile['description']);
				?>	
			</textarea><br><br>

			<label for="tagline"> Tagline </label><br>
			<input type="text" name="tagline" required minlength="3" value="<?php 	
																				echo form_auto_input($company_profile['tagline']);
																			 ?>">
			<br><br>

			<label for="strength"> Strength </label><br>
			<input type="text" name="strength" required value="<?php 	
																	echo form_auto_input($company_profile['strength']);
																 ?>">

			<br><br>
			
			<label for="establishment_year"> Establishment_year </label><br>
			<input type="number" name="establishment_year" required minlength="4" maxlength="4" value="<?php 	
																											echo form_auto_input($company_profile['establishment_year']);
																										?>">

			<br><br>

			<label for="sector_id">	Sector</label>
			<?php
				$data = mysqli_query($conn,"SELECT id,name FROM sectors") or die(mysqli_error($conn));
		
					// calling dropdown function 
					// dropdown($data,'sector_id'); 
				$attribute['name']='sector_id';
				$attribute['default']=$company_profile['sector_id'];

					echo form_auto_input(dropdown($data,$attribute));

					// pr($company_profile);
			?>

			<br><br>
			<label for="address"><h3> Address</h3></label><br>	
			<div>
				<label for="house_no"> House_no.</label><br>	
				<input type="text" name="house_no" value="<?php 	
																echo form_auto_input($company_profile['house_no']);
															 ?>">
				<br><br>
					

				<label for="street"> Street </label><br>
				<input type="text" name="street" required value="<?php 	
																	echo form_auto_input($company_profile['street']);
																 ?>">
 
				<br><br>

				<label for="area"> Area </label><br>
				<input type="text" name="area" required minlength="3" value="<?php 	
																	echo form_auto_input($company_profile['area']);
																 ?>">

				<br><br>

				<label for="pincode"> Pincode </label><br>
				<input type="number" name="pincode" required minlength="6" maxlength="6" value="<?php 	
																	echo form_auto_input($company_profile['pincode']);
																 ?>">

				<br><br>

				<label for="google_map_link"> Google_map_link </label><br>
				<input type="url" name="google_map_link" minlength="3" value="<?php 	
																	echo form_auto_input($company_profile['google_map_link']);
																 ?>">

				<br><br>	
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

		
		 	// $_SESSION['pincode']=$pincode;
			// echo $_SESSION['pincode'];
	
		
		if(is_numberic())
		if($_SESSION['company_id']==NULL){

			$sql1 = "INSERT INTO addresses (house_no,street,area,pincode,google_map_link)
			VALUES ('".$house_no."','".$street."','".$area."','".$pincode."','".$google_map_link."')";

		}else{
				
			// $sql1 = "UPDATE addresses SET house_no='$house_no',street='$street',area='$area',pincode='$pincode',google_map_link='$google_map_link'
			 // WHERE address_id='$address_id'";

			
			}
		
		$conn->query($sql1) or die(mysqli_error($conn));
	
			// take out the last inserted id
			$address_id = $conn->insert_id;
			$user_id=$_SESSION['user']['id'];
			// pr($_SESSION);



		if($_SESSION['company_id']==NULL){

			$sql2 = "INSERT INTO company_profiles (user_id,name,logo,sector_id,address_id,description,tagline,establishment_year,strength)
			VALUES ('".$user_id."','".$name."','".$logo."','".$sector_id."','".$address_id."','".$description."','".$tagline."','".$establishment_year."','".$strength."')";

		}else{
	
			// $sql1 = "UPDATE company_profiles SET user_id='$user_id',name='$name',logo='$logo',sector_id='$sector_id',address_id='$address_id',description='$description',tagline='$tagline',establishment_year='$address_id'
				// WHERE address_id='$address_id'";
		}

		$conn->query($sql2) or die(mysqli_error($conn));


	
		//  SET COMPANY_ID AS SESSION
	    // $sql3="SELECT id FROM company_profiles
	  	// where (user_id='".$_SESSION['user']['id']."')";
	    
	    // $company_id = $conn->query($sql3) or die(mysqli_error($conn));// remove die function
	    // pr($company_id);
	    // echo $company_id;
	    // $_SESSION['company_id']= $company_id;

			
		// /	$conn->close();
	}
?>



