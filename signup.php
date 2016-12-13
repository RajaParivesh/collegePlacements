<?php 
		require 'config/database.php';	
	?>


	<form action="signup.php" method="POST">
		<fieldset>
		    <legend><h3>Sign Up </h3></legend>
			
			<label for="name"> Name</label><br>	
			<input type="text" name="name" required minlength="3"><br><br>

			<label for="email"> Email</label><br>
			<input type="email" name="email" required="TRUE"><br><br>

			<label for="phone" > Phone</label><br>
			<input type="number" name="phone" min="1000000000" max="9999999999" required><br><br>

			<label for="password"> Password</label><br>
			<input type="password" name="password" required="TRUE"><br><br>

			
			<label for="user_type_id"> User Type</label>
			<select name="user_type_id" value=""  required>
				<option value="">---</option>
				
					<?php 				 					
						$result = mysqli_query($conn,"SELECT name,id FROM users_types") or die(mysqli_error($conn));
						while ($row = mysqli_fetch_object($result)) {
						    // echo $row->user_id;
							$id=$row->id;
							echo '<option value='.$id.'>';	    
						    echo $row->name;
						    
						    echo '</option>';
						    // print_r($row);
						}
				    ?>		 	
			</select><br><br>
			<input type="submit" value="Sign Up"><br><br>
		</fieldset>
	</form>




 <?php
	if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['password'])&& isset($_POST['user_type_id'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		// $password = $_POST['password'];
		$password = sha1($_POST['password']);
		$user_type_id = $_POST['user_type_id'];
	
		// echo $username;
		// echo $password;
		// echo $email; 
		// echo $phone;
		// echo $_POST['user_type_id']; 
	

		// $_SESSION['username']=$username;
		// echo $_SESSION['username'];
		
		// $_SESSION['password']=$password;
		// echo $_SESSION['password'];

		// $_SESSION['email']=$email;
		// echo $_SESSION['email'];

		// connect to database require config file
		

				



		$sql = "INSERT INTO users (name,email,phone,password,user_type_id)
			 VALUES ('".$name."','".$email."','".$phone."','".$password."','".$user_type_id."')";

		if ($conn->query($sql) === TRUE) {
		    echo "Registration Completed ";
		    
		  echo "<a href='index.php'>Please click here for login</a>";

		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	}
?>
 



