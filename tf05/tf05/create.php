<?php

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query = "CREATE TABLE mailinglist(Name varchar(30),Email varchar(30))";
mysql_query($query)
or die("Could not connect : " . mysql_error());

?>
