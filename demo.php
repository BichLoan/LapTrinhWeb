<!DOCTYPE html>
<html>
	<body>
		<form>
			User name:<br>
			<input type = "text" name = "username"><br>
			User password:<br>
			<input type = "password" name = "pw">
		</form>
		<?php  
			$username = "root";
			$password = "";
			$host = "localhost";
			$database = "demo";
			$connection = mysql_connect($host, $username, $password);
			mysql_select_db($database, $connection);
			mysql_query("SET NAMES 'UTF8'");
			$sql = "SELECT * 
					FROM employees 
					WHERE employeeNumber = 1002
					";
			$query = mysql_query($sql);
			while($row = mysql_fetch_array($query)){
				echo $row["employeeNumber"]." - ".$row["lastName"]." - ".$row["firstName"]."<br />";
			}	
			mysql_close($connection);
		?>
	</body>
</html>