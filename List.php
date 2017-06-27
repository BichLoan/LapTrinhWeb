<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "demo";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

if(isset($_POST['btn-save']))
{
$sql_in= mysql_query("SELECT username FROM users");
while($r = mysql_fetch_array($sql_in)){
		echo $r['username'].'<br/>';
	}
}

?>

