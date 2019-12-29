<?php

include_once("./validate.php");
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$tab=$_GET{'t'};
//echo "{$tab}";
$query="DELETE FROM ".$tab;
$res=mysql_query($query,$link);
//echo mysql_error();

?>

<html>
			<HEAD><SCRIPT LANGUAGE="JavaScript">
			redirTime = "1";
			redirURL = "./main.php";
			function redirTimer() { self.setTimeout("self.location.href = redirURL;",redirTime); }
			</script>
			<BODY onLoad="redirTimer()">
			</body>
</html>
	