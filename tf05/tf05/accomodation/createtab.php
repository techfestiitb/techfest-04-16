<?php

$dbhost = '66.98.128.63';
	$dbname = 'techfest';
	$dbuser = 'techfest';
	$dbpasswd = 'tec45st';
	$l=mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Mysql Database Connect Failed : " . mysql_error());
	mysql_select_db($dbname) or die("Database select failed : " . mysql_error());

$query="INSERT INTO code VALUES ('YP05','Power Boats')";    
$result=mysql_query($query);
echo mysql_error();
$query="INSERT INTO code VALUES ('LA05','Atlantis II')";    
$result=mysql_query($query);
echo mysql_error();
$query="INSERT INTO code VALUES ('LC05','Constructa')";    
$result=mysql_query($query);
echo mysql_error();
?>                                                  