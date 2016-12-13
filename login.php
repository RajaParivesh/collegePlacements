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
								$row = (array) mysqli_fetch_object($result);
								$_SESSION['user']=$row;
								$user_type_id=$row['user_type_id'];
								
								// $_SESSION['user']=$row['name'];


								 header('Location:'.redirectToHomePage ($user_type_id).'');
							} else {
								echo 'Your username and password doesnot match';
							}
							// print_r($_SESSION);


						}					    


				    ?>		 	
 



