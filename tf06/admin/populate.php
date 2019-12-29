<?php

$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$file=$_GET['t'];
$query="DESCRIBE {$file}";
$result=mysql_query($query);
echo mysql_error();
$row=mysql_fetch_array($result);
print_r($row);
$query="SELECT * FROM {$file}";
$result=mysql_query($query);
echo mysql_error();
$num=mysql_num_fields($result);
?>
<form method='post' action='addvalues.php'>
<table border='0' cellpadding='10' cellspacing='10' width='100%'>
<?
for($i=0;$i<$num;$i++)
{
$name=mysql_field_name($result,$i);
$size=mysql_field_len($result,$i);
$type=mysql_field_type($result,$i);
echo "<tr><td align=center>{$name}</td><td>{$size}</td><td>{$type}</td><td><textarea rows=5 cols=30 name={$i}></textarea></td></tr>";
}
?>
</table>
<input type='hidden' name='file' value="<? print $file; ?>">
<input type='submit' name='submit' value='submit'>
</form>
