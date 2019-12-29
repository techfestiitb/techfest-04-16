<?php
if ($_POST['action']=="")
 {
?>
<form action="./complist.php" method="post">
enter Comp name&nbsp;<input name="t1" type="text"><br><br>
enter table name&nbsp;&nbsp;&nbsp;<input name="t2" type="text"><br>
<input name="action" type="submit" value="GO">
</form>

<?php
 }
else
 {
	$dbhost = '66.98.128.63';
	$dbname = 'techfest';
	$dbuser = 'techfest';
	$dbpasswd = 'tec45st';
	
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	
//	$query="CREATE TABLE wslist2k5 (name varchar(30), tablename varchar(30))";
//	mysql_query($query);
	
	$query="INSERT INTO wslist2k5 VALUES('".$_POST['t1']."','".$_POST['t2']."')";
	mysql_query($query);

	$query="SELECT * FROM wslist2k5";
	$result=mysql_query($query);
	echo "<center><table><tr><td>Name</td><td>Tablename</td></tr>";
	while($row=mysql_fetch_row($result))	
	 	echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td></tr>";
 	echo "</table><a href=./complist.php>click here</a>";
 }
 ?>