<?php

if ($_POST['action']=="")
{
?>
<html>
<body>
<form action="feedback.php" method="post" >
<input type="text" size="20" name="filename">
<input type="submit" value="email" name="action">
</form>
</body>
</html>
<?
}

else if ($_POST['action']=="email")
{
$dbhost = '70.85.134.18';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
$index=0;
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$file=$_POST['filename'];
echo $file."<br>";
$query="SELECT * FROM ".$file;
$result=mysql_query($query,$link);
$len=mysql_num_fields($result);
echo "no of fields".$len."<br>";
for($i=0;$i<$len;$i++)
{
	$str=mysql_field_name($result,$i);
	echo $str."<br>";
	if(!(stristr($str, 'email') === FALSE))
	{
		$fields[$index]=$i;
		$index++;
	}

}
print_r($fields);
echo "<html><body>";
$nof=count($fields);
$query="SELECT * FROM ".$file;
$result=mysql_query($query,$link);
while($row=mysql_fetch_row($result))
{
	for($i=0;$i<$nof;$i++)
	{	
		$j=$fields[$i];
		echo "<b>".$row[$j]."<b><br>";
	}
}
echo "</body></html>";



}

