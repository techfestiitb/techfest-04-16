<?php


$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
                                                                                                                            
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
                                                                                                                            
/*$query="CREATE TABLE anaconda2k5_shortlisted (SELECT * FROM anaconda2k5)";
$result=mysql_query($query);
echo mysql_error();

$query="DELETE FROM anaconda2k5_shortlisted";
$result=mysql_query($query);
echo mysql_error();*/

$query="INSERT INTO complist2k5 VALUES ('Anaconda','anaconda2k5')";
$result=mysql_query($query);
echo mysql_error();

?>

