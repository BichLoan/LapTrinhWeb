<?php		
	if(empty($_POST['username'])) exit;
	$db = mysql_connect("localhost","root","");
	if(!$db)
	{
		echo "Không thể kết nối được dữ liệu";
		exit;
	}
	$db_selected = mysql_select_db("demo",$db);
	if(!$db_selected)
	{
		die ("Không thể sử dụng CSDL : ". mysql_error());
	}
	$sql = "SELECT * FROM `users` WHERE `username`='".$_POST['username']."'";
	$query = mysql_query($sql);
	$kiem_tra =mysql_fetch_array($query);
	if($kiem_tra != NULL)
	{
		echo "YES";
	}
	else
	{
		mysql_query("insert  into `users`(`id`,`username`) values ('".$_POST['pw']."','".$_POST['username']."')"); 
		echo "NO";
	}
					
				
				
		
?>
