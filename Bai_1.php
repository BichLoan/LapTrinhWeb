<!DOCTYPE html>
<html>
	<body>
		<form method = "post">
			Lua chon cua ban:<br>
			<input type = "submit" name = "ok" value = "Log-in"><br>
			<input type = "submit" name = "signup" value = "Sign-up"><br>
			<?php
			if(isset($_POST['ok'])){
				if(!isset($_COOKIE["username"]) && !isset($_COOKIE["pw"])) {
					header('Location:Bai1.php');
					exit;;
				}
				else {
					header('Location:Connect.php');
					exit;;
				}
			}
			if(isset($_POST['signup'])){
				header('Location:DangKy.php');
				exit;
			}
				?>
		</form>
		
	</body>
</html>