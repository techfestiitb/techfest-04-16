<?php
include_once("./validate.php");

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="SELECT * FROM digitalcert12k5 ORDER BY objscore DESC";
$result=mysql_query($query) or die ("Mysql Error1 : ".mysql_error());
echo "<table>";
while($row=mysql_fetch_row($result))
 {
	$query1="SELECT * FROM digitalcert2k5 WHERE Regnum='{$row[0]}'";
	$result1=mysql_query($query1) or die ("Mysql Error1 : ".mysql_error());
	$row1=mysql_fetch_row($result1);
	echo "<tr><td>{$row1[0]}<td>{$row1[1]}<td>{$row1[2]}<td>{$row1[3]}<td>{$row[3]}<td>{$row[4]}<td>{$row[5]}</tr>";
 }
echo "</table>";

?>