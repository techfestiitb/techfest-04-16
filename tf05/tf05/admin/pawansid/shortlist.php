<?php
include_once("./validate.php");
?>
<h1>List Of Competitions</h1>

<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

if ($_GET['t']=="comp")
{


$query="SELECT * FROM complist2k5";
$result=mysql_query($query);
echo "<center><table width=400>";
echo "<tr><td>REGISTRATION</td></tr>";
while($row=mysql_fetch_row($result))
echo "<tr><td><a href=./reshortlist.php?r=comp&t={$row[1]}>{$row[0]}</a></td></tr>";	
echo "</table>";

}
if ($_GET['t']=="ws")
{


$query="SELECT * FROM wslist2k5";
$result=mysql_query($query);
echo "<center><table width=400>";
echo "<tr><td>REGISTRATION</td></tr>";
while($row=mysql_fetch_row($result))
echo "<tr><td><a href=./reshortlist.php?r=ws&t={$row[1]}>{$row[0]}</a></td></tr>";	
echo "</table>";

}
?>






