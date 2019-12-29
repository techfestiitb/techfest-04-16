<?php
include_once("./validate.php");
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$query="SELECT * FROM contact_info";
$result=mysql_query($query) or die ("Mysql error : ".mysql_error());
echo "<table width=100%>";
while($row=mysql_fetch_row($result))
	echo "<tr><td><a href=./printform.php?id={$row[0]}>{$row[0]}</a></td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td></tr>";
?>
