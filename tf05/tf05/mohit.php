<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="DELETE FROM survivor WHERE regnum LIKE '%'";
mysql_query($query);

$query="SELECT regnum from survivor";
$result=mysql_query($query);

while($row=mysql_fetch_row($result))
 {
	echo $row[0];
 }



?>

