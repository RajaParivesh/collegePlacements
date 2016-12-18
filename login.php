<!-- login page -->

<!-- connecting database -->
<?php 
	require 'includes/header.php';
	require 'config/database.php';
?>
<!-- login form -->
<form action="" method="POST">
	<fieldset>
		    <legend><h3>Login </h3></legend>
			
			<label for="username" required> Username</label><br>	
			<input type="text" name="username" placeholder="Email/Mobile"><br><br>

			<label for="password"> Password</label><br>
			<input type="password" name="password"><br><br>

			<input type="submit" value="Login"><br><br>
	</fieldset>
</form>

<!-- redirectToHomePage function -->
<?php
		function redirectToHomePage ($user_type_id) {
		if($user_type_id==1){
			$redirectToHomePage='student/index.php';
		}elseif ($user_type_id==2) {
			$redirectToHomePage='company/index.php';
		}elseif ($user_type_id==3) {
			$redirectToHomePage='admin/index.php';
		}
		return $redirectToHomePage;
	}
 ?>
					<?php 	
						if (isset($_POST['username']) && isset ($_POST['password']))
						{
							$username = $_POST['username'];
							$password = $_POST['password'];

							$sql="SELECT name,id,email,phone,user_type_id FROM users
									where (email='".$username."' AND password='".sha1($password)."')
							 		OR (phone='".$username."' AND password='".sha1($password)."')";
							// print_r($sql);
							$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

							if ($result->num_rows==1) {
								$user = (array) mysqli_fetch_object($result);
								unset($_SESSION['user']);
								$_SESSION['user']=$user;
								

								// SET PROFILE_ID AS A SESSION 
								//  WHICH IS USED AT THE TIME OF COMPANY PROFILE UPDATION AND ADDITION
								$sql1 = "SELECT id,name,address_id from company_profiles where user_id =".$_SESSION['user']['id'];
								// // pr($sql1);
								$query = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
								$company_profile = (array) mysqli_fetch_object($query);
								unset($_SESSION['company_profile']);
								$_SESSION['company_profile'] = $company_profile;
								// pr($row1);
								// pr($_SESSION);
								header('Location:'.redirectToHomePage ($_SESSION['user']['user_type_id']));
							} else {
								echo 'Your username and password doesnot match';
							}


						}					    


				    ?>		 	