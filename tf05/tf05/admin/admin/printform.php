<?php
include_once("./validate.php");
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
if ($_GET['id']=="")
 {
	echo "invalid input";
	exit;
 }

$query="SELECT * FROM contact_info WHERE id='{$_GET['id']}'";
$result=mysql_query($query) or die ("Mysql error : ".mysql_error());
$row=mysql_fetch_row($result);
if (!$row)
 {
	echo "invalid input";
	exit;
 }
echo "<b>Details of Contingent Leader</b>";  
echo "<table width=100%>";
echo "<tr><td width=20%>&nbsp;</td><td width=20%>Name of College</td><td width=50%>{$row[1]}</td><td></td></tr>";
echo "<tr><td width=20%>&nbsp;</td><td width=20%>Contingent Leader</td><td width=50%>{$row[2]}</td><td></td></tr>";
echo "<tr><td width=20%>&nbsp;</td><td width=20%>City</td><td width=50%>{$row[3]}</td><td></td></tr>";
echo "<tr><td width=20%>&nbsp;</td><td width=20%>Postal address</td><td width=50%>{$row[4]}</td><td></td></tr>";
echo "<tr><td width=20%>&nbsp;</td><td width=20%>E-mail</td><td width=50%>{$row[5]}</td><td></td></tr>";
echo "<tr><td width=20%>&nbsp;</td><td width=20%>Phone</td><td width=50%>{$row[6]}</td><td></td></tr>";
echo "<tr><td width=20%>&nbsp;</td><td width=20%>Fax</td><td width=50%>{$row[7]}</td><td></td></tr>";
echo "</table>";

$query="SELECT * FROM acco_info WHERE id='{$_GET['id']}'";
$result=mysql_query($query) or die ("Mysql error : ".mysql_error());
echo "<b>Details of Contingent Members</b>";  

echo "<table width=100%>";
	echo "<tr><td width=20%>$nbsp;</td><td>S.No.</td><td width=20%>Name</td><td>Sex</td><td width=30%>E-mail</td><td></td></tr>";
$count=1;
while($row=mysql_fetch_row($result))
 {
	echo "<tr><td width=20%>&nbsp;</td><td>{$count}</td><td width=20%>{$row[1]}</td><td>{$row[2]}</td><td width=30%>{$row[3]}</td><td></td></tr>";
	$count++;
 }
echo "</table>";
?>
