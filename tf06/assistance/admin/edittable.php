<?php
include_once("./validate.php");
$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="SELECT * FROM events2k6";
$result=mysql_query($query);
?>
<html>
			<head>
			<title>Techfest 2006 Admin page</title>
			<link rel="stylesheet" href="./css/style.css" media="screen">
			</head>
			<body>
			<br><br>
			<div style="float:right; color:white; "><a href="logout.php">Logout</a></div>
			<br><br>
			<div id="content">
		
	<?		
while($row = mysql_fetch_row($result))
{
	echo "<a href=./edit.php?t={$row[1]}>{$row[0]}</a><br>";

}
?>
</div>
</body>
			</html>