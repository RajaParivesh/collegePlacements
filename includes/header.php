<?php
	session_start();

	define('ROOT',$_SERVER['DOCUMENT_ROOT'].'/collegePlacements/');
	define('BASE_URL',$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/collegePlacements/');
	// Foratted print_r
	function pr($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

?>