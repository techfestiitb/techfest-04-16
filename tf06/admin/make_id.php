<?
$dbhost = 'techfest.techfest.org';
$dbname = 'techfest';
$dbuser = 'techfestiitb';
$dbpasswd = 'tec45st';
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="CREATE TABLE question_id_grey (Regnum varchar(50),id varchar(255),Email varchar(255),submit int)";
$result=mysql_query($query);
echo mysql_error();
$query1="SELECT * FROM grey_circuits2k6";
$result1=mysql_query($query1);
while ($row=mysql_fetch_row($result1))
{
	$str=$row[0].$row[1].$row[2];
	$md5=md5($str);
	$row[2]=strtolower($row[2]);
	$query2="SELECT * FROM question_id_grey WHERE id='{$md5}'";
	$result2=mysql_query($query2);
	$num=mysql_num_rows($result2);
	if ($num!=0)
	{
		echo "match found<br>old md5: ".$md5;
		$md5=md5($md5.time());
		echo "<br>new md5: ".$md5."<br>";
	
	}
	$query3="INSERT INTO question_id_grey VALUES ('GC06".$row[0]."','{$md5}','{$row[2]}',0)";
	$result3=mysql_query($query3);
	echo mysql_error();




}

?>