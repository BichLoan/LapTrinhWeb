<?php		
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
	$database = "demo";
	$connection = mysql_connect($host, $username, $password);
	mysql_select_db($database, $connection);
	mysql_query("SET NAMES 'UTF8'");
	$sql = "SELECT * 
			FROM users
			WHERE username='".$cookie_name."' and password = '".$cookie_pass."'
			";
	$query=mysql_query($sql);
	if(mysql_fetch_array($query) == NULL){
		echo "User not found";
	}
	else{
		header('Location:HomePage.php');
		setcookie("username",$cookie_name,time()+(3*86400), "/");
		setcookie("pw",$cookie_pass,time()+(3*86400), "/");
	}
	mysql_close($connection);
?>
