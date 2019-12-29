<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());


$query="SELECT Regnum, Name1, Name2, Name3, Name4 FROM survivor";
$result=mysql_query($query);
echo "<table>";
while($row=mysql_fetch_row($result))
	echo "<tr><td>{$row[0]}<td>{$row[1]}<td>{$row[2]}<td>{$row[3]}<td>{$row[4]}</tr>";
echo"</table>";
exit;
?>


