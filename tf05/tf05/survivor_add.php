<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());

$result=mysql_list_tables($dbname);

while($row = mysql_fetch_row($result))
	echo " $row[0]\n";
?>
