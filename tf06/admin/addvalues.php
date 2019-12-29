<?php

$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$file=$_POST['file'];
print_r($_POST);
$query="SELECT * FROM {$file}";
$result=mysql_query($query);
echo mysql_error();
$num=mysql_num_fields($result);
$query="INSERT INTO {$file} VALUES (";
for($i=0;$i<$num;$i++)
{
	$type=mysql_field_type($result,$i);
	echo $type;
	if ($type=='int')
	{
		if ($i==$num-1)
		$query .= $_POST[$i];
		else
		$query .= $_POST[$i].",";
	}
	else 
	{	echo "woo";
		if ($i==$num-1)
		$query .= "'".$_POST[$i]."'";
		else
		{	echo $_POST[$i];
			$query .= "'".$_POST[$i]."',";
		}
	
	}
}
$query .= ")";
echo $query."<br>";
$result=mysql_query($query) or die("cannot complete query");
echo mysql_error();
?>
