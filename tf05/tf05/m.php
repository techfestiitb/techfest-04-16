<?php

$dbhost = '66.98.128.63';   
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
         
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
        
$query="CREATE TABLE newsletter2005 (email varchar(30))";
$result=mysql_query($query);
if ($result)
        {
                echo "Table created successfully";
        }
?>

