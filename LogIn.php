<?php 
	if(!isset($_COOKIE["username"]) && !isset($_COOKIE["pw"])) {
		include('Bai1.php');
		exit;;
	}
	else {
		include('Connect.php');
		exit;;
	}
?>