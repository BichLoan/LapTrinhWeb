<?php 
	if(isset($_POST["ok"])){
		$user = $pass = "";
		if($_POST["username"] == NULL){
			echo "Please enter your username<br />";
		}
		else{
			$user = $_POST['username'];
		}
		if($_POST['pw'] == NULL){
			echo "Please enter your password<br />";
		}
		else{
			$pass = $_POST['pw'];
		}
	}
	if(isset($_POST['username'])){
		$cookie_name = $_POST['username'];
		$cookie_pass = $_POST['pw'];
	}
	else{
		$cookie_name = $_COOKIE["username"]; 
		$cookie_pass = $_COOKIE["pw"]; 
	}
	$username = "root";
	$password = "";
	$host = "localhost";
	$database = "sinhvien";
	$connection = mysql_connect($host, $username, $password);
	mysql_select_db($database, $connection);
	mysql_query("SET NAMES 'UTF8'");
	$sql = "SELECT * 
			FROM students
			WHERE name='".$cookie_name."' and id = '".$cookie_pass."'
			";
	$query=mysql_query($sql);
	if(mysql_fetch_array($query) == NULL){
		echo "User not found";
	}
	else{
		echo "Welcome ".$cookie_name."<br>";
		setcookie("username",$cookie_name,time()+(3*86400), "/");
		setcookie("pw",$cookie_pass,time()+(3*86400), "/");
	}
	mysql_close($connection);
	
?>