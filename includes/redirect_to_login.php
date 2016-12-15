<?php 
		if (!isset($_SESSION['user'])) {
			$url = BASE_URL.'login.php';
			header('Location: '.$url);
		}
 ?>