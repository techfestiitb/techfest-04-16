<?php
$dbhost='66.98.128.63';
$dbname='techfest';
$dbuser='techfest';
$dbpasswd='tec45st';
$l=mysql_connect($dbhost,$dbuser,$dbpasswd);
mysql_select_db($dbname);

//$query="DELETE FROM partacco_data";
//$result=mysql_query($query);
//echo mysql_error();
$query="UPDATE code SET code='CC05' WHERE code='CCO5'";
$result=mysql_query($query);
echo mysql_error();


?>
