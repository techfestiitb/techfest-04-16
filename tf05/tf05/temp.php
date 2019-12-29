<?php
$dbhost = '70.85.134.18';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());


$result = mysql_list_tables($dbname);

if (!$result) {
   echo "DB Error, could not list tables\n";
   echo 'MySQL Error: ' . mysql_error();
   exit;
}
?>
<table>
<?
while ($row = mysql_fetch_row($result)) { 

$l="./temp1.php?t=".$row[0];
$l1="./populate.php?t=".$row[0];

?><tr><td> <a href="<?echo "$l";?>"><?  echo "Table: $row[0]";?></a>  
&nbsp;&nbsp;</td><td>  <a href="<?echo "{$l1}";?>"> Add entries of this 
table</a></td></tr>
<?
 }

mysql_free_result($result);





mysql_close($link);

?>
</table>
