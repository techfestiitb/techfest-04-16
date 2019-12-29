<?php
include_once("./validate.php");
?>
<h1>List Of Competitions</h1>

<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="SELECT * FROM complist2k5";
$result=mysql_query($query) or die ("Mysql error : ".mysql_error());
while($row=mysql_fetch_row($result))
 {	
	$query="CREATE TABLE {$row[1]}_rejected SELECT * FROM {$row[1]}";
	mysql_query($query) or die ("Mysql error : ".mysql_error());
	echo $query;
 }
?>