<?php

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="SELECT Name,Email FROM ".$_GET['t'];
$r=mysql_query($query);
while($row=mysql_fetch_row($r))
 {
	$query1 = "INSERT INTO mailinglist (Name,Email) Values ('{$row[0]}','{$row[1]}')";
	mysql_query($query1); 
 }

mysql_close($link);
?>
