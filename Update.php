<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "demo";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

if(isset($_POST['content']))
{
	$content=$_POST['content'];
	$name = $_COOKIE['username'];
	mysql_query("insert into messages(msg, username) values ('$content', '$name')");
	$sql_in= mysql_query("SELECT * FROM messages order by msg_id desc");
	$r = mysql_fetch_array($sql_in);
	echo "-----------------------------".'<br/>';
	echo "User: ".$r['username'].'<br/>'.$r['msg'].'<br/>';
	echo "-----------------------------".'<br/>';
	
}
?>
