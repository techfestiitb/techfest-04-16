<?php
//include_once("./validate.php");
?>
<h1>List Of Competitions</h1>

<?php
$dbhost = '10.13.213.19';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'enigma';

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
echo "<center><table width=400>";
echo "<tr><td>REGISTRATION</td><td>SHORTLISTED REGISTRATIONS</td></tr>";
while($row=mysql_fetch_row($result))
 	echo "<tr><td><a href=./showtable.php?t={$row[1]}>{$row[0]}</a></td><td><a href=./showtable.php?t={$row[2]}>{$row[0]}</a></td></tr>";	
echo "</table>";
?>