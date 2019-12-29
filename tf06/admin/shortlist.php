<?php
include_once("./validate.php");
?>
<html>
<head><title>Create Shortlist</title></head>
<body style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; ">
<br><br><br><br><br>
<style type="text/css">
a {color:#FFFFFF; text-decoration:none; font-size:11px;}
a:link {color:#FFFFFF; text-decoration:none;}
a:visited {color:#FFFFFF; text-decoration:none;}
a:hover {color:#D0D0D0; text-decoration:underline;}
</style>
<center>
<table border="0" cellspacing="10px" style=" font-size:11px; " width="70%">
<?php
	$dbhost="localhost";
	$dbname="teamtech_techfest";
	$dbuser="teamtech_techfes";
	$dbpasswd="tec45st";
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$query="SELECT * FROM events2k6";
$result=mysql_query($query);
while($row=mysql_fetch_row($result))
{
	echo "<tr><td><a href=./reshortlist.php?t={$row[1]}>{$row[0]}</a></td></tr>";	

}
?>
</table>
</center>
</body>
</html>




