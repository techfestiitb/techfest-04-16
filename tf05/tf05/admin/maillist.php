<?php
include_once("./validate.php");
if($_GET['r']=="comp")
	echo "<h1>Select Competitions</h1>";
elseif ($_GET['r']=="ws")
	echo "<h1>Select Workshop</h1>";
else
 {
	echo "Invalid entry. Get Out!!!!!!";
	exit;
 }
	

?>

<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

if ($_GET['r']=="comp")
	$query="SELECT * FROM complist2k5";
elseif ($_GET['r']=="ws")
	$query="SELECT * FROM wslist2k5";
else
 {
	echo "Invalid entry. Get Out!!!!!!";
	exit;
 }

$result=mysql_query($query);
echo "<center><table width=200>";
while($row=mysql_fetch_row($result))
 	echo "<tr><td><a href=./mailtable.php?t={$row[1]}>{$row[0]}</a></td></tr>";	
echo "</table>";
?>