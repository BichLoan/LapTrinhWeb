<!DOCTYPE html>
<html>
	<body>
		<form method = "post">
			User name:<br>
			<input type = "text" name = "username"><br>
			User password:<br>
			<input type = "password" name = "pw"><br>
			ReConfirmPassword:<br>
			<input type = "password" name = "confirmPW"><br>
			<input type = "submit" name = "okie" value = "Sign-up"><br>
			<?php
				if (isset($_POST['okie']))
				{      
					$user = $pass = $cofirm = "";
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
					if($_POST['confirmPW'] == NULL){
						echo "Please enter your password<br />";
					}
					else{
						$pass = $_POST['confirmPW'];
					}
					$username = "root";
					$password = "";
					$host = "localhost";
					$database = "sinhvien";
					$connection = mysql_connect($host, $username, $password);
					mysql_select_db($database, $connection);
					mysql_query("SET NAMES 'UTF8'");

					$name=$_POST['username'];                
					$pass=$_POST['pw'];
					mysql_query("insert  into `students`(`id`,`name`) values ('$pass','$name')"); 
					
					mysql_close($connection);
					echo "Dang ky thanh cong";
				}
						
			?>
		</form>
	</body>
</html>