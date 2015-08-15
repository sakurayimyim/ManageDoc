<?php
$host="localhost";
$user="root";
$pw="root";
$dbname="manageDoc";
global $dbname;
	$link=mysql_connect($host,$user,$pw);
if(!$link)
{
	echo "<h3>ERROR : cann't connect to database</h3>";
	exit();
}else{
	mysql_db_query($dbname,"SET NAME UTF8");
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
}
?>