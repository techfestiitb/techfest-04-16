<?php




$dbhost = '66.98.128.63';
	$dbname = 'techfest';
	$dbuser = 'techfest';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$query="INSERT INTO complist2k5 VALUES ('Constructa','constructa2k5')";
	$r=mysql_query($query,$link);
	echo mysql_error();
	$query="CREATE TABLE constructa2k5_shortlisted SELECT * FROM constructa2k5";
	$r=mysql_query($query,$link);
	echo "2".mysql_error();
	$query="DELETE FROM constructa2k5_shortlisted";
	$r=mysql_query($query,$link);
	echo "3".mysql_error();
	
	?>
















