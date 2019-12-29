<?php

include_once("./validate.php");
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="SELECT * FROM {$_POST['t']}";
$result=mysql_query($query) or die("Mysql Error : ".mysql_error());
while($row=mysql_fetch_row($result))
 {
	if($_POST[$row[0]]=="1")
	 {
		$query1="DELETE FROM {$_POST['t']} WHERE Regnum='{$row[0]}'";
		echo "<br>{$query1}";
		mysql_query($query1) or die("Mysql error : ".mysql_error());
		echo "<br> Record Successfully Deleted <br>";
	 }
 }
?>





