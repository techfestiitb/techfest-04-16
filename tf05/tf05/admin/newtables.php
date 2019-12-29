<?php

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tech45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$query="SELECT * FROM complist2k5";
$res=mysql_query($query,$link);
while($row=mysql_fetch_row($res))
{
	$quer="CREATE TABLE ".$row[1]."_shortlisted SELECT * FROM ".$row[1];
	$resu=mysql_query($quer,$link);
		$quers="DELETE FROM ".$row[1]."_shortlisted";
	$resul=mysql_query($quers,$link);
	
}
$query="SELECT * FROM wslist2k5";
$res=mysql_query($query,$link);
while($row=mysql_fetch_row($res))
{
	$quer="CREATE TABLE ".$row[1]."_shortlisted SELECT * FROM ".$row[1];
	$resu=mysql_query($quer,$link);
	$quers="DELETE FROM ".$row[1]."_shortlisted";
	$resul=mysql_query($quers,$link);
}


?>