<?php 
// session_start();

 ?>

<!-- <h3>Login </h3>

<form action="index.php" method="POST">
	
	<label for="mobile/username"> Mobile/Username</label><br>	
	<input type="text" name="username"><br>

	<label for="password"> Password</label><br>
	<input type="password" name="password"><br>

	<label for="email"> Email</label><br>
	<input type="email" name="email"><br><br>

	<input type="submit" value="Sign Up"><br>

</form>
 -->


<!-- <?php 
$time= time();
setcookie('username','raja',time()+10);

echo $_COOKIE['username'];
 ?>
 -->

<fieldset>
<legend><h3>Sign in to continue to the website</h3></legend>
<form action="login.php" method="POST">
	<input type="submit" name="login" value="Login"><br><br>
</form>
<form action="signup.php" method="POST">
	<input type="submit" name="signup" value="Sign Up">
</form>
</fieldset>


