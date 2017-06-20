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
		if($user && $pass){
			$username = "root";
			$password = "";
			$host = "localhost";
			$database = "demo";
			$connection = mysql_connect($host, $username, $password);
			mysql_select_db($database, $connection);
			mysql_query("SET NAMES 'UTF8'");
			$sql = "SELECT * 
					FROM employees
					WHERE firstName='".$user."' and employeeNumber = '".$pass."'
					";
			$query=mysql_query($sql);
			if(mysql_fetch_array($query) == NULL){
				echo "User not found";
			}
			else{
				echo "Welcome ".$user;
			}
			mysql_close($connection);
		}
	}
	
?>