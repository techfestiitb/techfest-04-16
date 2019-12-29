<?php


$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$query="SELECT * FROM complist2k5";
$result=mysql_query($query,$link);
echo mysql_error();
while($row=mysql_fetch_row($result))
{
	$quer="DELETE FROM ".$row[1]."_shortlisted";
	$res=mysql_query($quer,$link);
echo mysql_error();
}
$query="SELECT * FROM wslist2k5";
$result=mysql_query($query,$link);
echo mysql_error();
while($row=mysql_fetch_row($result))
{
	$quer="DELETE FROM ".$row[1]."_shortlisted";
	$res=mysql_query($quer,$link);
echo mysql_error();
}

?>